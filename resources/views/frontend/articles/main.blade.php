@extends('layouts.frontend.master_frontend')
@section('start_css')
@stop

@section('content')

        <h2 class="cate-header">
            {!! $article->title !!}
        </h2>
        <div class="content-detail  bg-category">
            <p>
            	{!! $article->description !!}
            </p>
            <h4 class="cate-header">Những tin mới hơn</h4>
            <ul class="other-list">
            	@foreach($news as $article)
                <li>
                    <a href="{{ route('frontend.article.show', $article->id) }}">{!! $article->title !!}</a>
                </li>
                @endforeach
            </ul>
            <h4 class="cate-header">Những tin cũ hơn</h4>
            <ul class="other-list">
                @foreach($olds as $article)
                <li>
                    <a href="{{ route('frontend.article.show', $article->id) }}">{!! $article->title !!}</a>
                </li>
                @endforeach
            </ul>
        </div>
@stop

@section('end_script')
@stop