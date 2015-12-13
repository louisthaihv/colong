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
        
    <h2 class="cate-header">
        MÔN PHÁI
    </h2>
    <ul class="list-cate  bg-category">
    @foreach($clans as $clan)
        <li>
            <a class="link-img" href="{{ route('frontend.clan.show',  $clan->id) }}">
                <img class="thumb" src="{{ asset($clan->back_ground_image_url) }}" alt=""/>
            </a>
            <p class="desc">
                <a href="{{ route('frontend.clan.show',  $clan->id) }}" class="title"> 
                {!! $clan->name !!}</a>
                {!! substr($clan->description, 0, 50).'...' !!}
            </p>
            <div class="clear-fix"></div>
        </li>
    @endforeach
    </ul>
@stop

@section('end_script')
@stop