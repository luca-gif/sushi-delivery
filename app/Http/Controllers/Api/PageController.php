<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Food;
use App\Category;
use App\Order;
use App\Type;


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

    public function getFoodByType($slug_type)
    {
        // Prendo una sola tipologia, ma mi dai tutti i cibi inerenti a quella tipologia.
        $type = Type::where('slug', $slug_type)->with('foods')->first();

        return response()->json($type);
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $new_order = new Order();
        $new_order->fill($data);
        $new_order->save();
        dump($data);

        return response()->json($new_order);
    }
}