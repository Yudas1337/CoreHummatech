<?php

namespace App\Models;

use App\Base\Interfaces\HasCategoryNews;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class News extends Model implements HasCategoryNews
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'image',
        'description',
        'tags',
        'category_news_id',
    ];

    protected $autoincrement = false;
    protected $keyType = 'string';

    public function categoryNews(): BelongsTo
    {
        return $this->belongsTo(CategoryNews::class);
    }
}
