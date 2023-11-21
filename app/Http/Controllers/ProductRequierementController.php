<?php

namespace App\Http\Controllers;
use App\Models\ProductRequierement;
use Illuminate\Http\Request;

class ProductRequierementController extends Controller
{
    public function index( Request $request){

        $product_id = $request->query('product_id');

        $productsRequierement = ProductRequierement::query()
        -> where('product_id', $product_id)
        -> get();
       
        return $productsRequierement;
     }
}
