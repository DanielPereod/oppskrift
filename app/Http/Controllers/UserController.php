<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;
use App\User;
use Illuminate\Support\Facades\Storage;
use File;

class UserController extends Controller
{
    public function showProfile($id){
        $user = User::where('id', $id)->first();
        $recipes = Recipe::orderBY('created_at', 'desc')->where('user_id', $id)->paginate(15);
        $file = Storage::url('recipe_images'); ;
        return view('user.profile', [
            'recipes' => $recipes, 
            'file' => $file, 
            'user' => $user
        ]);
    }

    public function favSave($id){
        $recipe = Recipe::find($id);
        $user_id = auth()->user()->id;
        $user = User::where('id', $user_id)->first();


        if($user->favorite_recipes == null){
            $array = [$id];
    
        } else {
            $arrayLenght = count(json_decode($user->favorite_recipes));
            $array = json_decode($user->favorite_recipes);
            array_push($array, $id);

            foreach (json_decode($user->favorite_recipes) as $recipe) {
                if ($recipe == $id) {
                    return back()->with([
                        'error' => 'La receta ya ha está añadida a tus favoritos'
                    ]);;
                }
            }
        }
        $user->favorite_recipes = json_encode($array);

        $user->save();

        return back()->with([
            'message' => 'Receta añadida a tus favoritos'
        ]);
    }

    public function favRecipes(){
        $user_recipes = auth()->user()->favorite_recipes;

        if($user_recipes == null){
            return view('user.favorites');
        } 

        $user_recipes_array = json_decode($user_recipes);

        $recipes = Recipe::whereIn('id', $user_recipes_array)->paginate(15);
        $file = Storage::url('recipe_images'); 

        return view('user.favorites', [
            'recipes' => $recipes, 
            'file' => $file, 
        ]);
    }

    public function favRemove($id){
        $user_recipes = auth()->user()->favorite_recipes;

        $user_recipes_array = json_decode($user_recipes);

        $index = array_search($id, $user_recipes_array);

        unset($user_recipes_array[$index]);

        $user_recipes = array_values($user_recipes_array);  

        $recipes = json_encode($user_recipes,true);
    

        $user_id = auth()->user()->id;
        $user = User::where('id', $user_id)->first();

        $user->favorite_recipes = $recipes;

        $user->save();
        return back();
    }

    

}
