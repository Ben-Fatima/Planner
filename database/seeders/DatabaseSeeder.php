<?php

namespace Database\Seeders;

use App\Models\Account;
use App\Models\Category;
use App\Models\Ingredient;
use App\Models\Maladie;
use App\Models\Recette;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$user = User::factory()->create();
        //$account = Account::factory()->create([
        //    'user_id' => $user->id
        //]);
        Category::factory()->create(['name'=>'Soups']);
        Category::factory()->create(['name'=>'Salads']);
        Category::factory()->create(['name'=>'Sandwiches/Wraps']);
        Category::factory()->create(['name'=>'Italian']);
        Category::factory()->create(['name'=>'Pasta']);
        Category::factory()->create(['name'=>'Mexican']);
        //$recette = Recette::factory()->create([
        //    'category_id' => $category->id
        //]);
        //$maladie = Maladie::factory()->create();
        Ingredient::factory()->create(['name'=>'Carrot']);
        Ingredient::factory()->create(['name'=>'Cucumber']);
        Ingredient::factory()->create(['name'=>'Onion']);
        Ingredient::factory()->create(['name'=>'Pepper, Green']);
        Ingredient::factory()->create(['name'=>'Pepper, Sweet Red']);
        Ingredient::factory()->create(['name'=>'Potato']);
        Ingredient::factory()->create(['name'=>'Tomato']);
        Ingredient::factory()->create(['name'=>'Cheese']);
        Ingredient::factory()->create(['name'=>'Egg']);
        Ingredient::factory()->create(['name'=>'Chicken']);
        Ingredient::factory()->create(['name'=>'Turkey']);
        Ingredient::factory()->create(['name'=>'Beef']);
        Ingredient::factory()->create(['name'=>'Bread']);
        Ingredient::factory()->create(['name'=>'Pasta']);
        Ingredient::factory()->create(['name'=>'Spaghitti']);

        //$ingredient2 = Ingredient::factory()->create();
//
        //$recette->accounts()->attach($account->id);
        //$maladie->accounts()->attach($account->id);
        //$ingredient->recettes()->attach($recette->id);
        //$ingredient2->recettes()->attach($recette->id);
    }
}
