@extends('products.layout')
@section('content')
    <div class="row">
        <div class="d-flex justify-content-between  col-lg-12 margin-tb mt-3 mb-3">
            <div class="pull-left">
                <h2 >LARAVEL</h2>
            </div>

            <div class="pull-right d-flex flex-column align-items-end">
                <a class="btn btn-success mb-1" href="{{ route('products.create') }}">Create New Product</a>
                    <form action="{{ route('products.index') }}" method="GET" role="search">
                        <div class="input-group">
                            <input type="text" class="form-control mr-5 " name="term" placeholder="Search products" id="term">
                            <a href="{{ route('products.index') }}" class="w-25 p-1">
                            <span class="input-group-btn mr-3 w-25">
                                <button class="btn btn-info" type="submit" title="Search projects">Search</button>
                            </span>
                            </a>
                        </div>
                    </form>
            </div>
        </div>

    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <!-- Display products from the database -->
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Price(RM)</th>
            <th>Details</th>
            <th>Publish</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ ++$i }}</td>
            <!-- retrieve data from name column -->
            <td>{{ $product->name }}</td>
            <!-- retrieve data from price column -->
            <td>{{ $product->price }}</td>
            <!-- retrieve data from details column -->
            <td>{{ $product->details }}</td>
            <!-- retrieve data from publish column -->
            <td>{{ $product->publish }}</td>
            <td>    
                    <!-- Display the info of the specified product -->
                    <a class="btn btn-info w-25 " href="{{ route('products.show',$product->id) }}">Show</a>
                    <!-- Edit the existing product -->
                    <a class="btn btn-primary w-25 " href="{{ route('products.edit',$product->id) }}">Edit</a>
                    <!-- Delete the existing product -->
                    <a class="btn btn-danger w-25 " href="{{ route('products.destroy',$product->id) }}">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
    {!! $products->links() !!}
@endsection