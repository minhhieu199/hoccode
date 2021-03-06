@extends('shop.layout.main')
@section('content')
    <div class="row">
        <div id="sidebar" class="col-md-3">
            <nav id="menu">
                <ul>
                    <li class="menu-item"><a href="/">Home</a></li>
                    <li class="menu-item"><a href="/lien-he">Contact</a></li>
                    <li class="menu-item">danh mục sản phẩm</li>
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
                    <a href="#"><img src="/frontend/shop/img/home/banner-l-1.png" alt="" class="img-thumbnail"></a>
                </div>
                <div class="banner-l-item">
                    <a href="#"><img src="/frontend/shop/img/home/banner-l-2.png" alt="" class="img-thumbnail"></a>
                </div>
                <div class="banner-l-item">
                    <a href="#"><img src="/frontend/shop/img/home/banner-l-3.png" alt="" class="img-thumbnail"></a>
                </div>
                <div class="banner-l-item">
                    <a href="#"><img src="/frontend/shop/img/home/banner-l-4.png" alt="" class="img-thumbnail"></a>
                </div>
                <div class="banner-l-item">
                    <a href="#"><img src="/frontend/shop/img/home/banner-l-5.png" alt="" class="img-thumbnail"></a>
                </div>
                <div class="banner-l-item">
                    <a href="#"><img src="/frontend/shop/img/home/banner-l-6.png" alt="" class="img-thumbnail"></a>
                </div>
                <div class="banner-l-item">
                    <a href="#"><img src="/frontend/shop/img/home/banner-l-7.png" alt="" class="img-thumbnail"></a>
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
                            <img src="/frontend/shop/img/home/slide-1.png" alt="Los Angeles" >
                        </div>
                        <div class="carousel-item">
                            <img src="/frontend/shop/img/home/slide-2.png" alt="Chicago">
                        </div>
                        <div class="carousel-item">
                            <img src="/frontend/shop/img/home/slide-3.png" alt="New York" >
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
                        <a href="#"><img src="/frontend/shop/img/home/banner-t-1.png" alt="" class="img-thumbnail"></a>
                    </div>
                    <div class="banner-t-item col-md-6 col-sm-12 col-xs-12">
                        <a href="#"><img src="/frontend/shop/img/home/banner-t-1.png" alt="" class="img-thumbnail"></a>
                    </div>
                </div>
            </div>
    <div id="wrap-inner">
        <div id="product-info">
            <div class="clearfix"></div>
            <h3>{{$item->name}}</h3>
            <div class="row">
                <div id="product-img" class="col-xs-12 col-sm-12 col-md-3 text-center">
                    <img width="250px" src="{{asset($item->image)}}">
                </div>
                <div id="product-details" class="col-xs-12 col-sm-12 col-md-9">
                    <p>Giá: <span class="price">{{number_format($item->price,0,',','.')}}</span></p>
                    <p>Bảo hành: 1 đổi 1 trong 12 tháng</p>
                    <p>Phụ kiện: Dây cáp sạc, tai nghe</p>
                    <p>Tình trạng: Máy mới 100%</p>
                    <p>Khuyến mại: Hỗ trợ trả góp 0% dành cho các chủ thẻ Ngân hàng Sacombank</p>
                    <p>Còn hàng: Còn hàng</p>
                    <p class="add-cart text-center"><a href="#">Đặt hàng online</a></p>
                </div>
            </div>
        </div>
        <div id="product-detail">
            <h3>Chi tiết sản phẩm</h3>
            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div id="comment">
            <h3>Bình luận</h3>
            <div class="col-md-9 comment">
                <form>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input required type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="name">Tên:</label>
                        <input required type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="cm">Bình luận:</label>
                        <textarea required rows="10" id="cm" class="form-control" name="content"></textarea>
                    </div>
                    <div class="form-group text-right">
                        <button type="submit" class="btn btn-default">Gửi</button>
                    </div>
                </form>
            </div>
        </div>
        <div id="comment-list">
            <ul>
                <li class="com-title">
                    Vietpro Education
                    <br>
                    <span>2017-19-01 10:00:00</span>
                </li>
                <li class="com-details">
                    HTC One X 32GB là sản phẩm đáng chờ đợi nhất trong năm nay, với cấu hình mạnh và giá thành tương đối mềm so với các dòng Smart Phone của các hãng khác
                </li>
            </ul>
            <ul>
                <li class="com-title">
                    Vietpro Education
                    <br>
                    <span>2017-19-01 10:00:00</span>
                </li>
                <li class="com-details">
                    HTC One X 32GB là sản phẩm đáng chờ đợi nhất trong năm nay, với cấu hình mạnh và giá thành tương đối mềm so với các dòng Smart Phone của các hãng khác
                </li>
            </ul>
            <ul>
                <li class="com-title">
                    Vietpro Education
                    <br>
                    <span>2017-19-01 10:00:00</span>
                </li>
                <li class="com-details">
                    HTC One X 32GB là sản phẩm đáng chờ đợi nhất trong năm nay, với cấu hình mạnh và giá thành tương đối mềm so với các dòng Smart Phone của các hãng khác
                </li>
            </ul>
        </div>
    </div>
@endsection
