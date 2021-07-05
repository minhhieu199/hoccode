@extends('shop.layout.main')
@section('content')
    <div class="row">
        <div id="sidebar" class="col-md-3">
            <nav id="menu">
                <ul>
                    <li class="menu-item"><a href="/">Home</a></li>
                    <li class="menu-item"><a href="/lien-he">Contact</a></li>
                    <li class="menu-item"><a href="/danh-muc-san-pham">danh mục sản phẩm</a></li>
                    <li class="menu-item"><a href="#" title="">iPhone</a></li>
                    <li class="menu-item"><a href="#" title="">Samsung</a></li>
                    <li class="menu-item"><a href="#" title="">Sony</a></li>
                    <li class="menu-item"><a href="#" title="">HTC</a></li>
                    <li class="menu-item"><a href="#" title="">LG</a></li>
                    <li class="menu-item"><a href="#" title="">OPPO</a></li>
                    <li class="menu-item"><a href="#" title="">Blackberry</a></li>
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
    <div id="xac-nhan">
        <h3>Liên Hệ Với Chúng Tôi</h3>
        <form id="contactForm" method="post" action="{{ route('shop.postContact') }}">
            <div class="form-group" >
                @csrf
                <label for="email">Họ Tên:</label>
                <input required type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="name">Email:</label>
                <input required type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="phone"> Điện Thoại:</label>
                <input required type="number" class="form-control" id="phone" name="phone">
            </div>
            <div class="form-group">
                <label for="add">MESSAGE:</label>
               <textarea class="form-control" ></textarea>
            </div>
            <div class="form-group text-right">
                <button type="submit" class="btn btn-default" value="submit">Gửi</button>
            </div>
        </form>
    </div>
    </div>



@endsection
