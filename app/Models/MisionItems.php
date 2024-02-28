<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MisionItems extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function visionAndMission()
    {
        return $this->belongsTo(MisionItems::class);
    }

}
