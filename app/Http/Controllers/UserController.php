<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;
use Illuminate\Support\Facades\Storage;
use File;
use App\User;

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

    

}
