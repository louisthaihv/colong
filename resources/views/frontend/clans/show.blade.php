@extends('layouts.frontend.master_frontend')
@section('start_css')
@stop

@section('content')

        <h2 class="cate-header">
            {!! $clan->name !!}
        </h2>
        <div class="content-detail  bg-category">
            <p>
            	{!! $clan->description !!}
            </p>
            <h4 class="cate-header">Những Clan khác</h4>
            <ul class="other-list">
            	@foreach($clans as $clan)
                <li>
                    <a href="{{ route('frontend.clan.show', $clan->id) }}">
                    {!! $clan->name !!}</a>
                </li>
                @endforeach
            </ul>
        </div>
@stop

@section('end_script')
@stop