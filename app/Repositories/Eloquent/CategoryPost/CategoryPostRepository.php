<?php

namespace App\Repositories\Eloquent\CategoryPost;

use App\Models\Admin\CategoryPost;
use App\Repositories\Contracts\ICategoryPostRepository;
use App\Repositories\Repository;
use Illuminate\Support\Str;

class CategoryPostRepository extends Repository implements ICategoryPostRepository {

	public function __construct()
	{
		$this->model = new CategoryPost();
	}

	protected function structureUpInsert($request): array
	{
        $request['slug'] = Str::slug($request['name']);
		$fields = array_keys($request);
		return $this->filter_request($request, $fields);
	}
}
