<div class="sidebar">
                <p><img src="{{ asset('frontend/images/ho-tro.png') }}" alt="ho tro"/></p>
                <div class="register">
                    <div class="cat-dat-ngay"><a href="#">
                    <img src="{{ asset('frontend/images/images/cai-dat-ngay.png') }}" alt=""/></a></div>
                    <div>
                        <div class="nap-the"><a href="{{ route('user.napthe.get') }}">
                        <img src="{{ asset('frontend/images/images/nap-the.png') }}" alt=""/></a></div>
                        <div class="dang-ky"><a href="{{ route('user.register') }}">
                        <img src="{{ asset('frontend/images/images/dang-ky.png') }}" alt=""/></a></div>
                    </div>

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