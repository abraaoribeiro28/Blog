<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'text',
        'author',
        'publication_date',
        'category_posts_id',
    ];

    public function categoryPost()
    {
        return $this->belongsTo(CategoryPost::class, 'category_posts_id');
    }
}
