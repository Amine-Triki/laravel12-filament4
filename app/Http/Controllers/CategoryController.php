<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
      public function show(string $slug)
    {
    $category = Category::where('slug', $slug)
        ->with(['posts' => fn ($q) => $q->published()->with('category')->latest()])
        ->firstOrFail();

    return view('category', compact('category'));
    }
}
