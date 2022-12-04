@extends('layout')
@section('content')

<div class="container">
    <div class="row" >

        <div class=" col-3 mt-3">
            <form action="{{ route('product.store') }}" method="post">
                @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" id="name", name="name" class="form-control">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" name="price" id="price" step=0.01 class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Add</button>
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
                                            <a href="{{ route('product.edit', $product->id) }}" class="btn btn-primary me-1" role="button">Edit</a>
                                            <form action="{{ route('product.destroy', $product->id) }}" method="POST" >
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger">Delete</button>
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