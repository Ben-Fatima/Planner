<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maladie extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    public function accounts(){
        return $this->belongsToMany(Account::class);
    }
}
