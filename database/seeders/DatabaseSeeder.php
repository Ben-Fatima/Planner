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
        //$category = Category::factory()->create();
        //$recette = Recette::factory()->create([
        //    'category_id' => $category->id
        //]);
        //$maladie = Maladie::factory()->create();
        //$ingredient = Ingredient::factory()->create();
        //$ingredient2 = Ingredient::factory()->create();
//
        //$recette->accounts()->attach($account->id);
        //$maladie->accounts()->attach($account->id);
        //$ingredient->recettes()->attach($recette->id);
        //$ingredient2->recettes()->attach($recette->id);
    }
}
