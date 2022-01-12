<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Ingredient;
use App\Models\Recette;
use Illuminate\Http\Request;

class RecetteController extends Controller
{
    public function index(){
        $recipes = Recette::latest()->with(['accounts','ingredients','category'])->get();
        return view('recipe.list',[
            'recipes' => $recipes,
            'ingredients' => Ingredient::all(),
            'categories' => Category::all()
        ]);
    }
    public function create(){
        return view('recipe.create',[
            'ingredients' => Ingredient::all(),
            'categories' => Category::all()
        ]);
    }

    public function store(){
        $category = Category::where('name','=',request('category_id'))->first();
        $attributs = request()->validate([
            'name'=>'required',
            'description'=>'required',
            'thumbnail'=>'required',
            'preparation_time'=>'required',
            'category_id'=>'required',
        ]);
        $attributs['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        $attributs['category_id'] = $category->id;
        Recette::create($attributs);
        return redirect('/recipes');
    } 
    public function edit($id){
        $recipe = Recette::findOrFail($id);
        return view('recipe.edit',[
            'recipe' => $recipe,
            'ingredients' => Ingredient::all()
        ]);
    } 
    public function update($id){
        $recipe = Recette::findOrFail($id);
        $ingredient = Ingredient::where('name','=',request('ingredient'))->first();
        $ingredient->recettes()->attach($recipe->id);
        return redirect('/recipes/edit/'. $recipe->id);
    }
    public function delete($id,$ing){
        $ingredient = Ingredient::findOrFail($ing);
        $recipe = Recette::findOrFail($id);
        $ingredient->recettes()->detach($recipe->id);
        return redirect('/recipes/edit/'. $recipe->id);
    }
}
