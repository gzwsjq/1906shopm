@extends('layouts.create')
@section('title','1906---商品页')
@section('content')

    <body>
    <div id="theme-wrapper">
        <!-- NAVIGATION -->
        <div id="theme-navigation">
            <div id="theme-navigation-body">
                <div id="theme-navigation-heading">
                    <div id="theme-navigation-title">1906---电商</div>
                    <div class="hidden"><a href="#">Menu</a></div>
                    <div class="clearfix"></div>
                </div>
                <div id="theme-navigation-list">
                    <ul>
                        <li><a href="#a1">商品列表</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- NAVIGATION -->

        <!-- CONTENT -->
        <div id="theme-content">
            <div id="theme-content-heading">Welcome---1906电商</div>

            <div id="theme-content-body">
                <div class="content-details">
                    <h3 id="a1">商品列表</h3>
                    <div>
                        <form action="" method="">
                            <input type="text" name="goods_name" placeholder="请输入商品名称" value="{{$query['goods_name']??''}}">
                            <input type="submit" value="搜索">
                        </form>
                        <table>
                            <thead>
                                <tr>
                                    <th>商品名称</th>
                                    <th>商品图片</th>
                                    <th>商品价格</th>
                                    <th>商品描述</th>
                                </tr>
                            </thead>
                            @if($data)
                                @foreach($data as $v)
                                    <tbody>
                                    <tr>
                                       <td><a href="{{url('/goods')}}?id={{$v->id}}">{{$v->goods_name}}</a></td>
                                       <td><a href="{{url('/goods')}}?id={{$v->id}}"><img src="{$v.img}" width="60px" height="60px"></a></td>
                                       <td>{{$v->price}}</td>
                                       <td>{{$v->desc}}</td>
                                    </tr>
                                    </tbody>
                                @endforeach
                            @endif
                        </table>
                        {{$data->appends($query)->links()}}
                    </div>
                    <div class="divider"></div>
                </div>
                </div>
                <div class="content-details">
                    <h3 id="a11">Sources and Credits</h3>
                    <p>All fonts, images, icons, script used in this template are free for commercial use</p>
                    <ul>
                        <li>Materializecss</li>
                        <li>jQuery</li>
                        <li>Ajax Contact Form</li>
                        <li>FakeLoader</li>
                        <li>Magnific Popup</li>
                        <li>Jquery Filterizr</li>
                        <li>Owl Carousel</li>
                        <li>AnimatedModal</li>
                        <li>Normalize CSS</li>
                        <li>Animate CSS</li>
                        <li>Font Awesome</li>
                        <li>Unsplash.com</li>
                        <li>Unsplash.com</li>
                        <li>Pngmart.com</li>
                        <li>Pixabay.com</li>
                        All image not include in mainfile only on demo
                    </ul>


                    <a href="#">Back to Top</a>

                    <hr class="space" />

                </div>

            </div>
            </div>
            <!-- CONTENT -->
        </div>

        <!-- JS -->
        <script type="text/javascript" src="assets/js/jquery.js"></script>
        <script type="text/javascript" src="assets/js/main.js"></script>

    </body>
    </html>