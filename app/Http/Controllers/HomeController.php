<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(Product $product)
    {
        // return "hamza";
        // TODO: Implement __invoke() method.
        return view("home",compact("product"));
    }
}
