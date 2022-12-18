@extends('layout')
@section('content')

<div class="card mt-3 col-3">
    <div class="card-header">Edit Product</div>
    <div class="card-body">
        <form action="{{ route('product.update', $product->id) }}" method="post">
            @csrf
        <x-form.field name="name" placeholder="Product Name" value="{{ $product->name }}"/>
        <x-form.field type="number" name="price" placeholder="Price" value="{{ $product->price }}" step=0.01 class="my-3"/>
        <x-form.field type="number" name="category_id" placeholder="Category Id" value="{{ $product->category_id }}" step=1 class="my-3"/>
        <x-form.field type="submit" value="Update" class="btn btn-success"/>
        </form>
    </div>
</div>

@endsection