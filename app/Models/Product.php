<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function category()
    {

        return $this->belongsToMany(Category::class, 'category_id', 'id');
    }
    public function lignecommande()
    {

        return $this->hasMany(LigneCommande::class, 'product_id', 'id');
    }
}
