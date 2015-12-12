 <ul>
            @foreach($top_navs as $category)
                <li><a href="{{ route('frontend.category.show', $category->id) }}">
                <img src="{{asset($category->image_url)}}" alt="{{ $category->name }}"/></a></li>
            @endforeach
            </ul>