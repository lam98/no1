<?php

namespace App\Http\Controllers;

use App\Product;
use App\Slidebar;
use Illuminate\Http\Request;

class SpecialProductsController extends Controller
{


	public function removeSpecialProduct(Request $request)
	{

		$ids = $request -> checkbox;
		foreach ($ids as $id) {
			Slidebar ::where('id', $id) -> delete();
		}
		return back();
	}

	public function showSpecialProductID($id)
	{
		$slidebar = Slidebar ::findOrFail($id);
		return view('admin.dashboard.edit_special_product', compact('slidebar'));
	}

	public function editSpecialProduct(Request $request, $id)
	{
		$newID = $request -> product_id;
		$image = Product ::where('id', $newID) -> value('image');
		if ($image == null) {
			return back() -> with('message', 'تصویر کالایی که انتخاب کردید وجود ندارد');
		}
		$sliBar = Slidebar ::find($id);
		$sliBar -> update($request -> only('product_id'));
		$sliBar -> image = $image;
		$sliBar -> update([
			'product_id' => $newID,
			'image' => $image
		]);
		return back();
	}

	public function specialProduct()
	{
		$sliBars = Slidebar ::all();
		return view('admin.dashboard.special_product', compact('sliBars'));
	}

	public function specialProductSubmit(Request $request)
	{
		//dd($request->toArray());
		$id = $request -> getId;
		$image = Product ::where('id', $id) -> value('image');
		if ($image == null) {
			return back() -> with('message', 'تصویر کالایی که انتخاب کردید وجود ندارد');
		}
		$sliBar = new Slidebar();
		$sliBar -> product_id = $id;
		$sliBar -> image = $image;
		$sliBar -> save();
		return back();


	}



}