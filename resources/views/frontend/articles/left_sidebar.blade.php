<div class="col-left">
    <div class="buttons">
        <a href="#" class="download">Chơi ngay</a>
        <a href="{{ route('user.register') }}" class="register">Đăng ký</a>
        <a href="{{ route('user.gift.get') }}" class="giftcode">Gift code</a>
        <a href="{{ route('user.napthe.get') }}" class="card">Nạp thẻ</a>
    </div>
    <!--End .buttons-->
    <div class="daily-features">
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.5&appId=1661943940685670";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
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
    <div class="support">
        <a href="#">
            
        </a>
    </div>
    <!--End .support-->
  <div class="cont-facebook">
       <div class="fb-page" data-href="https://www.facebook.com/Ki%E1%BA%BFm-Th%E1%BA%BF-2-Kh%C3%B4ng-h%C3%BAt-m%C3%A1u-kh%C3%B4ng-c%C3%A0y-k%C3%A9o-Ch%E1%BB%89-PK-826930107424123/?fref=ts" data-width="241" data-height="214" data-small-header="false" data-adapt-container-width="true" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/Ki%E1%BA%BFm-Th%E1%BA%BF-2-Kh%C3%B4ng-h%C3%BAt-m%C3%A1u-kh%C3%B4ng-c%C3%A0y-k%C3%A9o-Ch%E1%BB%89-PK-826930107424123/?fref=ts"><a href="https://www.facebook.com/Ki%E1%BA%BFm-Th%E1%BA%BF-2-Kh%C3%B4ng-h%C3%BAt-m%C3%A1u-kh%C3%B4ng-c%C3%A0y-k%C3%A9o-Ch%E1%BB%89-PK-826930107424123/?fref=ts">Kiếm Thế 2 - Không hút máu, không cày kéo, Chỉ PK</a></blockquote></div></div>
    </div>
    <!--End .cont-facebook-->
</div>