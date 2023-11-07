<?php

namespace App\Repositories\Eloquent\Ebook;

use App\Models\Admin\Ebook;
use App\Repositories\Contracts\IEbookRepository;
use App\Repositories\Repository;

class EbookRepository extends Repository implements IEbookRepository {

	public function __construct()
	{
		$this->model = new Ebook();
	}

	protected function structureUpInsert($request): array
	{
        $request['publication_date'] = convertDateToDB($request['publication_date']);
		$fields = array_keys($request);
		return $this->filter_request($request, $fields);
	}
}
