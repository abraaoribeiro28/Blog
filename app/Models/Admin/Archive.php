<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archive extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'path',
        'extension',
        'highlight',
        'post_id',
        'ebook_id'
    ];


    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
