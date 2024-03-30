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
        'status',
        'gallery',
        'publication_date',
        'category_posts_id',
    ];

    /**
     * Define o relacionamento com a categoria do post.
     *
     * @return BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(CategoryPost::class, 'category_posts_id');
    }

    /**
     * Define o relacionamento com os arquivos associados ao post.
     *
     * @return HasMany
     */
    public function archives(): HasMany
    {
        return $this->hasMany(Archive::class);
    }

    /**
     * Busca apenas os arquivos da galeria do post
     *
     * @return HasMany
     */
    public function archivesGallery(): HasMany
    {
        return $this->archives()->where('gallery', true);
    }

    /**
     * Define o relacionamento com o arquivo destacado do post.
     *
     * @return HasOne
     */
    public function highlightArchive(): HasOne
    {
        return $this->hasOne(Archive::class)->where('highlight', true);
    }

    /**
     * Define o relacionamento com os arquivos da galeria do post.
     *
     * @return hasMany
     */
    public function galleryArchives(): hasMany
    {
        return $this->hasMany(Archive::class)
            ->where('gallery', true);
    }
}
