<header>
    <div class="container">
        <div class="row header">
            <a class="logo" href="#"><img src="{{ asset('frontend/images/logo.png') }}" alt="Cổ long online"/></a>
            <div class="col-sm-8 col-sm-offset-3 text-center">
                <nav id="header-menu">
                    <ul>
                        <li>
                            <a href="{{ route('frontend.index') }}" class="background-menu home"></a>
                        </li>
                        <li>
                            <a href="{{ route('frontend.category.show', DAC_TRUNG) }}" class="background-menu feature"></a>
                        </li>
                        <li>
                            <a href="{{ route('frontend.category.show', HUONG_DAN) }}" class="background-menu guide"></a>
                        </li>
                        <li>
                            <a href="{{ route('frontend.category.show', HOAT_DONG) }}" class="background-menu activity"></a>
                        </li>
                        <li>
                            <a href="{{ route('frontend.category.show', CONG_DONG) }}" class="background-menu public"></a>
                        </li>
                        <!-- @foreach($head_cats as $category)
                        <li><a href="{{ route('frontend.category.show', $category->id) }}">
                            <img src="{{ asset($category->image_url) }}" alt="{{ $category->name }}"/>
                        </a></li>
                        @endforeach -->
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
