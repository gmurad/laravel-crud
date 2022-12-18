@extends('layout')
@section('content')

<div class="container">
    @include('categories.menu')

    @if (isset($includeChildren) and $includeChildren == 1)
    <x-list.category :categories="[$category]" includeProducts="1"/>
    @else
        <div class="my-3">
            {{ $categoryName ?? ''}}
            <x-list.product :products="$products"/>
        </div>
    @endif

</div>

@endsection




