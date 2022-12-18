@extends('layout')
@section('content')

<div class="container">
    <div class="row" >

        <div class=" col-3 mt-3">
            <form action="{{ route('product.store') }}" method="post">
                @csrf
            <x-form.field name="name" placeholder="Product Name"/>
            <x-form.field type="number" name="price" placeholder="Price" step=0.01 class="my-3"/>
            <x-form.field type="number" name="category_id" placeholder="Category Id" step=1 class="my-3"/>
            <x-form.field type="submit" value="Add Product" class="btn btn-success"/>
            </form>
        </div>

        <div class="col-9 mt-3">
            <div class="card">
                <div class="card-header"> Laravel 9 CRUD </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>
                                        <div class="d-flex flex-row m-1">
                                            <a href="{{ route('product.edit', $product->id) }}" class="btn btn-warning me-1" role="button">Edit</a>
                                            <form action="{{ route('product.destroy', $product->id) }}" method="POST" >
                                                @csrf
                                                @method('delete')
                                                <x-form.field type="submit" value="Delete" class="btn btn-danger"/>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection