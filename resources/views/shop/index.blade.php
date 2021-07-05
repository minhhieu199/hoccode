@extends('shop.layout.main')

@section('content')
    <div class="row">
        <div id="sidebar" class="col-md-3">
            <nav id="menu">
                <ul>
                    <li class="menu-item"><a href="/">Home</a></li>
                    <li class="menu-item"><a href="/lien-he">Contact</a></li>
                    <li class="menu-item"><a href="/danh-muc-san-pham">danh mục sản phẩm</a></li>
                    @foreach($categories as $cate )
                    <li class="menu-item"><a href="{{asset('danh-muc-san-pham/'.$cate->id)}}" title="">{{$cate->name}}</a></li>
                    @endforeach

                </ul>
                <!-- <a href="#" id="pull">Danh mục</a> -->
            </nav>

            <div id="banner-l" class="text-center">
                <div class="banner-l-item">
                    <a href="#"><img src="frontend/shop/img/home/banner-l-1.png" alt="" class="img-thumbnail"></a>
                </div>
                <div class="banner-l-item">
                    <a href="#"><img src="frontend/shop/img/home/banner-l-2.png" alt="" class="img-thumbnail"></a>
                </div>
                <div class="banner-l-item">
                    <a href="#"><img src="frontend/shop/img/home/banner-l-3.png" alt="" class="img-thumbnail"></a>
                </div>
                <div class="banner-l-item">
                    <a href="#"><img src="frontend/shop/img/home/banner-l-4.png" alt="" class="img-thumbnail"></a>
                </div>
                <div class="banner-l-item">
                    <a href="#"><img src="frontend/shop/img/home/banner-l-5.png" alt="" class="img-thumbnail"></a>
                </div>
                <div class="banner-l-item">
                    <a href="#"><img src="frontend/shop/img/home/banner-l-6.png" alt="" class="img-thumbnail"></a>
                </div>
                <div class="banner-l-item">
                    <a href="#"><img src="frontend/shop/img/home/banner-l-7.png" alt="" class="img-thumbnail"></a>
                </div>
            </div>
        </div>

        <div id="main" class="col-md-9">
            <!-- main -->
            <!-- phan slide la cac hieu ung chuyen dong su dung jquey -->
            <div id="slider">
                <div id="demo" class="carousel slide" data-ride="carousel">

                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                    </ul>

                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="frontend/shop/img/home/slide-1.png" alt="Los Angeles" >
                        </div>
                        <div class="carousel-item">
                            <img src="frontend/shop/img/home/slide-2.png" alt="Chicago">
                        </div>
                        <div class="carousel-item">
                            <img src="frontend/shop/img/home/slide-3.png" alt="New York" >
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
            </div>

            <div id="banner-t" class="text-center">
                <div class="row">
                    <div class="banner-t-item col-md-6 col-sm-12 col-xs-12">
                        <a href="#"><img src="frontend/shop/img/home/banner-t-1.png" alt="" class="img-thumbnail"></a>
                    </div>
                    <div class="banner-t-item col-md-6 col-sm-12 col-xs-12">
                        <a href="#"><img src="frontend/shop/img/home/banner-t-1.png" alt="" class="img-thumbnail"></a>
                    </div>
                </div>
            </div>

            <div id="wrap-inner">
                <div class="products">
                    <h3>sản phẩm </h3>
                    <div class="product-list row">
                    @foreach($category as $item)
                        <div class="product-item col-md-3 col-sm-6 col-xs-12">
                            <a href="#"><img  src="{{asset($item->image)}}" class="img-thumbnail"></a>
                            <p><a href="#">{{$item->name}}</a></p>
                            <p class="price">{{number_format($item->price,0,',','.')}}</p>
                            <div class="marsk">
                                <a href="{{asset('chi-tiết/'.$item->id)}}">Xem chi tiết</a>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>

            <!-- end main -->
        </div>
    </div>
@endsection
