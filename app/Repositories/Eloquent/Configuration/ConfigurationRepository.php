<?php

namespace App\Repositories\Eloquent\Configuration;

use App\Models\Admin\Configuration;
use App\Repositories\Contracts\IConfigurationRepository;
use App\Repositories\Repository;
use Illuminate\Support\Facades\Storage;

class ConfigurationRepository extends Repository implements IConfigurationRepository {

	public function __construct()
	{
		$this->model = new Configuration();
	}

	protected function structureUpInsert($request): array
	{
        return [];
	}

    public function upInsert($request, int $id = null): bool
    {
        try {
            foreach ($request->except('_token', '_method', 'tab') as $key => $value){
                if ($request->hasFile($key) && $request->file($key)->isValid()) {
                    $filename = $key.".".$value->extension();
                    $path = $request->file($key)->storeAs("configurations", $filename, 'public');
                    $value = '/storage/'.$path;
                }
                $this->getModel()->updateOrCreate(['key' => $key], ['value' => $value]);
            }
            Storage::delete("configurations/colors.css");
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }
}
