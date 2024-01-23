<?php

namespace App\Http\Controllers;

use App\Bundle;
use App\Category;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::query()->where('is_deleted', 0)->orderByDesc('id')->limit(4)->get();

        return view('ecommerce.home')->with('products', $products);
    }

    public function shop()
    {
        $products = Product::query()->where('is_deleted', 0)->orderByDesc('id')->get();
        $bundles = Bundle::query()->where('is_deleted', 0)->orderByDesc('id')->get();

        $categories = Category::all();

        return view('ecommerce.shop')->with('products', $products)->with('categories', $categories)->with('bundles', $bundles);
    }

    public function bundleShop()
    {
        $bundles = Bundle::query()->where('is_deleted', 0)->orderByDesc('id')->get();
        $categories = Category::all();

        return view('ecommerce.bundle-shop')->with('bundles', $bundles)->with('categories', $categories);
    }

    public function shopByCategory(Category $category)
    {
        $products = $category->products()->where('is_deleted', 0)->orderByDesc('id')->get();
        $bundles = Bundle::query()->where('is_deleted', 0)->orderByDesc('id')->get();

        $categories = Category::all();

        return view('ecommerce.shop')->with('products', $products)->with('categories', $categories)->with('bundles', $bundles);
    }

    public function about()
    {
        return view('ecommerce.about');

    }

    public function contact()
    {
        return view('ecommerce.contact');

    }
}
