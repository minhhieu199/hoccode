@extends('shop.layout.main')
@section('content')

    <div class="row">
        <div id="sidebar" class="col-md-3">
            <nav id="menu">
                <ul>
                    <li class="menu-item"><a href="/">Home</a></li>
                    <li class="menu-item"><a href="/lien-he">Contact</a></li>
                    <li class="menu-item"><a href="">danh mục sản phẩm</a></li>
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
                    <a href="#"><img src="../frontend/shop/img/home/banner-l-1.png" alt="" class="img-thumbnail"></a>
                </div>
                <div class="banner-l-item">
                    <a href="#"><img src="/frontend/shop/img/home/banner-l-2.png" alt="" class="img-thumbnail"></a>
                </div>
                <div class="banner-l-item">
                    <a href="#"><img src="/frontend/shop/img/home/banner-l-3.png" alt="" class="img-thumbnail"></a>
                </div>
                <div class="banner-l-item">
                    <a href="#"><img src=">/frontend/shop/img/home/banner-l-4.png" alt="" class="img-thumbnail"></a>
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
                        <li data-target="#demo" data-slide-to="0" class=""></li>
                        <li data-target="#demo" data-slide-to="1" class=""></li>
                        <li data-target="#demo" data-slide-to="2" class="active"></li>
                    </ul>

                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        <div class="carousel-item">
                            <img src="/frontend/shop/img/home/slide-1.png" alt="Los Angeles">
                        </div>
                        <div class="carousel-item">
                            <img src="/frontend/shop/img/home/slide-2.png" alt="Chicago">
                        </div>
                        <div class="carousel-item active">
                            <img src="/frontend/shop/img/home/slide-3.png" alt="New York">
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
                <div class="products">
                    <h3>{{$cate->name}}</h3>
                    <div class="product-list row">
                        @foreach($items as $item)
                        <div class="product-item col-md-3 col-sm-6 col-xs-12">
                            <a href="#"><img src="{{asset($item->image)}}" class="img-thumbnail"></a>
                            <p><a href="#">{{$item->name}}</a></p>
                            <p class="price">{{number_format($item->price,0,',','.')}}</p>
                            <div class="marsk">
                                <a href="{{asset('chi-tiết/'.$item->id)}}">Xem chi tiết</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div id="pagination">
                    <ul class="pagination pagination-lg justify-content-center">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">«</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item disabled"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">»</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                    {{$items->links()}}
                </div>
            </div>


            <!-- end main -->
        </div>
    </div>
@endsection
