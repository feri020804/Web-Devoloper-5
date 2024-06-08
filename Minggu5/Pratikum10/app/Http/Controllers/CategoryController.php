<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {

        $categoris = Category::all();
        dd($categoris);

        return view('category.index', [
            'categoris' => $categoris
        ]);
    }
}
