<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function maladies(){
        return $this->belongsToMany(Maladie::class);
    }
    public function recettes(){
        return $this->belongsToMany(Recette::class);
    }
}
