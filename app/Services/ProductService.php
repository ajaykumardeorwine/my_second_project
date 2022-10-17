<?php

namespace App\Services;

use App\Models\Product;

/**
 * Class ProductServic.
 */
class ProductService
{
    public static function index($page)
    {
        // dd('hujh');
        $data = Product::orderBy('id', 'desc')->paginate($page);
        //dd($data); 
        return ($data);
    }

    public static function Create(array $product)
    {   
        //  dd($product);
        $product= Product::create($product);
    
        return $product;
    }
    public static function update(array $data, $product)
    {
        $update=$product->update($data);
        //dd($update);
        return $update;
    }
    public Static function delete($product)
    {
        $data = $product->delete();
        return $data;
       
    }
}

