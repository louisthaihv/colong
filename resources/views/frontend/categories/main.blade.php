@extends('layouts.frontend.master_frontend')
@section('start_css')
@stop

@section('content')
	@include('frontend.categories.left_sidebar', $weeks)

	@include('frontend.categories.right_sidebar', compact('category', 'articles'))
@stop

@section('end_script')
@stop