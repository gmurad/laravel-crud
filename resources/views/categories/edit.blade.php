@extends('layout')
@section('content')

<div class="card mt-3 col-3">
    <div class="card-header">Edit Category</div>
    <div class="card-body">
        <form action="{{ route('category.update', $category->id) }}" method="post">
            @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" id="name", name="name" value="{{ $category->name }}" class="form-control">
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Parent Id</label>
            <input type="number" name="parent_id" id="parent_id" step=1 value="{{ $category->parent_id }}" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>

@endsection