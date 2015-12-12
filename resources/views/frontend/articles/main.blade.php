@extends('layouts.frontend.master_frontend')
@section('start_css')
@stop

@section('content')
	@include('frontend.articles.left_sidebar', $weeks)

	@include('frontend.articles.right_sidebar', compact('article'))
@stop

@section('end_script')
@stop