<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Instruction;

class InstructionController extends Controller
{
   
    function __construct(){
        $this->middleware('auth');
    }

  

    function add(){
    	return view('add');
    }

    function store(Request $request){
    	$content = $request['content'];
    	$category = $request->input('category');
    	$name = $request->input('name');

    	$instruction = new Instruction;
    	$instruction->content = $content;
    	$instruction->category = $category;
    	$instruction->name = $name;
    	$instruction->save();

   

    		 	$instructions = Instruction::all();

    	 		return view('instructions', ['instructions' => $instructions]);
    	return view('instructions');
    }


       public function show($id)
    {

    $instruction = Instruction::findOrFail($id);

       return view('show', compact('instruction'));
    }


    public function index(){
    	 $instructions = Instruction::all();

    	 return view('instructions', ['instructions' => $instructions]);
    }

    public function edit($id){
    	$instruction = Instruction::findOrFail($id);

    	return view('edit', ['instruction' => $instruction]);
    }

     public function update(Request $request, $id)
    {
 		

        $instruction = Instruction::findOrFail($id);

        $instruction->update($request->all());

        return redirect()->route('instructions');
    }

    public function destroy($id){
         $instruction = Instruction::findOrFail($id);
 
        $instruction->delete();

        // Redireccionar
     return redirect()->route('instructions');
    }

}
