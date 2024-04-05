@extends('products.layout')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Laravel CRUD Application</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('products.create') }}" class="btn btn-primary">Create New Product</a>
        </div>
    </div>

    @if ($message = Session::get('success'))
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        </div>
    </div>
    @endif

    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Detail</th>
                        <th width="280px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->detail }}</td>
                        <td>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                <a href="{{ route('products.show', $product->id) }}" class="btn btn-info">Show</a>
                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            {{ $products->links() }}
        </div>
    </div>
</div>
@endsection
