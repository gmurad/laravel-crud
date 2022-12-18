<div>
    <ul>
    @foreach ($categories as $category)
        <li>
            <div class="d-flex flex-row m-1">
                <a href="{{ route('category.show.category_with_products', [$category->id, 'includeProducts' => 1]) }} ">{{ $category->name }}</a>
                <a href="{{ route('category.show.mix', $category->id) }}" class="btn btn-sm btn-primary ms-5 me-1" role="button">Products</a>
                <a href="{{ route('category.show.mix', [$category->id, 'includeChildren' => 1]) }}" class="btn btn-sm btn-primary ms-3 me-1" role="button">Prod and SubCat</a>
                <a href="{{ route('category.edit', $category->id) }}" class="btn btn-sm btn-warning ms-3 me-1" role="button">Edit</a>
            </div>

            @if ($includeProducts === '1')
                @php  $products = $category->products()->get() ?? false; @endphp
                @if($products)
                    <x-list.product :products="$products"/>
                @endif
            @endif

            <ul>
                @foreach ($category->childrenCategories as $childCategory)
                <x-list.category :categories="[$childCategory]" :includeProducts="$includeProducts"/>
                @endforeach
            </ul>
        </li>
    @endforeach
    </ul>
</div>