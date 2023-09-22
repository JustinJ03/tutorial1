@extends('products.layout')
@section('content')
    <div class="row">
        <div class="d-flex justify-content-between  col-lg-12 margin-tb mt-3 mb-3">
            <div class="pull-left">
                <h2> Show Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <div class="row">

        <!-- Show Product Name  -->
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $product->name }}
            </div>
            <br>
        </div>

        <!-- Show Product Price -->
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price:</strong>RM
                {{ $product->price }}
            </div>
            <br>
        </div>

        <!-- Show Product Details -->
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Details:</strong>
                {{ $product->details }}
            </div>
            <br>
        </div>

        <!-- Show Product Publish Status -->
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Publish:</strong>
                {{ $product->publish }}
            </div>
            <br>
        </div>
    </div>
@endsection