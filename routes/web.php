<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('test', function(){
	$user = new App\User;
	$user->name = 'wingo';
	$user->email = 'wingo@wingo.com';
	$user->password = bcrypt('123123');
	$user->save();

	return $user;
});

Route::get('/', function(){

	

   

	return view('auth.login');  // esto no funciona
});


Route::get('/login', ['uses' => 'Auth\LoginController@showLoginForm']);//->middleware('example');

//Route::get('login',  'Auth\LoginController@showLoginForm')->middleware('example:p');


Route::post('login', ['as'  => 'login', 'uses' => 'Auth\LoginController@login']);//->name('login');

Route::get('logout', 'Auth\LoginController@logout');


Route::get('/home', function(){

	$instructions = App\Instruction::all();
	$all = $instructions;
	$instructions = $instructions->unique('category');
	 $instructions->values()->all();

		
	//dd($instructions);

	return view('templates.home', ['instructions' => $instructions, 'all' => $all]);
})->middleware('auth');


Route::get('/instructions', ['as' => 'instruction', 'uses' => 'InstructionController@index']);

Route::get('/add', ['as' => 'add', 'uses' => 'InstructionController@add']);

Route::post('/instructions', ['as' => 'instructions', 'uses' => 'InstructionController@store']);

Route::get('/show/{id}', ['as' => 'instruction.show', 'uses' => 'InstructionController@show']);

Route::get('/edit/{id}', ['as' => 'edit', 'uses' => 'InstructionController@edit']);


Route::put('/instruction/{id}', ['as' => 'update', 'uses' => 'InstructionController@update']);


Route::delete('/instructions/{id}', ['as' => 'destroy', 'uses' => 'InstructionController@destroy']);

Route::get('/category/{category}', ['as' => 'category.index', 'uses' => 'CategoryController@index']);








Route::post('search', ['as' => 'search', 'uses' => 'SearchController@search']);



