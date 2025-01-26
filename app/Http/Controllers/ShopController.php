<?php

namespace App\Http\Controllers;

use App\Models\ProductsModel;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(){

        $products = ProductsModel::orderBy('id', 'desc')->take(4)->get();
        return view('shop',compact('products'));
    }
}
