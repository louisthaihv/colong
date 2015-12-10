<div class="col-right">

    <div class="title-bre">
        <h2 class="title">{!! $article->category->name !!}</h2>
        <ul class="bre">
            <li><a href="/">Trang chủ</a></li>
            <li><a href="{{ route('frontend.category.show', $article->category->id) }}">{!! $article->category->name !!}</a></li>
        </ul>
    </div>
    <!--End .title-bre-->
    <div class="detail-new">
        <h1>{!! $article->title !!}</h1>
        <em class="time">{{ date('m/d/Y H:i',strtotime($article->created_at)) }}</em>
        
        <div class="main-detail">
            <div class="scrollbar style-scrollbar">
             {!! $article->description !!}
            </div>
        </div>
    </div>
</div>