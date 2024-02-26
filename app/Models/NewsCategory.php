<?php

namespace App\Models;

use App\Base\Interfaces\HasCategory;
use App\Base\Interfaces\HasNews;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class NewsCategory extends Model implements HasCategory, HasNews
{
    use HasFactory;
    protected $table = 'news_categories';
    // protected $primaryKey = 'id';
    // public $incremeting = false;
    // public $keyType = 'char';

    protected $fillable = ['news_id', 'category_id'];
    protected $guarded = [];

    /**
     * news
     *
     * @return BelongsTo
     */
    public function news(): BelongsTo
    {
        return $this->belongsTo(News::class);
    }

    /**
     * category
     *
     * @return BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(NewsCategory::class, 'category_id');
    }


}
