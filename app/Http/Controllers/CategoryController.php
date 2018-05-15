<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Instruction;

class CategoryController extends Controller
{

	 function __construct(){
        $this->middleware('auth');
    }
    
   public function index($category){

   	$instructions = Instruction::all();



   	$instructions = $instructions->where('category', $category);

   	


   	return	view('categories.show',compact('category', 'instructions'));
   }
}
