@extends('products.layout')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


@section('content')
<div class="row">
    <div class="col-lg-12 margin-th">
        <div class="pull-left">
            <h2>Add New Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products.index') }}">Back</a>
        </div>
    </div>
</div>

@if($errors->any())
<div class="alert alert-danger">
    <strong>OOPS!</strong> There is some problem with your input<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name"><strong>Name</strong></label>
        <input type="text" name="name" class="form-control" id="name" placeholder="Name">
    </div>
    <div class="form-group">
        <label for="detail"><strong>Detail</strong></label>
        <textarea class="form-control" style="height: 150px" name="detail" id="detail" placeholder="Detail"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
