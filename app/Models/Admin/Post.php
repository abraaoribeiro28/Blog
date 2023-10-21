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

    public function category()
    {
        return $this->belongsTo(CategoryPost::class, 'category_posts_id');
    }

    public function archives()
    {
        return $this->hasMany(Archive::class);
    }
}
