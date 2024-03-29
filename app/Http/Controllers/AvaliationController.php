<?php

namespace App\Http\Controllers;
use App\Models\Avaliation;
use Exception;
use Illuminate\Http\Request;

class AvaliationController extends Controller
{

    public function index(Request $request, $product_id){
        $avaliations = Avaliation::where('product_id', $product_id)->get();

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

    public function update($id, Request $request){
        try {

            $avaliation = Avaliation::find($id);

            if(!$avaliation) return response()->json(['message' => 'Avaliacao não encontrada'], 404);

         /*   $request->validate([
                'name' => [
                    'required',
                    Rule::unique('products')->ignore($avaliation->id),
                ]
            ]);*/ // para validar con o nome do achievement

            $avaliation->update($request->all());

            return $avaliation;

        } catch (Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], 400);
        }
    }

    public function destroy($id){
        $avaliation = Avaliation::find($id);

        if(!$avaliation) return response()->json(['message' => 'O markador do produto não encontrado'], 404);

        $avaliation->delete();

        return response('', 204);
    }
}
