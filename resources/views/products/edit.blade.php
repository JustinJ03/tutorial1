@extends('products.layout')
@section('content')
    <div class="row">
        <div class="d-flex justify-content-between  col-lg-12 margin-tb mt-3 mb-3">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
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
    <form action="{{ route('products.update',$product->id) }}" method="POST">
        @csrf
        <div class="row">

            <!-- Display and Edit Product Name -->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Name">
                </div>
            </div>

            <!-- Display and Edit Product Price -->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Price(RM):</strong>
                    <input type="text" name="price" value="{{ $product->price }}" class="form-control" placeholder="Price">
                </div>
            </div>

            <!-- Display and Edit Product Details -->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Detail:</strong>
                    <textarea class="form-control" style="height:150px" name="details" placeholder="Detail of product {{ $product->name }}">{{ $product->details }}</textarea>
                </div>
            </div>

            <!-- Display and Edit Product Publishing Status -->
            <div class="col-xs-12 col-sm-12 col-md-12">
                 <div class="form-group">
                    <strong>Publish:</strong><br>
                    <label>
                        <input type="radio" name="publish" id="yes" value="yes">
                        Yes
                    </label>
                    <br>
                    <label>
                        <input type="radio" name="publish" id="no" value="no">
                         No
                    </label>


            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection