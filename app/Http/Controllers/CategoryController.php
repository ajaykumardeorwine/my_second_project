<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductPostRequest;
use App\Models\Category;
use App\Models\Product;


class CategoryController extends Controller
{



public function mobile()
{
  
    $products = Product::with('member')->whereHas('member', function ($q) {
      $q->where('category_id', 1);
    })->get();
    
    return view('product_category.cat_mobiles',compact('products'));
}
public function leptop()
{
  $products = Product::with('member')->whereHas('member', function ($q) {
    $q->where('category_id', 2);
  })->get();
  return view('product_category.cat_leptops',compact('products'));
}
public function computer()
{
  $products = Product::with('member')->whereHas('member', function ($q) {
    $q->where('category_id', 3);
  })->get();
  return view('product_category.cat_computers',compact('products'));
}
public function teblet()
{
  $products = Product::with('member')->whereHas('member', function ($q) {
    $q->where('category_id', 4);
  })->get();
  return view('product_category.cat_teblets',compact('products'));
}

   
}