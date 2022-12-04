@extends('layout')
@section('content')

<div class="container">
    <div class="row" >

        <div class=" col-3 mt-3 mb-4">
            <form action="{{ route('category.store') }}" method="post">
                @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name Category</label>
                <input type="text" id="name", name="name" class="form-control">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Parent Id Category</label>
                <input type="number" name="parent_id" id="parent_id" step=1 class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Add Category</button>
            </form>
        </div>

    </div>
</div>


<ul>
    @foreach ($categories as $category)
        <li>
            <div class="d-flex flex-row m-1">
                {{ $category->name }}
                <a href="{{ route('category.edit', $category->id) }}" class="btn btn-sm btn-primary ms-3 me-1" role="button">Edit</a>
            </div>
        </li>

        <ul>
        @foreach ($category->childrenCategories as $childCategory)
            @include('categories.child_category', ['child_category' => $childCategory])
        @endforeach
        </ul>
    @endforeach
</ul>

@endsection