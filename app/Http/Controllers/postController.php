<?php

namespace App\Http\Controllers;

use App\comments;
use App\foodRecipes;
use App\recipePost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class postController extends Controller
{
    //    __construct function for authentication to check user if logedin
    public function __construct(){
        $this->middleware('auth');
    }

     function index($id){
//        get all comments and information about selected recipe
         $comments=comments::all()->sortByDesc('created_at')->where('recipe_id','like',$id);
         $recipe = foodRecipes::findOrFail($id);
         return view('recipePost')->with(['recipe'=> $recipe,'comments'=>$comments]);
    }

    function addComment(Request $request,$id){
        if($request->isMethod('post')){
            $newComment=new comments();
            $newComment->comment=$request->input('comment');
//            get current name for user logedin
            $newComment->user_name=Auth::user()->name;
            $newComment->recipe_id=$id;
            $newComment->save();
        }
        $comments=comments::all()->sortByDesc('created_at')->where('recipe_id','like',$id);
        $recipe = foodRecipes::findOrFail($id);
        return view('recipePost')->with(['recipe'=> $recipe,'comments'=>$comments]);
    }
}
