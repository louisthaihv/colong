<div class="sidebar">
    <div class="register clearfix">
        <a class="download-now" href="#"></a>
        <a class="card" href="{{ route('user.napthe.get') }}"></a>
        <a class="signup" href="{{ route('user.register') }}"></a>
    </div>
    <div class="mng-account mt-10 clearfix">
        <a href="{{ route('user.thongtinnhanvat.get') }}">
            <img class="img-responsive" src="frontend/images/quanlytk.png" alt="quan ly tai khoan">
        </a>
    </div>
    <div class="slider mt-10 clearfix">
        <img class="img-responsive" src="{{ asset('frontend/images/khunganh.png') }}" alt=""/>
    </div>
    <div class="feature-daily mt-10 clearfix">
        <div id="tn-tabs">
            <ul>
                @foreach($weeks as $key => $week)
                    <li><a href="#tn-tabs-{{ $key }}">{{ $week->name }}</a></li>
                @endforeach
            </ul>
            @foreach($weeks as $key => $week)
            <div id="tn-tabs-{{ $key }}" class="tn-tabs">
                <ul class="daily-list">
                    @foreach($week->dailyEvents as $event)
                        <li>
                        <p class="text-left">
                            <span class="time">{{ $event->start_time }} - {{ $event->end_time }}</span>
                            <span>{!! $event->name !!}</span>
                            </p>
                        </li>
                    @endforeach
                </ul>
            </div>
            @endforeach
        </div>
    </div>
    <div class="support mt-10 clearfix">
        <img class="img-responsive" src="{{ asset('frontend/images/hotro.png') }}" alt=""/>
    </div>
</div>