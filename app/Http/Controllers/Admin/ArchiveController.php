<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Archive;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArchiveController extends Controller
{
    public function deletePostHighlight(Request $request){
        $archive = Archive::where('post_id', $request->id)->where('highlight', true)->first();
        Storage::delete($archive->path);
        $archive->delete();
    }
}
