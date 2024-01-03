<?php

namespace App\Http\Controllers;
use App\Models\Avaliation;
use Exception;
use Illuminate\Http\Request;

class AvaliationController extends Controller
{

    public function index(){
        $avaliations = Avaliation::all();
        return $avaliations;
     }

    public function store(Request $request){
        try {
            $request->validate([
                'product_id' => 'required|integer',
                'description' => 'string',
                'recommended' => 'boolean',

            ]);

            $data = $request->all();

            $avaliation = Avaliation::create($data);

            return $avaliation;

        } catch (Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], 400);
        }

    }
}
