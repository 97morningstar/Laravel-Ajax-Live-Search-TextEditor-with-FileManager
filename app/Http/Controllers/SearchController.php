<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instruction;


class SearchController extends Controller
{
     


	public function search(Request $request)
    {
    //	dd($request);

    	if($request->ajax()){
    		$find = Instruction::where('name', 'like', '%'.$request->search.'%')->orWhere('category', 'like', '%'.$request->search.'%')->orWhere('content', 'like', '%'.$request->search.'%')->get();
    		return response()->json($find);
    	}

     


			
	}
	

	





}
