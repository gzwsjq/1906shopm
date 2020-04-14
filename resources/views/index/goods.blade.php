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
                        <li><a href="#a2">商品详情</a></li>
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
                    <h3 id="a2">商品详情</h3>
                    @if($goodsinfo)
                           <ul>
                                <li>
                                    <div class="img">
                                        <a href="">
                                            <img src="{$goodsinfo.img}" width="210" height="185" />
                                        </a>
                                    </div>
                                    <div class="price">
                                        <font>￥<span>{{$goodsinfo->price}}</span></font> &nbsp;
                                    </div>
                                    <div class="name">商品名称：<a href="">{{$goodsinfo->goods_name}}</a></div>
                                    <div class="desc">
                                        <font>￥<span>{{$goodsinfo->desc}}</span></font> &nbsp;
                                    </div>
                                    <div class="carbg">
                                        <a href="#" class="ss">收藏</a>
                                        <a href="#" class="j_car">加入购物车</a>
                                    </div>
                                </li>
                           </ul>
                    @endif
                    <div class="divider"></div>
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