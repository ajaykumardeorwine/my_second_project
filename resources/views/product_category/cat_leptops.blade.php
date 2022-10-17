@extends('layouts.base')

@section('content')
    <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
        <div class="row">

            <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">


                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2>Laptops</h2>
                        </div>
                        {{-- <div class="intro-y col-span-12 flex flex-wrap sm:flex-no-wrap items-center mt-2"><a
                                class="button text-white bg-theme-1 shadow-md mr-2" href="{{ route('products.create') }}">
                                Create New
                                Product</a>
                        </div> --}}
                    </div>
                </div>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <table class="table table-report -mt-2">
                    <thead>
                        <tr>
                            <th class="text-center whitespace-no-wrap">Id</th>
                            <th class="text-center whitespace-no-wrap">Name</th>
                            <th class="text-center whitespace-no-wrap">Price</th>
                            <th class="text-center whitespace-no-wrap">Category_Id</th>
                            <th class="text-center whitespace-no-wrap">Action</th>
                        </tr>
                    </thead>
                    @foreach ($products as $product)
                            <tr class="intro-x">
                                <td class="text-center whitespace-no-wrap">{{ $product->id }}</td>
                                <td class="text-center whitespace-no-wrap">{{ $product->name }}</td>
                                <td class="text-center whitespace-no-wrap">{{ $product->price }}</td>
                                <td class="text-center whitespace-no-wrap">{{ $product->category_id}}</td>
                                <td class="table-report__action w-56">
                                    <form action="{{ route('products.destroy', $product->id) }}"
                                        class="flex justify-center items-center" method="POST">
                                        <a class="flex items-center mr-3"
                                            href="{{ route('products.show', $product->id) }}"><i data-feather="check-square"
                                                class="w-4 h-4 mr-1"></i>Show</a>
                                        <a class="flex items-center mr-3"
                                            href="{{ route('products.edit', $product->id) }}"><i data-feather="check-square"
                                                class="w-4 h-4 mr-1"></i>Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="flex items-center text-theme-6"><i
                                                data-feather="trash-2" class="w-4 h-4 mr-1"></i>Delete</button>
                                    </form>
                                </td>
                            </tr>
                    @endforeach
                </table>
                {{-- {!! $products->links() !!} --}}
            </main>
        </div>
    </div>
@endsection
