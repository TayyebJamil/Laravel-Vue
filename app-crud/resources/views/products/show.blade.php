@extends('products.layout')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Show Product</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('products.index') }}" class="btn btn-primary">Back</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Name</h5>
                    <p class="card-text">{{ $product->name }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Details</h5>
                    <p class="card-text">{{ $product->detail }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
