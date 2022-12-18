<ul class="ms-3 text-success">
    @foreach ($products as $product)
        <li> {{ $product->name }}
    @endforeach
</ul>