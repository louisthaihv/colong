@extends('layouts.frontend.master_frontend')

@section('content')
    <div class="primary">
        <div class="top-image">
            <ul>
                <li><a href="">
                <img src="{{asset('frontend/images/button/gift-code.png')}}" alt=""/></a></li>
                <li><a href="">
                <img src="{{ asset('frontend/images/button/the-vip.png') }}" alt=""/></a></li>
                <li><a href="">
                <img src="{{ asset('frontend/images/button/tro-thu.png') }}" alt=""/></a></li>
                <li><a href="">
                <img src="{{ asset('frontend/images/button/thu-cuoi.png') }}" alt=""/></a></li>
                <li><a href="">
                <img src="{{ asset('frontend/images/button/trang-bi.png') }}" alt=""/></a></li>
                <li><a href="">
                <img src="{{ asset('frontend/images/button/mon-phai.png') }}" alt=""/></a></li>
            </ul>
        </div>
        <div class="featured">
            <ul>
                <li><a href="{{ route('user.napthe.get') }}">
                <img src="{{ asset('frontend/images/button/nap-the.png') }}" alt=""/></a></li>
                <li><a href="">
                <img src="{{ asset('frontend/images/button/da-thong-kinh-mach.png') }}" alt=""/></a></li>
                <li><a href="">
                <img src="{{ asset('frontend/images/button/vong-quay-may-man.png') }}" alt=""/></a></li>
                <li><a href="">
                <img src="{{ asset('frontend/images/button/tro-thu-dai-hiep.png') }}" alt=""/></a></li>
                <li><a href="">
                <img src="{{ asset('frontend/images/button/may-chu-moi.png') }}" alt=""/></a></li>
                <li><a href="">
                <img src="{{ asset('frontend/images/button/dua-top-server-moi.png') }}" alt=""/></a></li>
            </ul>
        </div>
        <div class="tintuc-rank">
            <div class="tin-tuc">
                <h5><img src="{{ asset('frontend/images/title-news.png') }}" alt=""/></h5>
                <div class="news">
                    <a href="{{ route('frontend.article.show') }}">
                    <img src="{{ asset('frontend/images/image-news.png') }}" alt=""/>
                    <h6 class="title">[22-11] Mở cổng đăng ký chuyển server...</h6></a>
                    <p>Thập quốc đã chứng kiến biết bao duyên kỳ ngộ tương phùng cũng như phân ly giữa anh hùng hào...</p>
                </div>
                <div class="news">
                    <a href="{{ route('frontend.article.show') }}">
                    <img src="{{ asset('frontend/images/image-news.png') }}" alt=""/>
                    <h6 class="title">[22-11] Mở cổng đăng ký chuyển server...</h6></a>
                    <p>Thập quốc đã chứng kiến biết bao duyên kỳ ngộ tương phùng cũng như phân ly giữa anh hùng hào...</p>
                </div><div class="news">
                    <a href="{{ route('frontend.article.show') }}">
                    <img src="{{ asset('frontend/images/image-news.png') }}" alt=""/>
                    <h6 class="title">[22-11] Mở cổng đăng ký chuyển server...</h6></a>
                    <p>Thập quốc đã chứng kiến biết bao duyên kỳ ngộ tương phùng cũng như phân ly giữa anh hùng hào...</p>
                </div><div class="news">
                    <a href="{{ route('frontend.article.show') }}">
                    <img src="{{ asset('frontend/images/image-news.png') }}" alt=""/>
                    <h6 class="title">[22-11] Mở cổng đăng ký chuyển server...</h6></a>
                    <p>Thập quốc đã chứng kiến biết bao duyên kỳ ngộ tương phùng cũng như phân ly giữa anh hùng hào...</p>
                </div><div class="news">
                    <a href="{{ route('frontend.article.show') }}">
                    <img src="{{ asset('frontend/images/image-news.png') }}" alt=""/>
                    <h6 class="title">[22-11] Mở cổng đăng ký chuyển server...</h6></a>
                    <p>Thập quốc đã chứng kiến biết bao duyên kỳ ngộ tương phùng cũng như phân ly giữa anh hùng hào...</p>
                </div><div class="news">
                    <a href="{{ route('frontend.article.show') }}">
                    <img src="{{ asset('frontend/images/image-news.png') }}" alt=""/>
                    <h6 class="title">[22-11] Mở cổng đăng ký chuyển server...</h6></a>
                    <p>Thập quốc đã chứng kiến biết bao duyên kỳ ngộ tương phùng cũng như phân ly giữa anh hùng hào...</p>
                </div>
            </div>
            <div class="rank">
                <div class="bang-xep-hang">
                    <h3>Bảng xếp hạng</h3>
                    <div id="bx-tabs">
                        <select>
                            <option value="#bx-tabs-1">Chuyển thế1</option>
                            <option value="#bx-tabs-2">Chuyển thế2</option>
                            <option value="#bx-tabs-3">Chuyển thế3</option>
                        </select>
                        <ul id="list-tab" style="display: none;">
                            <li><a href="#bx-tabs-1">Chuyển thế</a></li>
                            <li><a href="#bx-tabs-2">Chuyển thế</a></li>
                            <li><a href="#bx-tabs-3">Chuyển thế</a></li>
                        </ul>
                        <div id="bx-tabs-1">
                            <table>
                                <tr>
                                    <th>Tên nhân vật</th>
                                    <th>CS</th>
                                    <th>Cấp</th>
                                </tr>
                                <tr>
                                    <td>1 Bkavpro</td>
                                    <td>1</td>
                                    <td>190</td>
                                </tr>
                                <tr>
                                    <td>2 Bkavpro</td>
                                    <td>1</td>
                                    <td>190</td>
                                </tr>
                                <tr>
                                    <td>3 Bkavpro</td>
                                    <td>1</td>
                                    <td>190</td>
                                </tr>
                                <tr>
                                    <td>4 Bkavpro</td>
                                    <td>1</td>
                                    <td>190</td>
                                </tr>
                                <tr>
                                    <td>5 Bkavpro</td>
                                    <td>1</td>
                                    <td>190</td>
                                </tr>
                                <tr>
                                    <td>6 Bkavpro</td>
                                    <td>1</td>
                                    <td>190</td>
                                </tr>
                                <tr>
                                    <td>7 Bkavpro</td>
                                    <td>1</td>
                                    <td>190</td>
                                </tr>
                                <tr>
                                    <td>8 Bkavpro</td>
                                    <td>1</td>
                                    <td>190</td>
                                </tr>
                                <tr>
                                    <td>9 Bkavpro</td>
                                    <td>1</td>
                                    <td>190</td>
                                </tr>
                                <tr>
                                    <td>10 Bkavpro</td>
                                    <td>1</td>
                                    <td>190</td>
                                </tr>
                            </table>
                        </div>
                        <div id="bx-tabs-2">
                            <table>
                                <tr>
                                    <th>Tên nhân vật</th>
                                    <th>CS</th>
                                    <th>Cấp</th>
                                </tr>
                                <tr>
                                    <td>1 Chihai</td>
                                    <td>1</td>
                                    <td>190</td>
                                </tr>
                                <tr>
                                    <td>2 Chihai</td>
                                    <td>1</td>
                                    <td>190</td>
                                </tr>
                                <tr>
                                    <td>3 Chihai</td>
                                    <td>1</td>
                                    <td>190</td>
                                </tr>
                                <tr>
                                    <td>4 Chihai</td>
                                    <td>1</td>
                                    <td>190</td>
                                </tr>
                                <tr>
                                    <td>5 Chihai</td>
                                    <td>1</td>
                                    <td>190</td>
                                </tr>
                                <tr>
                                    <td>6 Chihai</td>
                                    <td>1</td>
                                    <td>190</td>
                                </tr>
                                <tr>
                                    <td>7 Chihai</td>
                                    <td>1</td>
                                    <td>190</td>
                                </tr>
                                <tr>
                                    <td>8 Chihai</td>
                                    <td>1</td>
                                    <td>190</td>
                                </tr>
                                <tr>
                                    <td>9 Chihai</td>
                                    <td>1</td>
                                    <td>190</td>
                                </tr>
                                <tr>
                                    <td>10 Chihai</td>
                                    <td>1</td>
                                    <td>190</td>
                                </tr>
                            </table>
                        </div>
                        <div id="bx-tabs-3">
                            <table>
                                <tr>
                                    <th>Tên nhân vật</th>
                                    <th>CS</th>
                                    <th>Cấp</th>
                                </tr>
                                <tr>
                                    <td>1 zooKieuphong</td>
                                    <td>1</td>
                                    <td>190</td>
                                </tr>
                                <tr>
                                    <td>2 zooKieuphong</td>
                                    <td>1</td>
                                    <td>190</td>
                                </tr>
                                <tr>
                                    <td>3 zooKieuphong</td>
                                    <td>1</td>
                                    <td>190</td>
                                </tr>
                                <tr>
                                    <td>4 zooKieuphong</td>
                                    <td>1</td>
                                    <td>190</td>
                                </tr>
                                <tr>
                                    <td>5 zooKieuphong</td>
                                    <td>1</td>
                                    <td>190</td>
                                </tr>
                                <tr>
                                    <td>6 zooKieuphong</td>
                                    <td>1</td>
                                    <td>190</td>
                                </tr>
                                <tr>
                                    <td>7 zooKieuphong</td>
                                    <td>1</td>
                                    <td>190</td>
                                </tr>
                                <tr>
                                    <td>8 zooKieuphong</td>
                                    <td>1</td>
                                    <td>190</td>
                                </tr>
                                <tr>
                                    <td>9 zooKieuphong</td>
                                    <td>1</td>
                                    <td>190</td>
                                </tr>
                                <tr>
                                    <td>10 zooKieuphong</td>
                                    <td>1</td>
                                    <td>190</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="facebook">
                    <img src="{{ asset('frontend/images/facebook.png') }}" alt=""/>
                </div>
            </div>
        </div>
        <div class="slider-bottom">
            <div id="tabs">
                <ul>
                    <li><a href="#tabs-1">
                    	<img src="{{ asset('frontend/images/images/clip-game.png') }}" alt=""/>
                    	</a></li>
                    <li><a href="#tabs-2">
                    	<img src="{{ asset('frontend/images/images/wallpaper.png') }}" alt=""/>
                    	</a></li>
                    <li><a href="#tabs-3">
                    	<img src="{{ asset('frontend/images/images/screenshot.png') }}" alt=""/>
                    </a></li>
                </ul>
                <div id="tabs-1" class="tab-slider">
                    <ul class="bxslider1">
                        <li>
                        	<img src="{{ asset('frontend/images/images/slide-bottom1.png') }}" />
                        </li>
                        <li>
                        	<img src="{{ asset('frontend/images/images/slide-bottom2.png') }}" />
                        </li>
                        <li>
                        	<img src="{{ asset('frontend/images/images/slide-bottom3.png') }}" />
                        </li>
                        <li>
                        	<img src="{{ asset('frontend/images/images/slide-bottom2.png') }}" />
                        </li>
                        <li>
                        	<img src="{{ asset('frontend/images/images/slide-bottom3.png') }}" />
                        </li>
                        <li>
                        	<img src="{{ asset('frontend/images/images/slide-bottom1.png') }}" />
                        </li>
                    </ul>
                </div>
                <div id="tabs-2" class="tab-slider">
                    <ul class="bxslider2">
                        <li>
                        	<img src="{{ asset('frontend/images/images/slide-bottom1.png') }}" />
                        </li>
                        <li>
                        	<img src="{{ asset('frontend/images/images/slide-bottom2.png') }}" />
                        </li>
                        <li>
                        	<img src="{{ asset('frontend/images/images/slide-bottom3.png') }}" />
                        </li>
                        <li>
                        	<img src="{{ asset('frontend/images/images/slide-bottom2.png') }}" />
                        </li>
                        <li>
                        	<img src="{{ asset('frontend/images/images/slide-bottom3.png') }}" />
                        </li>
                        <li>
                        	<img src="{{ asset('frontend/images/images/slide-bottom1.png') }}" />
                        </li>
                    </ul>
                </div>
                <div id="tabs-3" class="tab-slider">
                    <ul class="bxslider3">
                        <li>
                        	<img src="{{ asset('frontend/images/images/slide-bottom1.png') }}" />
                        </li>
                        <li>
                        	<img src="{{ asset('frontend/images/images/slide-bottom2.png') }}" />
                        </li>
                        <li>
                        	<img src="{{ asset('frontend/images/images/slide-bottom3.png') }}" />
                        </li>
                        <li>
                        	<img src="{{ asset('frontend/images/images/slide-bottom2.png') }}" />
                        </li>
                        <li><img src="{{ asset('frontend/images/images/slide-bottom3.png') }}" /></li>
                        <li><img src="{{ asset('frontend/images/images/slide-bottom1.png') }}" /></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@stop
@section('end_script')

@stop