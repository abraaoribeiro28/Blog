<?php

namespace App\Repositories\Eloquent\Menu;

use App\Models\Admin\Menu;
use App\Repositories\Contracts\IMenuRepository;
use App\Repositories\Repository;

class MenuRepository extends Repository implements IMenuRepository {

	public function __construct()
	{
		$this->model = new Menu();
	}

	protected function structureUpInsert($request): array
	{
        $request['order'] = $request['order'] ?? $this->model->max('order') + 1;
        $request['menus_id'] = $request['menus_id'] != '0' ? $request['menus_id'] : null;
		$fields = array_keys($request);
		return $this->filter_request($request, $fields);
	}
}
