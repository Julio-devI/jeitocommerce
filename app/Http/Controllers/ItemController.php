<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Store a resource by json file
     * 
     * @param \Illuminate\Http\Request $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function carregarJson(Request $request){
        $file = file_get_contents($request->fileName);
        $dados = json_decode($file, true);
        $items = $dados->item;
        foreach($items as $item){
            $tempItem = new Item();
            $tempItem->save();
        }
        dd($dados);
        
        return response()->json(true, 200);
    }

    public function index()
    {
        return csrf_token(); 
    }
}
