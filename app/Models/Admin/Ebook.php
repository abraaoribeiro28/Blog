<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Ebook extends Model
{
    use HasFactory;

    protected $table = 'ebooks';

    protected $fillable = [
        'title',
        'author',
        'resume',
        'publication_date',
        'status',
    ];

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
