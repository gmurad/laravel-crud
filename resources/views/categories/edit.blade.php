@extends('layout')
@section('content')

<div class="container">
    @include('categories.menu')

    <div class="row">
        <div class="col-3 mt-3 mb-4">
            <form action="{{ route('category.update', $category->id) }}" method="post">
                @csrf
                <x-form.field name="name" placeholder="Category Name" value="{{ $category->name }}"/>
                <x-form.field type="number" name="parent_id" placeholder="Parent Id" value="{{ $category->parent_id }}" class="my-3"/>
                <x-form.field type="submit" value="Update Category" class="btn btn-primary"/>
            </form>
        </div>
    </div>

</div>

@endsection