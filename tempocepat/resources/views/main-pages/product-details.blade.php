@extends('layouts.default')
{{--@if(Session::has(''))--}}
@section('content')
@include('layouts.header')

    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/stylesheets/product-details.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/stylesheets/product-details-medium.css')}}" media="only screen and (min-width:768px) and (max-width:980px)">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/stylesheets/product-details-small.css')}}" media="only screen and (min-width:600px) and (max-width:767px)">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/stylesheets/product-details-extrasmall.css')}}" media="only screen and (min-width:300px) and (max-width:599px)">

<style>
/*  *, *:before, *:after {
    -moz-box-sizing: border-box;
     -webkit-box-sizing: border-box; 
    box-sizing: border-box;
}*/
    html,body {
        overflow: visible;
        /*overflow-x: unset !important;*/
        -webkit-perspective: unset;
        perspective:unset;
        -webkit-transform-style: unset;
        transform-style: unset;
    }
</style>


            {{-- <div id="product-show" class="image-wrapper" style="width: 437px; height: 580px;">
            <img id="zoom_01" src="{{URL::to('/')}}/tempocepat/public/assets/img/market/product/medium/{{$response['img']}}" data-zoom-image="{{URL::to('/')}}/assets/img/market/product/large/{{$response['img']}}"/>
            <img id="zoom_02" src="{{URL::to('/')}}/tempocepat/public/assets/img/market/product/medium/{{$response['img']}}" data-zoom-image="{{URL::to('/')}}/assets/img/market/product/large/{{$response['img']}}"/>
            <img id="zoom_03" src="{{URL::to('/')}}/tempocepat/public/assets/img/market/product/medium/{{$response['img']}}" data-zoom-image="{{URL::to('/')}}/assets/img/market/product/large/{{$response['img']}}"/>
            </div> --}}
            

<div id="before-product-detail" class="before-detail">
  <div class="container">
    <div class="bd-item">
      <ul class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li><a href="/market">Products</a></li>
        <li class="active">{!! e($product->name) !!}</li>
      </ul>
    </div>
    <div class="bd-item">
      <h1>product details</h1>
    </div>
    <div class="bd-item">
      <div class="back-wrapper"><a href="/market"><span class="back-wrapper-icon arrow-more"></span><span>Back</span></a></div>
    </div>
  </div>
</div>
<div id="main-content-details-product" class="content-details">
  <div class="container">

    <div class="main-wrapper">
      <div class="main-wrapper-card">
        <div class="image-area">
        
          {{-- <div id="menu_tmb">
            <img class="img_tmb" id="tmb_1" src="{{URL::to('/')}}/assets/img/market/product/small/1/{{$response['img']}}"/>
            <img class="img_tmb" id="tmb_2" src="{{URL::to('/')}}/assets/img/market/product/small/2/{{$response['img']}}"/>
            <img class="img_tmb" id="tmb_3" src="{{URL::to('/')}}/assets/img/market/product/small/3/{{$response['img']}}" />
        </div> --}}

          <div class="thumbnail-image-wrapper" id="menu_tmb">
            <div class="image-wrapper active"><a ><img class="img_tmb" src="{{URL::to('/')}}/tempocepat/public/assets/img/market/product/small/1/{{$response['img']}}" alt=""></a></div>
            <div class="image-wrapper"><a ><img class="img_tmb" src="{{URL::to('/')}}/tempocepat/public/assets/img/market/product/small/2/{{$response['img']}}" alt=""></a></div>
            <div class="image-wrapper"><a ><img class="img_tmb" src="{{URL::to('/')}}/tempocepat/public/assets/img/market/product/small/3/{{$response['img']}}" alt=""></a></div>
            {{-- <div class="image-wrapper"><a href="#"><img src="{{URL::asset('assets/img/m7.jpg')}}" alt=""></a></div>
            <div class="image-wrapper"><a href="#"><img src="{{URL::asset('assets/img/m7.jpg')}}" alt=""></a></div> --}}
          </div>
          <div class="main-image-wrapper">
            <div id="product-show" class="image-wrapper" style="/*width: 437px; height: 580px;*/">
            <img id="zoom_01" src="{{URL::to('/')}}/tempocepat/public/assets/img/market/product/medium/1/{{$response['img']}}" data-zoom-image="{{URL::to('/')}}/tempocepat/public/assets/img/market/product/large/1/{{$response['img']}}"/>
            <img id="zoom_02" src="{{URL::to('/')}}/tempocepat/public/assets/img/market/product/medium/2/{{$response['img']}}"/>
            <img id="zoom_03" src="{{URL::to('/')}}/tempocepat/public/assets/img/market/product/medium/3/{{$response['img']}}"/>
            </div>
          </div>
        </div>
        <div class="caption-area">
          <div class="main-caption">
            <div class="line-general-data"><span class="category">T-shirt</span><span class="separator"> / </span>
            <a href="/store/details/{{ e($store->id) }}">
            <span class="store">{!! e($store->name) !!}</span>
            </a>
            </div>
            <h2>{!! e($product->name) !!}</h2><span class="price">Rp. {!! e($product->price) !!},-</span>
            <p class="desc">Di sekitar JX dulu aja bro, Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor.</p>
            <div class="line-content">
              <div class="part-left"><span class="title-part">color available</span>
                <ul>
                  <li><a><span></span></a></li>
                </ul>
              </div>
              <div class="part-right"><span class="title-part">size available</span>
                <ul>
                  <li><a><span>S</span></a></li>
                  <li><a><span>M</span></a></li>
                  <li><a><span>L</span></a></li>
                  <li><a><span>XL</span></a></li>
                </ul>
              </div>
            </div>
            <div class="line-content tags-line"><span class="title-part">Tags</span>
              <div class="tags-wrapper"><span>#metal</span><span>#rock</span><span>#blood</span><span>#skul</span><span>#woman</span><span>#black</span><span>#scary</span></div>
            </div>
          </div>
          <div class="foot-caption">
            <div class="line-content">
              <div class="part-left"><a href=""><span>add to wishlist</span></a></div>
              <div class="part-right"><a href=""><span>call store seller</span></a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="event-actions">
        <div class="common-event-actions">
          <div class="action-wrapper action-wrapper-top">
            <div class="icon-wrapper"><a src="#" class="circle-icon-a"><span class="circle-icon comment-action-icon"></span></a></div>
            <div class="icon-wrapper icon-wrapper-center"><a src="#" class="circle-icon-a"><span class="circle-icon like-action-icon"></span></a><span class="text-icon">12 people likes this</span></div>
            <div class="icon-wrapper"><a src="#" class="circle-icon-a"><span class="circle-icon share-action-icon"></span></a></div>
          </div>
        </div>
        <div class="comments-block">
          <div class="action-wrapper">
            <div class="icon-wrapper"><span class="vertical-line"></span><a src="#" class="circle-icon-a"><span class="circle-icon comment-exist"></span></a><span class="text-icon">47 comment, click to view.</span></div>
          </div>
        </div>
      </div>
      <div class="comments-wrapper">
        <div class="comment-item">
          <div class="comment-thumbnail"><a src="#" class="circle-thumbnail-a">
              <div class="circle-thumbnail"><img src="{{URL::asset('assets/img/avatar3.png')}}"></div></a></div><span class="vertical-line"></span>
          <div class="comment-content">
            <div class="comment-data">
              <h5 class="comment-author">Ian Santono</h5><span class="comment-timestamp">March 24, 2016 <span class="orange-color">-</span> 03:18 AM</span>
            </div>
            <div class="comment-text-wrapper"><span class="baloon-triangle"></span>
              <p class="comment-text">Mantabbb ni gan :D - yang dari luar kota Surabaya bisa kumpul dimana ya?</p>
            </div>
          </div>
        </div>
        <div class="comment-item">
          <div class="comment-thumbnail"><a src="#" class="circle-thumbnail-a">
              <div class="circle-thumbnail"><img src="{{URL::asset('assets/img/avatar1.png')}}"></div></a></div><span class="vertical-line"></span>
          <div class="comment-content">
            <div class="comment-data">
              <h5 class="comment-author">Jennifer Tjandra</h5><span class="comment-timestamp">March 24, 2016 <span class="orange-color">-</span> 03:18 AM</span>
            </div>
            <div class="comment-text-wrapper"><span class="baloon-triangle"></span>
              <p class="comment-text">Di sekitar JX dulu aja bro, Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a  odio tincidunt auctor.</p>
            </div>
          </div>
        </div>
        <div class="comment-item hidden-comments">
          <div class="comment-thumbnail"></div><span class="vertical-line"></span>
          <div class="comment-content"><a src="#">
              <div class="comment-text-wrapper"><span class="trile-dots">...</span><span class="bold-text">23 more comments,</span><span> tab/click to show up its!</span></div></a></div>
        </div>
        <div class="comment-item">
          <div class="comment-thumbnail"><a src="#" class="circle-thumbnail-a">
              <div class="circle-thumbnail"><img src="{{URL::asset('assets/img/avatar21.png')}}"></div></a></div><span class="vertical-line"></span>
          <div class="comment-content">
            <div class="comment-data">
              <h5 class="comment-author">Ronald Widha</h5><span class="comment-timestamp">March 24, 2016 <span class="orange-color">-</span> 03:18 AM</span>
            </div>
            <div class="comment-text-wrapper"><span class="baloon-triangle"></span>
              <p class="comment-text">MantaPPP!!! \m/ :)</p>
            </div>
          </div>
        </div>
        <div class="comment-item">
          <div class="comment-thumbnail"><a src="#" class="circle-thumbnail-a">
              <div class="circle-thumbnail"><img src="{{URL::asset('assets/img/avatar3.png')}}"></div></a></div><span class="vertical-line"></span>
          <div class="comment-content">
            <div class="comment-data">
              <h5 class="comment-author">Ian Santono</h5><span class="comment-timestamp">March 24, 2016 <span class="orange-color">-</span> 03:18 AM</span>
            </div>
            <div class="comment-text-wrapper"><span class="baloon-triangle"></span>
              <p class="comment-text">Ramaian kawan, “Dimana pemberontak, engkau bersembunyi?”.</p>
            </div>
          </div>
        </div>
        <div class="comment-item comment-form">
          <div class="comment-thumbnail"><a src="#" class="circle-thumbnail-a">
              <div class="circle-thumbnail"><img src="{{URL::asset('assets/img/avatar1.png')}}"></div></a></div><span class="vertical-line"></span>
          <div class="blocking-bar"><span class="small-circle"></span></div>
          <div class="comment-content">
            <div class="comment-text-wrapper"><span class="baloon-triangle"></span>
              <form method="post" action="#">
                <textarea id="ta-comment" name="ta-comment" placeholder="Type your comment here!"></textarea>
                <div class="btn-comment-wrapper"><a id="cancel-comment" class="btn">cancel</a>
                  <button id="submit-comment" type="submit" class="btn">go!</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="end-of-comments"></div>
      </div>
      <div class="event-actions">
        <div class="comments-block-add">
          <div class="action-wrapper">
            <div class="icon-wrapper"><span class="vertical-line"></span><a src="#" class="circle-icon-a"><span class="circle-icon comment-exist"></span></a><span class="text-icon">Add new comments</span></div>
          </div>
        </div>
        <div class="icon-wrapper-collapse"><span class="text-icon">Collapse comments</span><a src="#" class="circle-icon-a"><span class="circle-icon comment-exist"></span></a></div>
      </div>
    </div>
    <div class="aside">
      <div class="ads-wrapper"><img src="{{URL::asset('assets/img/ads6.jpg')}}"></div>
      <div class="aside-content">
        <h4>recommended products</h4><span class="hr-orange"></span>
        <ul id="fav-articles">
        @foreach ($postsrecom as $postsrecom)
          <li style="min-height: 50px;height:unset;"><a href="/product/details/{{ $postsrecom->id }}"><img style="width: 80px;height: 75px;" src="{{URL::to('/')}}/tempocepat/public/assets/img/market/product/small/1/{{ $postsrecom->image }}"/><span style="display:block;width:100%;height: 20px;"><span>{!! $postsrecom->name !!}</span><p style="margin: 5px 0 0;color: #f16621;">{!! $postsrecom->price !!} K</p></span></a></li>
        @endforeach
          {{-- <li><a href="#"><img src="{{URL::asset('assets/img/12.jpg')}}"/><span>“Bangsa Indonesia, Bangsa Musik”</span></a></li>
          <li><a href="#"><img src="{{URL::asset('assets/img/b1.jpg')}}"/><span>“Bangsa Indonesia, Bangsa Musik” Dari Dahulu Hingga Kini dan selamanya</span></a></li>
          <li><a href="#"><img src="{{URL::asset('assets/img/9.jpg')}}"/><span>Dari Dahulu Hingga Kini dan selamanya</span></a></li>
          <li><a href="#"><img src="{{URL::asset('assets/img/16.jpg')}}"/><span>“Bangsa Indonesia, Bangsa Musik”</span></a></li> --}}
        </ul>
      </div>
    </div>
  </div>
</div>
@include('layouts.footer')
@stop
{{--@endif--}}

@section('additional')
{{-- <script type='text/javascript'>  
  
 var $jq = jQuery.noConflict();
  
</script>
<script src="{{URL::asset('assets/scripts/jquery-1.8.3.min.js')}}"></script> --}}
{{-- <script src="{{URL::asset('assets/scripts/jquery/jquery.min.js')}}"></script> --}}
<script src="{{URL::asset('assets/scripts/jquery.elevatezoom.js')}}"></script>
{{-- <script>
$('#zoom_01').elevateZoom({
  zoomType: "inner",
  cursor: "crosshair",
  zoomWindowFadeIn: 900,
  zoomWindowFadeOut: 1200
});
</script> --}}
<script>

$(document).ready(function() {

$(".img_tmb").error(function () {
  // $(this).parent().parent().hide();
  $(this).hide();
});
// $(document).ready(function() {
$(window).load(function(){
$("#product-show #zoom_01").elevateZoom({
  zoomType: "inner",
  cursor: "crosshair",
  zoomWindowFadeIn: 900,
  zoomWindowFadeOut: 1200
  //---
  // zoomType: "lens",
  // lensShape : "round",
  // lensSize  : 250,
  // zoomWindowPosition  : 16,
  // zoomWindowOffsetx  : 16,
  // zoomWindowOffsety  : 16,
  // containLensZoom  : true
  //---
});
$("#product-show #zoom_02").elevateZoom(none);
$("#product-show #zoom_03").elevateZoom(none);
});
$("#product-show img:eq(0)").nextAll().hide();
// alert('jo');
$("#menu_tmb .image-wrapper a img").click(function(e){
  //   alert('jo');
  var index = $(this).parent().parent().index();
  // alert(index);
  // $("#menu_tmb img").click(function(e){
  // var index = $(this).index();
  $("#product-show img").eq(index).show().siblings().hide();
  if(index == 0){
    // alert('0');

    // $("#product-show #zoom_01").show();
    // $("#product-show #zoom_02").hide();
    // $("#product-show #zoom_03").hide();
    // $(".zoomContainer").hide();
    $("#product-show #zoom_01").elevateZoom({
      zoomType: "inner",
      cursor: "crosshair",
      zoomWindowFadeIn: 900,
      zoomWindowFadeOut: 1200
    });
    $("#product-show #zoom_02").elevateZoom(none);
    $("#product-show #zoom_03").elevateZoom(none);
  }else if(index == 1){
    
    $(".zoomContainer").hide();
    $(".zoomContainer").css('width','0');
    $(".zoomContainer").css('height','0');
    // alert('1');
    // $("#product-show #zoom_01").hide();

    // $("#product-show #zoom_02").show();
    // $("#product-show #zoom_03").hide();
    // $("#product-show #zoom_01").hide();
    // $(".zoomContainer").hide();

    // $("#product-show #zoom_02").elevateZoom({
    // zoomType: "inner",
    // cursor: "crosshair",
    // zoomWindowFadeIn: 900,
    // zoomWindowFadeOut: 1200
    // });
    $("#product-show #zoom_03").elevateZoom(none);
    $("#product-show #zoom_01").elevateZoom(none);

    $("#product-show #zoom_02").elevateZoom(none);

  }else if(index == 2){
    
    $(".zoomContainer").hide();
    $(".zoomContainer").css('width','0');
    $(".zoomContainer").css('height','0');
    // alert('2');

    // $("#product-show #zoom_03").show();
    // $("#product-show #zoom_03").hide();
    // $("#product-show #zoom_02").hide();
    // $(".zoomContainer").hide();

    // $("#product-show #zoom_03").elevateZoom({
    //   zoomType: "inner",
    //   cursor: "crosshair",
    //   zoomWindowFadeIn: 900,
    //   zoomWindowFadeOut: 1200
    // });
    $("#product-show #zoom_03").elevateZoom(none);
    $("#product-show #zoom_02").elevateZoom(none);

    $("#product-show #zoom_01").elevateZoom(none);

  }
});
// });

});

</script>
@append