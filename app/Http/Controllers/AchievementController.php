<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AchievementController extends Controller
{
    public function index( Request $request){

        $product_id = $request->query('product_id');

        $achievements = Achievement::query()
        -> where('product_id', $product_id)
        -> get();
       
        return $achievements;
     }
 
     public function store(Request $request) {

        try {
            $data = $request->all();

            $request->validate([
                'product_id' => 'integer|required',
                'url' => 'string|required',
                'name' => 'string|required'
            ]);

            $achievement  = Achievement::create($data);

            return $achievement;
        } catch (Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], 400);
        }
    }
    
    public function update($id, Request $request){
        try {

            $achievement = Achievement::find($id);

            if(!$achievement) return response()->json(['message' => 'Premio não encontrado'], 404);

         /*   $request->validate([
                'name' => [
                    'required',
                    Rule::unique('products')->ignore($achievement->id),
                ]
            ]);*/ // para validar con o nome do achievement

            $achievement->update($request->all());

            return $achievement;

        } catch (Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], 400);
        }
    }

     public function destroy($id){
        $achievement = Achievement::find($id);

        if(!$achievement) return response()->json(['message' => 'A conquista não encontrada'], 404);

        $achievement->delete();

        return response('', 204);
    }
}