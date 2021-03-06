@extends('layouts.frontend.master_frontend')
@section('start_css')
<style type="text/css">
    .thumb{
        max-height: 70px;
        max-width: 70px;
    }

    .galary{
        max-height: 320px;
        overflow: hidden;
    }
</style>
@stop
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div id="menu">
            <div class="mnu">
                <ul>
                @foreach($galaries as $key => $galary)
                    <li><a href="{{$galary->link_galaries}}" id="menu_image_{{ $key }}" class="" data-img="{{ $galary->image_url }}"
                    <?php
                        if(max(array_keys($galaries->toArray())) == $key) {
                            echo "class='last'";
                        }
                    ?> target="_blank">{{$galary->title}}</a></li>
                @endforeach
                </ul>
            </div>
            <div class="mnu-image">
                <a href="#">
                    <img id="menuImage" class="img-responsiv" src="{{ $galaries[0]->image_url }}">
                </a>
            </div>
        </div>
    </div>
</div>
<div class="row mt-10">
    <div class="col-sm-8 cnt">
        <div class="idex-news">
            <h5><img src="{{ asset($news->image_url) }}" alt=""/></h5>
            @foreach($news_articles as $article)
            <article>
                <section>
                    <div class="row">
                        <div class="col-sm-4">
                            <img class="img-responsive" src="{{ asset($article->image_url) }}" alt=""/>
                        </div>
                        <div class="col-sm-8">
                            <a class="idex-news-title" href="{{ route('frontend.article.show', $article->id) }}">
                                [{{ date("m-d", strtotime($article->created_at)) }}] {!! $article->title !!}
                            </a>
                            <p class="text-justify">
                                {!! $article->content !!}
                            </p>
                        </div>
                    </div>
                </section>
            </article>
            @endforeach
            <center>{!! $news_articles->render() !!}</center>
        </div>
    </div>
    <div class="col-sm-4 pl-0">
        <div class="rank">
            <div class="top-ranks clearfix">
                <h6>bảng xếp hạng</h6>
                <div id="bx-tabs">
                    <div class="server-info">
                        <div class="server-name text-uppercase">Máy chủ</div>
                        <div class="server-list">
                            <input id="inputServerList" type="text" class="server-text">
                            <a id="btnServerList" class="btn-select"><img class="img-responsive" src="frontend/images/btn-dropdown.png"></a>
                        </div>
                        <ul id="optionList" class="server-options" style="display: none;">
                            @foreach($servers as $key => $server)
                            <li>
                                <a id="bx-tabs-{{ $key }}">{{ $server->name }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <ul id="list-tab" style="display: none;">
                    @foreach($servers as $key => $server)
                        <li><a href="#bx-tabs-{{ $key }}">{{ $server->name }}</a></li>
                    @endforeach
                    </ul>
                    @foreach($servers as $key =>$server)
                    <div id="bx-tabs-{{ $key }}" class="table-responsive">
                        <table class="list-top">
                        <?php
                            $characters = $server->characters()->orderBy('level', 'DESC')->paginate(PAGINATE);
                        ?>
                            <tr class="heading">
                                <th class="heading-name" colspan="2">Tên nhân vật</th>
                                <th class="heading-cs text-center">CS</th>
                                <th class="heading-level text-center">Cấp</th>
                            </tr>
                        @foreach($characters as $key => $character)
                            <tr class="r-f">
                                <td class="stt">{{ $key + 1 }}</td>
                                <td>{{ $character->name }}</td>
                                <td class="text-center">{{ $character->cs }}</td>
                                <td class="text-center">{{ $character->level }}</td>
                            </tr>
                        @endforeach
                        </table>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="facebook clearfix mt-10">
                <div class="fb-page" data-href="https://www.facebook.com/colong2.vn/?fref=ts" data-width="230" data-height="185" data-small-header="false" data-adapt-container-width="true" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/colong2.vn/?fref=ts"><a href="https://www.facebook.com/colong2.vn/?fref=ts">Cổ Long 2</a></blockquote></div></div>
            </div>
        </div>
    </div>
</div>
<div class="row mt-15">
    <div id="lib-game" class="col-sm-12">
        <div id="tabs">
            <ul class="tab-lib">
            @foreach($bottom_cats as $key => $category)
                <li><a class="text-lib tab-{{ $key + 1 }}" href="#tabs-{{ $key + 1 }}">
                    </a>
                </li>
            @endforeach
            </ul>
            <div class="tab-content clearfix">
                @foreach($bottom_cats as $key => $category)
                <div id="tabs-{{ $key + 1 }}" class="tab-slider">
                    <div class="slider{{ $key + 1 }}">
                        @foreach($category->articles as $article)
                          <div class="slide"><img src="{{ asset($article->image_url) }}"></div>
                        @endforeach
                    </div>
                    <!-- <ul class="bxslider-{{ $key + 1 }}">
                        <li>
                            <a href="{{ route('frontend.article.show', $article->id) }}">
                                <img src="{{ asset($article->image_url) }}" />
                            </a>
                        </li>
                    </ul> -->
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@stop
@section('end_script')
<script src="{{ asset('frontend/js/menuImageModule.js') }}"></script>
<script src="{{ asset('frontend/js/serverListModule.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.slider1').bxSlider({
            slideWidth: 140,
            minSlides: 3,
            maxSlides: 3,
            pager: false,
            slideMargin: 50
        });

        $('.slider2').bxSlider({
            slideWidth: 140,
            minSlides: 3,
            maxSlides: 3,
            pager: false,
            slideMargin: 50
        });

        $('.slider3').bxSlider({
            slideWidth: 140,
            minSlides: 3,
            maxSlides: 3,
            pager: false,
            slideMargin: 50
        });
    });

    (function ($) {
        menuImageModule.init();
        serverList.init();
    })(jQuery);

</script>
@stop