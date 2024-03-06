<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function features()
    {
        return $this->hasMany(ProductFeature::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function galery()
    {
        return $this->hasMany(Gallery::class);
    }

    public function faq()
    {
        return $this->hasMany(Faq::class);
    }
}
