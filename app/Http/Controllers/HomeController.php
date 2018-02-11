<?php

namespace App\Http\Controllers;
use App\foodRecipes;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
//    __construct function for authentication to check user if logedin
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
//        get all recipes from database with pagination
        $items = DB::table('food_recipes')->orderBy('created_at','desc')->paginate(16);
        return view('home')->with('items', $items);

    }
    
     public function addRecipe(Request $request){
         if($request->isMethod('post')) {
             $addRecipe = new foodRecipes();
             $addRecipe->name = $request->input('name');
             $addRecipe->disc = $request->input('disc');
//             get current name and id for user logedin
             $addRecipe->author = Auth::user()->name;
             $addRecipe->user_id = Auth::user()->id;

//             check if post request have image
             if ($request->hasFile('image')) {
                 $file = $request->file('image');
                 $name = time() . $file->getClientOriginalName();
                 $request->file('image')->move("images/", $name);
                 $addRecipe->image = 'images/'.$name;
             }
             $addRecipe->save();
         }
            return redirect('/');
    }

    public function search(Request $request){
        $search=$request->input('search');
        $items = DB::table('food_recipes')->where('name', 'like', '%'.$search.'%')
            ->orderBy('created_at','desc')->paginate(16);
        return view('home')->with('items', $items);
    }
}
