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
        $farmhouses = FarmHouse::all();
        return view('admin.farmhouse.view', compact('farmhouses'));

    }

    public function farmcreate()
    {
        return view('admin.farmhouse.create');
    }

    public function farmstore(Request $request)
    {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->extension();
        $request->image->storeAs('public/farmhouse', $imageName);

        FarmHouse::create([
            'name' => $request->name,
            'location' => $request->location,
            'description' => $request->description,
            'image' => $imageName,
        ]);
        return redirect()->route('admin.farms');
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

    public function categorystore(Request $request)
    {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->extension();
        $request->image->storeAs('public/category', $imageName);

        Category::create([
            'name' => $request->name,
            'image' => $imageName,
        ]);
        return redirect()->route('admin.categories');
    }
}
