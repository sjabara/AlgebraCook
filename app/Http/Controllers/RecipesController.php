<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Recipe;
use \App\Ingridient;
use Illuminate\Auth\AuthManager;
use App\Http\Controllers\Controller;

class RecipesController extends Controller
{
    public function __construct()
	{
		$this->middleware('auth');
	}
	
	public function index(Request $request)
	{
		return view('recipes.index')->with('recipes', Recipe::get());
	}
	
	public function add()
	{
		return view('recipes.add');
	}
	
	public function view($id)
	{
		return view('recipes.view')->with('recipe', Recipe::find($id));
	}
	
	public function edit($id)
	{
		return view('recipes.edit')->with('recipe', Recipe::find($id));
	}
	
	public function update(Request $request)
	{
		$data = $request->all();
		$recipe = Recipe::find($data['id']);
		if($recipe->creator_id !== auth()->user()->id)
			return redirect()->action('RecipesController@index');
		
		foreach($recipe->ingridient as $ingrediant)
		$ingrediant->delete();
		
		$recipe->name = $data['name'];
		$recipe->description = $data['description'];
		
		if($recipe->save())
		{
			foreach($data['ingredient'] as $key => $value)
			{
				$sastojak = new Ingridient;
				$sastojak->name = $value;
				$sastojak->recipe_id = $recipe->id;
				$sastojak->save();
			}
		}
		return redirect()->action('RecipesController@index');
	}
	
	public function save(Request $request)
	{
		$data = $request->all();
		$noviRecept = new Recipe;
		$noviRecept->name = $data['name'];
		$noviRecept->description = $data['description'];
		$noviRecept->creator_id = auth()->user()->id;
		
		if($noviRecept->save())
		{
			foreach($data['ingredient'] as $key => $value)
			{
				$sastojak = new Ingridient;
				$sastojak->name = $value;
				$sastojak->recipe_id = $noviRecept->id;
				$sastojak->save();
			}
		}
		return redirect()->action('RecipesController@index');
	}
}