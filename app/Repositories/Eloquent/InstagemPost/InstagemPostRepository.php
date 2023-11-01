<?php

namespace App\Repositories\Eloquent\InstagemPost;

use App\Models\Admin\InstagramPost;
use App\Repositories\Contracts\IInstagemPostRepository;
use App\Repositories\Repository;

class InstagemPostRepository extends Repository implements IInstagemPostRepository {

	public function __construct()
	{
		$this->model = new InstagramPost();
	}

	protected function structureUpInsert($request): array
	{
		$fields = array_keys($request);
		return $this->filter_request($request, $fields);
	}
}
