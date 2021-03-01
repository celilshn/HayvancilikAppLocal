<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnimalsModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    function getCategory(){
        return $this->hasOne('App\Models\Categories',"id","category_id");
    }
}
