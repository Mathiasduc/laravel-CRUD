<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Http\Response;
use App\Fruit;

class FruitController extends Controller
{

	public function getIndex()
	{
		$fruits = Fruit::all();
		return view('fruits.index', ['fruits'=>$fruits]);
	}

	public function getShow($id)
	{
		$fruit = Fruit::find($id);
		return view('fruits.show', ['fruit'=>$fruit]);
	}

	public function getStockModif(Request $request, $id, $quantity)
	{	
		$fruit = Fruit::find($id);
		if($request->method() === 'PUT'){
			$fruit->stock += intval($quantity);
			$fruit->save();			
		}else{
			$fruit->stock -= intval($quantity);
			$fruit->save();
		}
		//response($fruit->stock)
		return $fruit->stock;
	}

	/**
	 * Add a new product by mass assignement
	 *
	 * @param Request $request
	 * @return redirect to FruitController@getIndex
	 **/
	public function addNewProduct(Request $request)
	{
		Fruit::create($request->all());
		return redirect()->route('home');
	}
	/**
	 * Delete the product in database from his id
	 *
	 * @param Request $request
	 * @return redirect FruitController@getIndex
	 **/
	public function deleteProduct($id)
	{
		Fruit::destroy($id);
		return redirect()->route('home');
	}
}