<?php

namespace App\Http\Controllers;

use App\Models\articalModel;
use Illuminate\Http\Request;

class articalController extends Controller
{
    //
    public function createArtical (Request $request){
        $create_Art = articalModel::create([
            'title' => $request->input('title'),
           
            'content' =>  $request->input('content'),
        ]);
        return response()->json(['message' => "Article created successfully", 'newArticle' => $create_Art]);
    }

     //get artical
    public function getArtical ( $id = null){
        if($id){
            $artical = articalModel::find($id);

            return  response()->json(['artical'=>$artical]);
        }
        $articals = articalModel::all();

        return view('index', ['articals' => $articals]);
        
    }
    //update artical
    public function updateArtical(Request $request, $id) {
        $findArtical = articalModel::find($id);
        if (!$findArtical) {
            return response()->json(['error' => 'This article does not exist'], 404);
        }
    
        $findArtical->title = $request->input('title');
        $findArtical->content = $request->input('content');
        $findArtical->save();
    
        return response()->json(['message' => 'Update successful', 'newArticle' => $findArtical], 200);
    }
     //delete
     public function deleteArtical( $id) {
        $findArtical = articalModel::find($id);
        if (!$findArtical) {
            return response()->json(['error' => 'This article does not exist'], 404);
        }
    
       $findArtical->delete();
    
        return response()->json(['message' => 'delete successful'], 200);
    }
}
