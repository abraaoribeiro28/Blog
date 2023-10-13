<?php

namespace App\Repositories\Eloquent\Configuration;

use App\Models\Admin\Configuration;
use App\Repositories\Contracts\IConfigurationRepository;
use App\Repositories\Repository;

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
                $this->getModel()->updateOrCreate(['key' => $key], ['value' => $value]);
            }
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }
}
