@extends('layouts.base')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Product</h2>
        </div>
        <div class="pull-right">
            <a class="button w-24 border text-gray-700 mr-1" href="{{ route('products.index') }}"> Back</a>
        </div>
    </div>
</div>
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        Form Layout
    </h2>
</div>
{!! Form::model($product, [
    'url' => route('products.update', [$product->id]),
    'method' => 'post',
    'files' => true,
    'class' => '',
    'role' => 'form',
    'id' => 'jsvalidation',
   
]) !!}
@csrf
@method('PUT')
    @csrf
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="intro-y box p-5">
                {!! Form::label('name', 'Enter Your product Name :') !!}
                 {!! Form::text('name', $product->name ,['class'=>'input w-full border mt-2','placeholder'=>'product Name']) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="intro-y box p-5">
                {!! Form::label('price', 'Enter Your  price :') !!}
                 {!! Form::text('price', $product->price ,['class'=>'input w-full border mt-2','placeholder'=>'Product price']) !!}
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
 
                    <div class="mt-3">
                        <div class="mt-2"><strong>Category:</strong>
                            {{ Form::select('category_id',  $categories,null,['class'=>'input w-full border mt-2']) }}
                          
                        </div>
                </div>
            </div>
       
            </div>
        <div class="text-right mt-5">
                {!! Form::submit('Click here:',['class'=>'button text-white bg-theme-1 shadow-md mr-2']) !!}
        </div>
    </div>
    {{ Form::close() }}
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
    {!! JsValidator::FormRequest('App\Http\Requests\ProductPostRequest', '#jsvalidation'); !!}
    
@endsection