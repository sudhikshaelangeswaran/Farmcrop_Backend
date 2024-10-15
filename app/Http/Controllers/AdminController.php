<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\FarmHouse;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function products()
    {
        $products = Product::all();
        return view('admin.product.view', compact('products'));

    }

    public function productcreate()
    {

    }

    public function farms()
    {
        $farms = FarmHouse::all();
        return view('admin.farmhouse.view', compact('farms'));

    }

    public function farmcreate()
    {
        return view('admin.farmhouse.create');
    }

    public function categories()
    {
        $categories = Category::all();
        return view('admin.categorie.view', compact('categories'));
    }

    public function categorycreate()
    {
        return view('admin.categorie.create');
    }
}
