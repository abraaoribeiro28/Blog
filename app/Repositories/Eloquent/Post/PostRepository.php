<?php

namespace App\Repositories\Eloquent\Post;

use App\Models\Admin\Post;
use App\Repositories\Contracts\IPostRepository;
use App\Repositories\Repository;
use Illuminate\Support\Str;

class PostRepository extends Repository implements IPostRepository {

	public function __construct()
	{
		$this->model = new Post();
	}

	protected function structureUpInsert($request): array
	{
		$request['slug'] = Str::slug($request['title']);
		$request['publication_date'] = convertDateToDB($request['publication_date']);
		$fields = array_keys($request);
		return $this->filter_request($request, $fields);
	}
}
