<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    function getFoodCategories(){
        return $this->hasMany("App\Models\FoodCategoryModel","category_id","id");
    }
}
