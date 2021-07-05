<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Vietpro Shop - Home</title>
    <link rel="stylesheet" href="/frontend/shop/css/bootstrap.min.css">
    <link rel="stylesheet" href="/frontend/shop/css/home.css">
    <script type="text/javascript" src="/frontend/shop/js/jquery-3.2.1.min.js"></script>
    <script src="/frontend/shop/https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <script type="text/javascript" src="/frontend/shop/shop/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/frontend/shop/frondehttps://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/frontend/shop/css/details.css">
    <link rel="stylesheet" href="/frontend/shop/css/category.css">
    <link rel="stylesheet" href="/frontend/shop/css/category.css">



    <script type="text/javascript">
        $(function() {
            var pull        = $('#pull');
            menu        = $('nav ul');
            menuHeight  = menu.height();

            $(pull).on('click', function(e) {
                e.preventDefault();
                menu.slideToggle();
            });
        });

        $(window).resize(function(){
            var w = $(window).width();
            if(w > 320 && menu.is(':hidden')) {
                menu.removeAttr('style');
            }
        });
    </script>

</head>
<body>
<!-- header -->
@include('shop.layout.header')
<!-- /header -->
<!-- endheader -->


<!-- main -->
<section id="body">
    <div class="container">
        @yield('content')
    </div>
</section>
<!-- endmain -->

<!-- footer -->
@include('shop.layout.footer')
<!-- endfooter -->
</body>
</html>
