<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Traits\FileTrait;
use App\Models\Admin\Archive;
use App\Models\Admin\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ArchiveController extends Controller
{
    use FileTrait;

    public function deleteHighlight(Request $request){
        $archive = Archive::where($request->column, $request->id)->where('highlight', true)->first();
        Storage::delete($archive->path);
        $archive->delete();
    }


    public function deleteArchiveGallery(Request $request){
        try {
            $archive = Archive::find($request->id);
            Storage::delete($archive->path);
            $archive->delete();
            return true;
        }catch (\Exception $e){
            return false;
        }
    }


    public function postImages(Request $request)
    {
        DB::beginTransaction();
        try {
            if ($request->hasFile('file') && $request->file('file')->isValid()){
                $post = Post::with('category')->find($request->post_id);
                $file = $request->file('file');
                $extension = $file->getClientOriginalExtension();
                $path = 'posts/'.$post->category->slug.'/'.$request->post_id.'/galeria';
                $name = $this->generateNameFile($path, $extension);

                $archive = Archive::create([
                    'path' => addStoragePath($path. '/' .$name),
                    'name' => $name,
                    'extension' => $extension,
                    'highlight' => false,
                    'gallery' => true,
                    'post_id' => $request->post_id
                ]);

                $image = $this->saveUpload($file, $path, null, $name);
                DB::commit();
                return json_encode($archive, JSON_THROW_ON_ERROR);
            }
            throw new \Exception();
        } catch (\Exception $e){
            DB::rollBack();
            return false;
        }
    }
}
