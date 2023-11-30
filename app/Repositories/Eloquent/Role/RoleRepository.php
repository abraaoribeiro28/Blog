<?php

namespace App\Repositories\Eloquent\Role;

use App\Repositories\Contracts\IRoleRepository;
use App\Repositories\Repository;
use Spatie\Permission\Models\Role;

class RoleRepository extends Repository implements IRoleRepository {

	public function __construct()
	{
		$this->model = new Role();
	}

	protected function structureUpInsert($request): array
	{
		$fields = array_keys($request);
		return $this->filter_request($request, $fields);
	}
}
