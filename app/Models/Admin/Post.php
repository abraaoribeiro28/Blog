<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'text',
        'author',
        'clicks',
        'publication_date',
        'category_posts_id',
    ];

    /**
     * Define o relacionamento com a categoria do post.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(CategoryPost::class, 'category_posts_id');
    }

    /**
     * Define o relacionamento com os arquivos associados ao post.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function archives(): HasMany
    {
        return $this->hasMany(Archive::class);
    }

    /**
     * Define o relacionamento com o arquivo destacado do post.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function highlightArchive(): HasOne
    {
        return $this->hasOne(Archive::class)->where('highlight', true);
    }
}
