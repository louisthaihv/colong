<div class="col-right">
    <div class="title-bre">
        <h2 class="title">{!! $category->name !!}</h2>
        <ul class="bre">
                <li><a href="/">Trang chủ -</a></li> 
                <li><a class="at">{!! $category->name !!}</a> </li>
        </ul>
        <div class="list-news">
            <div class="viewport">
                <ul class="overview">
                    <li class="page">
                        @foreach($articles as $article)
                            <div class="list-main">
                                <a href="{{ route('frontend.article.show', $article->id) }}">
                                    <img src="{{ asset($article->image_url) }}">
                                </a>
                                <h3>
                                    <a href="{{ route('frontend.article.show', $article->id) }}">
                                        {!! $article->title !!}
                                    </a>
                                    <span class="time">[{{ date('d/m/Y H:i',strtotime($article->created_at)) }}]</span>
                                </h3>
                                <p>
                                    {!! $article->content !!}
                                </p>
                            </div>
                        @endforeach
                            <!--End .list-main-->
                            <!--End .list-main-->
                    </li>
                </ul>
                <div class="paging">
                   <div class="pager">
                        {!! $articles->appends(Request::except('page'))->render() !!}
                    </div>
                </div>
            </div>
            <!--End .list-all-->
        </div>
        <!--End .main-news-->
    </div>
    <!--.main-list-news-->
    <div class="clear: both;">
    </div>
</div>