@extends('layouts.user')

@section('start_css')
@stop

@section('content')
<div id="content_news">NẠP THẺ<br><br>
    <div style="text-align: center; color: #b8b8b8"> SERVER </div>
		<div class="imgcenter">
            <div class="imgvip">
                <a target="_blank" href="img_fjords.jpg">
                    <img src="{{ asset('images/fpt.jpg')}}" width="300" height="200">
                </a>
                
            </div>

            <div class="imgvip">
                <a target="_blank" href="img_forest.jpg">
                    <img src="{{asset('images/viettel.jpg')}}" width="300" height="200">
                </a>
            </div>

            <div class="imgvip">
                <a target="_blank" href="img_fjords.jpg">
                    <img src="{{ asset('images/mobi.jpg')}}" width="300" height="200">
                </a>
                
            </div>

            <div class="imgvip">
                <a target="_blank" href="img_forest.jpg">
                    <img src="{{asset('images/vina.jpg')}}" width="300" height="200">
                </a>
            </div>
	    </div>
</div>

@stop

@section('end_script')

@stop