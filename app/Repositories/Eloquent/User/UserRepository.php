<?php

namespace App\Repositories\Eloquent\User;

use App\Models\User;
use App\Repositories\Contracts\IUserRepository;
use App\Repositories\Repository;

class UserRepository extends Repository implements IUserRepository {

	public function __construct()
	{
		$this->model = new User();
	}

	protected function structureUpInsert($request): array
	{
		$fields = array_keys($request);
		return $this->filter_request($request, $fields);
	}
}
