<div class="sidebar">
    <div class="register">
        <a class="download-now" href="#"></a>
        <a class="card" href="{{ route('user.napthe.get') }}"></a>
        <a class="signup" href="{{ route('user.register') }}"></a>
    </div>
    <div class="quan-ly-tai-khoan">
        <a href="{{ route('user.thongtinnhanvat.get') }}">
            <img src="{{ asset('frontend/images/quan-ly-tai-khoan.png') }}" alt=""/>
        </a>
    </div>
    <div class="tieu-tien-nu">
        <img src="{{ asset('frontend/images/KhungAnh/TieuTienNu.png') }}" alt=""/>
    </div>
    <div class="tinh-nang-hang-ngay">
        <img src="{{ asset('frontend/images/images/tinh-nang-hang-ngay.png') }}" alt=""/>
        <div id="tn-tabs">
            <ul>
                @foreach($weeks as $key => $week)
                    <li><a href="#tn-tabs-{{ $key }}">{{ $week->name }}</a></li>
                @endforeach
            </ul>
            @foreach($weeks as $key => $week)
            <div id="tn-tabs-{{ $key }}" class="tn-tabs">
                <ul>
                    @foreach($week->dailyEvents as $event)
                        <li>
                            <a href="#">
                            {{ $event->start_time }} - {{ $event->end_time }}
                            {!! $event->name !!}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            @endforeach
        </div>
    </div>
    <div class="hotro">
        <img src="{{ asset('frontend/images/HoTroKhachHang/ho-tro-khach-hang.png') }}" alt=""/>
    </div>
</div>