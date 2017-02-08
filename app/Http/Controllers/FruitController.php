<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

	public function getStockModif($id, $action, $quantity)
	{
		$fruit = Fruit::find($id);
		if ($action === "add") {
			$fruit->stock += intval($quantity);
			$fruit->save();
		}elseif ($action === "delete") {
			$fruit->stock -= intval($quantity);
			$fruit->save();
		}
		return back();
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
		return redirect()->action('FruitController@getIndex');
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
		return redirect()->action('FruitController@getIndex');
	}
}