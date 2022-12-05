<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categoryBbs(Category $category)
    {
        return view('index', [
            'bbs' => $category->bbs()->get()
        ]);
    }
}
