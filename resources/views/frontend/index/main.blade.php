@extends('layouts.frontend.master_frontend')

@section('content')
	@if(session('update_pass'))
		<div class="alert alert-success">
			<h1 style="text-align: center;">{{ session('update_pass') }}</h1>
		</div>
    	<script type="text/javascript">
		<!--
		$(document).ready(function () {
			window.setTimeout(function() {
			    $(".alert").fadeTo(1500, 0).slideUp(500, function(){
			        $(this).remove(); 
			    });
			}, 5000);
		});
		//-->
		</script>
    @endif
    @if(!is_null($popup))
    	<?php 
    		// session()->put('popup', 'true');  && !session()->has('popup')
    	?>
			<div id="myModal" class="modal fade" role="dialog">
			  <div class="modal-dialog">
			    <!-- Modal content-->
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
			        <h5 style="text-align: center">Kiếm Thế 2</h5>
			      </div>
			      <div class="modal-body">
			        <a href="{{ asset($popup->link_popup) }}" target="_blank"><img src="{{ asset($popup->image_url) }}"></a>
			      </div>
			      
			    </div>

			  </div>
			</div>
			<script type="text/javascript">
				$(document).ready(function(){
				    if (document.cookie.indexOf('visited=true') == -1) {
				        var time = 1000*10*60;
				        var expires = new Date((new Date()).valueOf() + time);
				        document.cookie = "visited=true;expires=" + expires.toUTCString();
				     	$('#myModal').modal('show');
				    }

				});
			</script>
	@endif
	@include('frontend.index.head_left', $categories)
	@include('frontend.index.head_right', $categories)

	@include('frontend.index.body_left', $weeks)
	@include('frontend.index.body_right', ['clans'=>$clans, 'sliders'=>$sliders])

	
@stop
@section('end_script')

@stop