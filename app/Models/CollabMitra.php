<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CollabMitra extends Model
{
    protected $guarded = [];
    use HasFactory;
    public function collabCategory()
    {
        return $this->belongsTo(CollabCategory::class);
    }
}
