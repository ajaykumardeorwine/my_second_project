<?php
namespace App\Http\Controllers;
use Yajra\DataTables\DataTables;
use App\Models\Product;
use App\Http\Requests\ProductPostRequest;
use Illuminate\Http\Request;

class ProductDatatableController extends Controller
{
    //
    public function index()
    {
        return view('datatable');
    }
    public function categories()
    {
        $products = Product::get();
        return view('product_category.product_categories', compact('products'));
           
    }
    public function mobiles()
    {
        $products = Product::latest()->paginate(5);
        return view('product_category.cat_mobiles', compact('products'));
           
    }
    public function leptops()
    {
        $products = Product::latest()->paginate(5);
        return view('product_category.cat_leptops', compact('products'));
            
    }
    public function computers()
    {
        $products = Product::latest()->paginate(5);
        return view('product_category.cat_computers', compact('products'));
          
    }
    public function teblets()
    {
        $products = Product::latest()->paginate(5);
        return view('product_category.cat_teblets', compact('products'));
            
    }
    public function getData(Request $request)
    {
        if ($request->ajax()) {
            $data = Product::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    // $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                    // return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }
}