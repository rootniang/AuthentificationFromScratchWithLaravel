<?php

namespace App\Models;

use App\Models\cadres;
use App\Models\Categories;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Articles extends Model
{
    use HasFactory;

    public function categorie() {
        return $this->belongsTo(Categories::class) ;
    }

    public function cadre() {
        return $this->hasOne(cadres::class) ;
    }
}
