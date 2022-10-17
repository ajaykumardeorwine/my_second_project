@extends('layouts.base')
@section('content')
    <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
        <div class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">
            <div class="pull-left">
                <h2> Show Product</h2>
            </div>
            <div class="intro-y col-span-12 flex flex-wrap sm:flex-no-wrap items-center mt-2"><a class="button text-white bg-theme-1 shadow-md mr-2" href="{{ route('products.index') }}"> Back</a></div>
        </div>
    </div>
    <div class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">
        <div class="table-report -mt-2">
            <div class="py-4 "><strong>Name:</strong>{{ $product->name }}</div>
        </div>
        <div class="table-report -mt-2">
            <div class="py-4"><strong>Price:</strong>{{ $product->price }}</div>
        </div>
        <div class="table-report -mt-2">
            <div class="py-4"><strong>Cat_Id:</strong>{{ $product->member->name }}</div>
        </div>
    </div>
@endsection