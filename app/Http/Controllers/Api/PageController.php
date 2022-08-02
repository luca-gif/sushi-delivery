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
}