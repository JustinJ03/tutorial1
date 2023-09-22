@extends('products.layout')
@section('content')
<div class="row">
    <div class="d-flex justify-content-between  col-lg-12 margin-tb mt-3 mb-3">
        <div class="pull-left">
            <h2>Add New Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
        </div>
    </div>
</div>

<!-- alert message -->
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

<form action="{{ route('products.store') }}" method="POST">
    @csrf
     <div class="row">

        <!-- product name input -->
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <!-- product price input -->
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price(RM):</strong>
                <input type="text" name="price" class="form-control" placeholder="Price">
            </div>
        </div>

        <!-- product details input -->
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Details:</strong>
                <textarea class="form-control" style="height:150px" name="details" placeholder="Detail"></textarea>
            </div>
        </div>

        <!-- product publish radio input -->
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
    </div>
</div>


        <!-- Submit Product Button  -->
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection