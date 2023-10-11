<?php

namespace App\Http\Traits;

use CURLFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

trait FileTrait
{
    /**
     * Cria um arquivo com as informaçẽos que você deseja.
     *
     * @param $path
     * @param $context
     * @return bool
     */
    public function createfile($path, $context): bool
    {
        if ($repository = fopen($path, "a")) {
            fwrite($repository, trim($context));
            fclose($repository);
            return true;
        }
        return false;
    }
}
