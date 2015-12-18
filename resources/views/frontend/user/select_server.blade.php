@extends('layouts.user')

@section('start_css')
@stop

@section('content')
<div id="content_news">
        @if(isset($title))
            {{$title}}
        @endif
        <br><br>
    <div style="text-align: center; color: #b8b8b8"> SERVER </div>
        <div class="imgcenter">
        @foreach($servers as $server )
            <div class="imgvip">
                <a href="
                {{ route($next,$server->id) }}">
                    <img src="{{ asset($server->image)}}" width="300" height="200">
                </a>
            </div>
        @endforeach
        </div>
    </div>
@stop

@section('end_script')

@stop