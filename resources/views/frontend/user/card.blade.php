@extends('layouts.user')

@section('start_css')
@stop

@section('content')
<div id="content_news">NẠP THẺ<br><br>
    <div style="text-align: center; color: #b8b8b8"> THẺ </div>
		<div class="imgcenter">
            @foreach($cards as $card)
                <div class="imgvip">
                    <a target="_blank" href="{{ route('user.ac_napthe.get', $card->id) }}">
                        <img src="{{ asset($card->image)}}" width="300" height="200">
                    </a>
                </div>
            @endforeach
	    </div>
</div>

@stop

@section('end_script')

@stop