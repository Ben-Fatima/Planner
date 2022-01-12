<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create(){
        return view('categories.create');
    }
    public function store(){
        
        $attributs = request()->validate([
            'name'=>'required'
        ]);
        Category::create($attributs);
        return redirect('/recipes');
    } 
}
