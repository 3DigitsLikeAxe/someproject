<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Banner;


class ProductsController extends Controller
{
	public function show()
	{
		$products = Product::paginate(4);
		$banners = Banner::get();
		
		return view('welcome', ['products' => $products, 'banners' => $banners]);
	}
	
	public function showList()
	{
		$productList = Product::paginate(4);
		
		return view('products', ['productList' => $productList]);
	}	
		
    
}
