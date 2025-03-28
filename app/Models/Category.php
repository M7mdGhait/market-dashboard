<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public $fillable = ["name", "description","isActive"];
    public function products(){
        return $this->hasMany(Product::class);
    }
}
