@extends('layout')
@section('content')

<div class="card mt-3 col-3">
    <div class="card-header">Edit Product</div>
    <div class="card-body">
        <form action="{{ route('product.update', $product->id) }}" method="post">
            @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" id="name", name="name" value="{{ $product->name }}" class="form-control">
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="number" name="price" id="price" step=0.01 value="{{ $product->price }}" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>

@endsection