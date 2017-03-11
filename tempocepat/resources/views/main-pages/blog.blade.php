@extends('layouts.default')
{{--@if(Session::has(''))--}}
@section('content')
@include('layouts.header')

    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/stylesheets/blog.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/stylesheets/blog-large.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/stylesheets/blog-medium.css')}}" media="only screen and (min-width:768px) and (max-width:980px)">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/stylesheets/blog-small.css')}}" media="only screen and (min-width:600px) and (max-width:767px)">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/stylesheets/blog-extrasmall.css')}}" media="only screen and (min-width:300px) and (max-width:599px)">
  
    {{-- <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/stylesheets/blog.css')}}"> --}}
    
    <div id="before-blog-preview-bg" class="before-preview-bg"></div>
    <div id="before-blog-preview" class="before-preview">
      <div class="before-market-preview-wrapper">
        <div class="bmp-icon"></div>
        <h3 class="opening-text">Suka apapun yang berbau musik?</h3>
        <h1 class="main-text">upgrade wawasan kamu soal musik di sini</h1>
        <p class="desc-text">Temukan artikel-artikel tetntang musik menginspirasi banget buat kamu</p>
      </div>
    </div>
    <div id="blog-preview" class="main">
  <div class="container">
    <div class="blog-wrapper">
      <div class="blog-small-wrapper">
        <div class="blog-small-side">
          <h3>Categories</h3><span class="line"></span>
          <ul>
            <li><a href="#">all categories</a></li>
            <li><a href="#">musiclopedia</a></li>
            <li><a href="#">lifestyle</a></li>
            <li><a href="#">lookook</a></li>
            <li><a href="#">ngomongin music</a></li>
          </ul>
        </div>
      </div>
      <div class="blog-large-wrapper">
        <div class="blog-title">
          <h3>Latest Article</h3>
        </div>
        @foreach ($blogs as $blog)
        <div class="article-item">
          <div class="article-img-wrapper"><img src="{{URL::to('/')}}/tempocepat/public/assets/img/blog/medium/{{ $blog->image }}"/></div>
          <div class="article-caption-wrapper">
            <div class="article-content">
              <div class="article-data"><span class="article-category">Musiclopedia</span><span class="date-time">{!! date('F d, Y', strtotime($blog->updated_at)) !!} - 9:00 AM</span></div><a href="{{URL::to('/')}}/blog/details/{{ $blog->slug }}">
                <h3 class="article-title">{!! $blog->title !!}</h3></a><span class="article">{!! str_limit(htmlspecialchars_decode(e($blog->article)),$limit=200,$end='...') !!}</span>
            </div>
            <div class="article-foot">
              <div class="icon-wrapper"><a src="#" class="circle-icon-a"><span class="circle-icon"></span></a><span class="text-icon">125 readers</span></div>
            </div>
          </div>
        </div>
        @endforeach
        <div class="large-12 medium-12 small-12 columns" id="containpager">
                {{-- {!! $events->render() !!} --}}
                {!!str_replace('/?', '?', $blogs->render())!!}
            </div>
            
            <style>
                #containpager {
                    margin-top: 50px;
                    margin-bottom: 70px;
                }
                ul.pagination {
                    display: block;
                    height: 1.5rem;
                    margin-left: -0.3125rem;
                }
                ul.pagination li {

                    float: left;
                    display: block;

                    height: 1.5rem;
                    color: #222222;
                    font-size: 0.875rem;
                    margin-left: 0.3125rem;

                    padding-top: 8px;

                }
                .pagination .active {
                    padding: 0.0625rem 0.625rem;
                    padding-top: 8px;
                }
                .pagination .disabled {
                    border: solid 1px #aaa;
                    padding: 0.0625rem 0.625rem;
                    border-radius: 3px;
                    padding-bottom: 0;
                    padding-top: 6px;
                }
                ul.pagination li a {
                    display: block;
                    padding: 0.0625rem 0.625rem 0.0625rem;
                    color: #999999;
                    -webkit-border-radius: 3px;
                    border-radius: 3px;
                }
                .pagination li a[rel="prev"], .pagination li a[rel="next"] {
                    color: #c89b62 !important;
                    border: solid 1px #c89b62;
                    margin-top: -10px;
                }
                .pagination li a[rel="prev"] {

                   padding-bottom: 8px;
                    padding-top: 8px;

                }
                .pagination li a[rel="next"] {
                    margin-left: 10px !important;

                   padding-bottom: 8px;
                    padding-top: 8px;

                }
            </style>

      </div>
    </div>
    <div class="aside">
      <div class="ads-wrapper"><img src="assets/img/ads6.jpg"></div>
      <div class="aside-content">
        <h4>favorite articles</h4><span class="hr-orange"></span>
        <ul id="fav-articles">
        @foreach ($postsrecom as $postsrecom)
          <li style="min-height: 50px;height:unset;"><a href="/blog/details/{{ $postsrecom->slug }}"><img style="width: 75px;height: 50px;" src="{{URL::to('/')}}/tempocepat/public/assets/img/blog/small/{{ $postsrecom->image }}"/><span style="display:block;width:100%;height: 20px;"><span>{!! $postsrecom->title !!}</span></span></a></li>
        @endforeach
          {{-- <li><a href="#"><img src="assets/img/10.jpg"/><span>Dari Dahulu Hingga Kini dan selamanya</span></a></li>
          <li><a href="#"><img src="assets/img/12.jpg"/><span>“Bangsa Indonesia, Bangsa Musik”</span></a></li>
          <li><a href="#"><img src="assets/img/b1.jpg"/><span>“Bangsa Indonesia, Bangsa Musik” Dari Dahulu Hingga Kini dan selamanya</span></a></li>
          <li><a href="#"><img src="assets/img/9.jpg"/><span>Dari Dahulu Hingga Kini dan selamanya</span></a></li>
          <li><a href="#"><img src="assets/img/16.jpg"/><span>“Bangsa Indonesia, Bangsa Musik”</span></a></li> --}}
        </ul>
      </div>
    </div>
  </div>
</div>
@include('layouts.footer')
@stop
{{--@endif--}}