<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recette extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function accounts(){
        return $this->belongsToMany(Account::class);
    }
    public function ingredients(){
        return $this->belongsToMany(Ingredient::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
