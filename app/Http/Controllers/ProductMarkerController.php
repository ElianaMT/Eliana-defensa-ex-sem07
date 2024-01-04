<?php

namespace App\Http\Controllers;

use App\Models\ProductMarker;
use Exception;
use Illuminate\Http\Request;

class ProductMarkerController extends Controller
{

    public function index(Request $request, $product_id){
        $productsMarkers = ProductMarker::where('product_id', $product_id)->get();
        return $productsMarkers;
     }

    public function store(Request $request){
        try {
            $request->validate([
                'product_id' => 'required|integer',
                'marker_id'=> 'required|integer'
            ]);

            $data = $request->all();

            $productMarker = ProductMarker::create($data);

            return $productMarker;

        } catch (Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], 400);
        }

    }

    public function destroy(Request $request, $product_id, $marker_id){
        $productMarker = ProductMarker::where('product_id', $product_id)
        ->where('marker_id', $marker_id)
        ->first();

        if(!$productMarker) return response()->json(['message' => 'Marcador do produto não encontrado'], 404);

        $productMarker->delete();

        return response('', 204);
    }

 
}
