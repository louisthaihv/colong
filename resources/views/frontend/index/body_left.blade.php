<div style="clear: both;"></div>
<div class="col-left">

	<!-- Ho tro quan ly tai khoan-->
	<div class="quanlytaikhoan">
			<a href="#"></a>
		</div>
	<!--End Quan ly tai khoan-->

	<div class="khunganh">
		<a href="#"></a>
	</div>

	<div class="daily-features">
		<div class="title-features">
			<img src="{{ asset('frontend/images/tinh-nang-hang-ngay.png') }}">
		</div>
		<div id="slider3">
			<ul class="bullets">
			@foreach($weeks as $key => $week)
				<li>
					<a href="#" class="bullet <?php if($key == 0) echo"active"; ?>" data-slide="{{ $key }}">{!! $week->name !!}</a>
				</li>
			@endforeach
			</ul>
			<div class="viewport">
				<ul class="overview" style="width: 1928px; left: 0px;">
				@foreach($weeks as $week)
				<?php 
                    $events = $week->dailyEvents()->orderBy('start_time', 'ASC')->orderBy('end_time', 'ASC')->get();
                ?>
					<li class="page">
						<div class="scrollbar style-scrollbar">
							<div class="table">
								<table width="100%" cellspacing="0" cellpadding="0">
									<tbody>
									@foreach($events as $event)
										<tr>
											<td>{!!  $event->start_time .'h -'. $event->end_time .'h' !!}</td>
											<td>{!! $event->name !!}</td>
										</tr>
									@endforeach
									</tbody>
								</table>
							</div>
						</div>
				@endforeach
				</ul>
			</div>
		</div>
	</div>
	<!--End .daily-features-->
	
	<!-- Ho tro khach hang-->
	<div class="support">
			<a href="#"></a>
		</div>
	<!--End Ho tro khach hang-->


	<!-- Contact fb
		<div class="fb-page" data-href="https://www.facebook.com/Ki%E1%BA%BFm-Th%E1%BA%BF-2-Kh%C3%B4ng-h%C3%BAt-m%C3%A1u-kh%C3%B4ng-c%C3%A0y-k%C3%A9o-Ch%E1%BB%89-PK-826930107424123/" data-width="241" data-height="214" data-small-header="false" data-adapt-container-width="true" data-show-facepile="true" data-show-posts="false">
			<div class="fb-xfbml-parse-ignore">
				<blockquote cite="https://www.facebook.com/Ki%E1%BA%BFm-Th%E1%BA%BF-2-Kh%C3%B4ng-h%C3%BAt-m%C3%A1u-kh%C3%B4ng-c%C3%A0y-k%C3%A9o-Ch%E1%BB%89-PK-826930107424123/"><a href="https://www.facebook.com/Ki%E1%BA%BFm-Th%E1%BA%BF-2-Kh%C3%B4ng-h%C3%BAt-m%C3%A1u-kh%C3%B4ng-c%C3%A0y-k%C3%A9o-Ch%E1%BB%89-PK-826930107424123/">Tru Tien</a>
				</blockquote>
			</div>
		</div>

	<!--End .cont-facebook-->
</div>
