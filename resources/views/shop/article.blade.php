@extends('shop.layout.main')

@section('content')
    <br>
    @foreach(  $articles as $article)
    <div class="well">
        <div class="media">
            <a class="pull-left" href="#">
                <img  width="150px" height="150px" class="media-object" src="{{asset($article->image)}}">
            </a>
            <div class="media-body">
                <h4 class="media-heading">{{$article->title}}</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
                    Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis
                    dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan.
                    Aliquam in felis sit amet augue.</p>
                <ul class="list-inline list-unstyled">

                    <li>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                    </li>
                    <li>
                        <!-- Use Font Awesome http://fortawesome.github.io/Font-Awesome/ -->
                        <span><i class="fa fa-facebook-square"></i></span>
                        <span><i class="fa fa-twitter-square"></i></span>
                        <span><i class="fa fa-google-plus-square"></i></span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    @endforeach
@endsection
