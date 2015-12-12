@extends('layouts.frontend.master_frontend')

@section('content')
    
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

@stop