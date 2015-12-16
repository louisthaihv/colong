<div class="sidebar">
    <div class="hotline clearfix">
        <img class="img-responsive" src="{{ asset('frontend/images/ho-tro.png') }}" alt="ho tro"/>
    </div>
    <div class="register clearfix">
        <a class="bg-text download-now" href="#"></a>
        <a class="bg-text card" href="{{ route('user.napthe.get') }}"></a>
        <a class="bg-text signup" href="{{ route('user.register') }}"></a>
    </div>
    <div class="mng-account mt-10 clearfix">
        <a href="{{ route('user.thongtinnhanvat.get') }}">
            <img class="img-responsive" src="{{asset('frontend/images/quanlytk.png')}}" alt="quan ly tai khoan">
        </a>
    </div>
    <div class="slider mt-10 clearfix">
        <img class="img-responsive" src="{{ asset('frontend/images/khunganh.png') }}" alt=""/>
    </div>
    <div class="feature-daily mt-10 clearfix">
        <div id="tn-tabs">
            <ul>
                @foreach($weeks as $key => $week)
                    <li><a class="bg-number daily-tab-{{ $key + 1}}" href="#tn-tabs-{{ $key }}"></a></li>
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
        <a href="#"></a>
    </div>
</div>