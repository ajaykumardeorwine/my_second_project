<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductPostRequest;
use App\Models\Category;
use App\Models\Product;
use App\Services\ProductService;
use Illuminate\Http\Request;



class ProductController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }
         /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $products['products']=ProductService::index(5);
         return view('product.index_form',$products)->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create_form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductPostRequest $request)
    {
        
        $input=$request->all();
        //  dd($input);
        ProductService::Create($input);
     
         return redirect()->route('products.index')
                        ->with('success','Product created successfully.');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('product.show_product',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::all()->pluck('name','id');
        return view('product.edit_product',compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(ProductPostRequest $request, Product $product)
    {
      
        $input=$request->all();
        // dd($input);
        ProductService::update($input, $product);
    
        return redirect()->route('products.index')              
                        ->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
       
        ProductService::delete($product);
    
        return redirect()->route('products.index')
                        ->with('success','Product deleted successfully');
    
    }
    // public function category(){
    //     $products = Product::all();
    //     return view('products.category', compact('products'));
    // }

    
}
