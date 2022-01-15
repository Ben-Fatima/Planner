<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use App\Models\Recette;
use Illuminate\Http\Request;

class PlannerController extends Controller
{
    public function index(){
        //$recipes = Recette::latest()->with(['accounts','ingredients','category'])->get();
        return view('planner',[
            'ingredients' => Ingredient::all()
        ]);
    }
    public function generate(){
        $recipes = Recette::all();
        $number = request('days');
        $ingredients = request('ingredients');
        $result = [];
            foreach($recipes as $recipe){
                foreach($recipe->ingredients as $ingredient){
                    if (in_array($ingredient->id,$ingredients) ) {
                       array_push($result,$recipe);
                    }
            }
        }
        $result = array_slice(array_unique($result),0,$number);
        return view('generatedPlanner',[
            'recipes' => $result,
            'number' => $number
        ]);
    }
}
