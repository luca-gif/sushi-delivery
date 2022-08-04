<?php

namespace App\Http\Controllers\Api;

use App\Food;
use App\Category;
use App\Type;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class PageController extends Controller
{
    public function index()
    {
        $foods = Food::all();
        $categories = Category::all();
        $types = Type::all();

        return response()->json(compact('foods', 'categories', 'types'));
    }

    public function show($slug)
    {
        $food = Food::where('slug', $slug)->with(['category', 'type'])->first();

        return response()->json($food);
    }

    public function getFoodByCategory($slug_category)
    {
        // Prendo una sola categoria, ma mi dai tutti i cibi inerenti a quella categoria.
        $category = Category::where('slug', $slug_category)->with('foods')->first();

        return response()->json($category);
    }
}