    <header>
        <div class="container">
            <h1><img src="{{ asset('frontend/images/logo.png') }}" alt="Cổ long online"/></h1>
            <nav>
                <ul>
                    <li><a href="{{ route('frontend.index') }}">
                        <img src="{{ asset('frontend/images/navbar/trang-chu.png') }}" alt="Trang chu"/>
                    </a></li>
                    @foreach($head_cats as $category)
                    <li><a href="{{ route('frontend.category.show', $category->id) }}">
                        <img src="{{ asset($category->image_url) }}" alt="{{ $category->name }}"/>
                    </a></li>
                    @endforeach
                </ul>
            </nav>

        </div>

    </header>