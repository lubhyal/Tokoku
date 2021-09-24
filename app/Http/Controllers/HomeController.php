<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class HomeController extends Controller
{
    public function index()
    {
        $products = Product::take(4)->get();
        $url = [];
        foreach($products as $product)
                {
                   $url[] = Storage::url($product->image);
                }
        return view('home.index',compact(['products','url']));
        
    }
}