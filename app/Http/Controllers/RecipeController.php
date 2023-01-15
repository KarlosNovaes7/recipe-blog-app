<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RecipeController
{
    public function index()
    {
        $response = Http::get('www.themealdb.com/api/json/v1/1/lookup.php?i=52773');
        $recipes = json_decode($response);
        return view('blog.blog-post')->with('recipes', $recipes);
    }
}
