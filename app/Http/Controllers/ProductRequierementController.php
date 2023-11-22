<?php

namespace App\Http\Controllers;
use App\Models\ProductRequierement;
use Exception;
use Illuminate\Http\Request;

class ProductRequierementController extends Controller
{
    public function index( Request $request){

        $product_id = $request->query('product_id');

        $productsRequierements = ProductRequierement::query()
        -> where('product_id', $product_id)
        -> get();
       
        return $productsRequierements;
     }

     public function store(Request $request) {

        try {
            $data = $request->all();

            $request->validate([
                'product_id' => 'integer|required',
               
            ]);

            $productRequierementTypeExists= ProductRequierement::query()
            ->where('product_id',$data['product_id'])
            ->where('type', $data['type'])
            ->first();

            if($productRequierementTypeExists){
                return response()->json(['message' =>'O registro ja foi cadastrado'], 409);
            }

            $productRequierement  = ProductRequierement::create($data);

            return $productRequierement;
        } catch (Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], 400);
        }
    }
    
}
