@extends('layout')
@section('content')

<div class="container">
    @include('categories.menu')

    <div class="row">
        <div class="col-3 mt-3 mb-4">
            <form action="{{ route('category.store') }}" method="post">
                @csrf
                <x-form.field name="name" placeholder="Category Name"/>
                <x-form.field type="number" name="parent_id" placeholder="Parent Id" class="my-3"/>
                <x-form.field type="submit" value="Add Category" class="btn btn-success"/>
            </form>
        </div>
    </div>

    <x-list.category :categories="$categories ?? []" :includeProducts="$includeProducts ?? '0'"/>
</div>

@endsection