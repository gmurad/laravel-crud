<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <div class="collapse navbar-collapse">
        <div class="navbar-nav">
            <a class="nav-link" href=" {{ route('category.index') }} ">Категории</a>
            <a class="nav-link" href=" {{ route('category.index', ['includeProducts' => 1]) }} ">Категории c вложенными товарами</a>
        </div>
        </div>
    </div>
</nav>