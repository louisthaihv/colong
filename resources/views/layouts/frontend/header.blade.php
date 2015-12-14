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
                            <a href="#" class="background-menu feature"></a>
                        </li>
                        <li>
                            <a href="#" class="background-menu guide"></a>
                        </li>
                        <li>
                            <a href="#" class="background-menu activity"></a>
                        </li>
                        <li>
                            <a href="#" class="background-menu public"></a>
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
        <div class="row">
            <div class="col-sm-3">
                <img src="{{ asset('frontend/images/ho-tro.png') }}" alt="ho tro"/>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</header>
