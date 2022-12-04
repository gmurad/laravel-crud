<li>
    <div class="d-flex flex-row m-1">
        {{ $child_category->name }}
        <a href="{{ route('category.edit', $child_category->id) }}" class="btn btn-sm btn-primary ms-3 me-1" role="button">Edit</a>
    </div>
</li>
@if ($child_category->categories)
    <ul>
        @foreach ($child_category->categories as $childCategory)
            @include('categories.child_category', ['child_category' => $childCategory])
        @endforeach
    </ul>
@endif
