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
    
        <div class="featured">
            <ul class="bxslider">
            @foreach($galaries as $galary)
                <li  class="galary" >
                    <a href="{{ $galary->link_galaries }}" target="_blank"> 
                        <img src="{{ $galary->image_url }}" />
                    </a>
                </li>
            @endforeach
            </ul>
        </div>
        <div class="tintuc-rank">
            <div class="tin-tuc">
                <h5><img src="{{ asset($news->image_url) }}" alt=""/></h5>
                @foreach($news_articles as $article)
                <div class="news">
                    <a href="{{ route('frontend.article.show', $article->id) }}">
                    <img class="thumb"  src="{{ asset($article->image_url) }}" alt=""/>
                    <h6 class="title">[{{ date("m-d", strtotime($article->created_at)) }}] {!! $article->title !!}</h6></a>
                    <p>
                        {!! $article->content !!}
                    </p>
                </div>
                @endforeach
            </div>
            <div class="rank">
                <div class="bang-xep-hang">
                    <h3>Bảng xếp hạng</h3>
                    <div id="bx-tabs">
                        <select>
                        @foreach($servers as $key => $server)
                            <option value="#bx-tabs-{{ $key }}">{{ $server->name }}</option>
                        @endforeach
                        </select>
                        <ul id="list-tab" style="display: none;">
                        @foreach($servers as $key => $server)
                            <li><a href="#bx-tabs-{{ $key }}">{{ $server->name }}</a></li>
                        @endforeach
                        </ul>
                        @foreach($servers as $key =>$server)
                        <div id="bx-tabs-{{ $key }}">
                            <table>
                            <?php 
                                $characters = $server->characters()->orderBy('level', 'DESC')->paginate(PAGINATE);
                            ?>
                                <tr>
                                    <th>Tên nhân vật</th>
                                    <th>CS</th>
                                    <th>Cấp</th>
                                </tr>
                            @foreach($characters as $character)
                                <tr>
                                    <th>{{ $character->name }}</th>
                                    <th>{{ $character->cs }}</th>
                                    <th>{{ $character->level }}</th>
                                </tr>
                            @endforeach
                            </table>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="facebook">
                    <div class="fb-page" data-href="https://www.facebook.com/Ki%E1%BA%BFm-Th%E1%BA%BF-2-Kh%C3%B4ng-h%C3%BAt-m%C3%A1u-kh%C3%B4ng-c%C3%A0y-k%C3%A9o-Ch%E1%BB%89-PK-826930107424123/?fref=ts" data-width="230" data-height="185" data-small-header="false" data-adapt-container-width="true" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/Ki%E1%BA%BFm-Th%E1%BA%BF-2-Kh%C3%B4ng-h%C3%BAt-m%C3%A1u-kh%C3%B4ng-c%C3%A0y-k%C3%A9o-Ch%E1%BB%89-PK-826930107424123/?fref=ts"><a href="https://www.facebook.com/Ki%E1%BA%BFm-Th%E1%BA%BF-2-Kh%C3%B4ng-h%C3%BAt-m%C3%A1u-kh%C3%B4ng-c%C3%A0y-k%C3%A9o-Ch%E1%BB%89-PK-826930107424123/?fref=ts">Kiếm Thế 2 - Không hút máu, không cày kéo, Chỉ PK</a></blockquote></div></div>

                </div>
            </div>
        </div>
        <div class="slider-bottom">
            <div id="tabs">
                <ul>
                @foreach($bottom_cats as $key => $category)
                    <li><a href="#tabs-{{ $key }}">
                    	<img src="{{ asset($category->image_url) }}" alt="{{ $category->name }}"/>
                    	</a>
                    </li>
                @endforeach
                </ul>
                @foreach($bottom_cats as $key => $category)
                <div id="tabs-{{ $key }}" class="tab-slider">
                    <ul class="bxslider1">
                    @foreach($category->articles as $article)
                        <li>
                        	<a href="{{ route('frontend.article.show', $article->id) }}">
                                <img src="{{ asset($article->image_url) }}" />
                            </a>
                        </li>
                    @endforeach
                    </ul>
                </div>
                @endforeach
            </div>
        </div>
@stop
@section('end_script')
<script type="text/javascript">
    
    $(document).ready(function(){
      $('.bxslider').bxSlider(
           { 
                auto: true,
                pager: false
            }
        );

    });
</script>
@stop