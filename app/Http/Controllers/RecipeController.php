<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RecipeController
{
    //Seafood
    public function index()
    {
        $response = Http::get('https://www.themealdb.com/api/json/v1/1/filter.php?c=Seafood');
        $recipes = json_decode($response);
        return view('blog.blog-post')->with('recipes', $recipes);
    }

}
class RecipeController{
     //Dessert
     public function index()
     {
         $response = Http::get('https://www.themealdb.com/api/json/v1/1/filter.php?c=Dessert');
         $recipes = json_decode($response);
         return view('blog.blog-post')->with('recipes', $recipes);
     }
 
}