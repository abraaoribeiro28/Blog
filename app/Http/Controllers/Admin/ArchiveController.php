<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Archive;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArchiveController extends Controller
{
    public function deleteHighlight(Request $request){
        $archive = Archive::where($request->column, $request->id)->where('highlight', true)->first();
        Storage::delete($archive->path);
        $archive->delete();
    }
}
