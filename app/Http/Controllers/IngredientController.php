<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
    public function create(){
        return view('ingredients.create');
    }
    public function store(){
        
        $attributs = request()->validate([
            'name'=>'required',
            'calories'=>'required',
        ]);
        Ingredient::create($attributs);
        return redirect('/recipes');
    } 
}
