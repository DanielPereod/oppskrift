<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;
use Illuminate\Support\Facades\Storage;
use File;

class RecipeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //Funcion principal de las recetas en las que se muestran todas
    public function index(){
        $recipes = Recipe::orderBY('id')->paginate(15);

        $file = Storage::url('recipe_images'); ;

        return view('recipe.index', ['recipes' => $recipes, 'file' => $file]);
    }

    //Funcion que devuelve la vista del formulario para crear recetas
    public function create(){
        return view('recipe.create');
    }

    //Funcion que recoge valida y guarda los datos recogidos del formulario
    public function save(Request $request){
        $validate = $this->validate($request,[
            'title' => 'required|max:255',
            'ingredient' => 'required|array',
            'description' => 'required|array',
            'category' => 'required|numeric',
            'image' => 'required|image',
            'info' => 'required|array',
        ]);

        $title = $request->input('title');
        $ingredient = $request->input('ingredient');
        $description = $request->input('description');
        $category = $request->input('category');
        $image_path = $request->file('image');
        $info = $request->input('info');

        $user = \Auth::user();
        $recipe = new Recipe();
        $recipe->id = null;
        $recipe->title = $title;
        $recipe->ingredients = json_encode($ingredient);
        $recipe->description = json_encode($description);
        $recipe->category_id = $category;

        $image_path_name = time().$image_path->getClientOriginalName();
        Storage::disk('public')->put($image_path_name, File::get($image_path));
        $recipe->image_path = $image_path_name;

        $recipe->user_id = $user->id;
        $recipe->info = json_encode($info);



        $recipe->save();

        return redirect()->route('home')->with([
            'message' => 'Receta subida con exito'
        ]);
    }

    public function getImage($filename){
        $file = Storage::disk('public')->get($filename);
        return new Response($file, 200);
    }

    public function show(Request $req){
        $id = $req->get('id');
        $recipe = Recipe::where("id", $id)->first();
        return view('recipe.show', ['recipe'=>$recipe]);
    }
}
