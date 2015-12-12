@extends('layouts.frontend.master_frontend')
@section('start_css')
<style type="text/css">
    .thumb{
        max-height: 110px;
        max-width: 90px;
    }
</style>
@stop

@section('content')
	<div class="primary">
        <div class="top-image">
            <ul>
                <li><a href="">
                <img src="{{asset('frontend/images/button/gift-code.png')}}" alt=""/></a></li>
                <li><a href="">
                <img src="{{ asset('frontend/images/button/the-vip.png') }}" alt=""/></a></li>
                <li><a href="">
                <img src="{{ asset('frontend/images/button/tro-thu.png') }}" alt=""/></a></li>
                <li><a href="">
                <img src="{{ asset('frontend/images/button/thu-cuoi.png') }}" alt=""/></a></li>
                <li><a href="">
                <img src="{{ asset('frontend/images/button/trang-bi.png') }}" alt=""/></a></li>
                <li><a href="">
                <img src="{{ asset('frontend/images/button/mon-phai.png') }}" alt=""/></a></li>
            </ul>
        </div>
                <h2 class="cate-header">
                    {{ $category->name }}
                </h2>
                <ul class="list-cate  bg-category">
                @foreach($category->articles as $article)
                    <li>
                        <a class="link-img" href="{{ route('frontend.article.show',  $article->id) }}">
                            <img class="thumb" src="{{ asset($article->image_url) }}" alt=""/>
                        </a>
                        <p class="desc">
                            <a href="{{ route('frontend.article.show',  $article->id) }}" class="title">[{{ date('Y-m-d', strtotime($article->created_at)) }}] 
                            {!! $article->title !!}</a>
                            {!! $article->content !!}
                        </p>
                        <div class="clear-fix"></div>
                    </li>
                @endforeach
                </ul>
            </div>
@stop

@section('end_script')
@stop