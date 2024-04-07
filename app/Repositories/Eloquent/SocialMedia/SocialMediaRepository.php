<?php 

namespace App\Repositories\Eloquent\SocialMedia;

use App\Repositories\Repository;
use App\Models\Admin\SocialMedia;
use App\Repositories\Contracts\ISocialMediaRepository;

class SocialMediaRepository extends Repository implements ISocialMediaRepository {

	public function __construct()
	{
		$this->model = new SocialMedia();
	}

	protected function structureUpInsert($request): array
	{
		$fields = array_keys($request);
		return $this->filter_request($request, $fields);
	}
}