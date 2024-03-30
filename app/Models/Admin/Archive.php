<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use mysql_xdevapi\Table;

class Archive extends Model
{
    use HasFactory;

    protected $table = 'archives';

    protected $fillable = [
        'name',
        'path',
        'extension',
        'highlight',
        'gallery',
        'post_id',
        'ebook_id'
    ];


    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
