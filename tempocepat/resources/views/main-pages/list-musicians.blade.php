@extends('layouts.default')
{{--@if(Session::has(''))--}}
@section('content')
@include('layouts.header')

    {{-- <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/stylesheets/garage.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/stylesheets/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/stylesheets/garage-large.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/stylesheets/garage-medium.css')}}" media="only screen and (min-width:768px) and (max-width:980px)">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/stylesheets/garage-small.css')}}" media="only screen and (min-width:600px) and (max-width:767px)">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/stylesheets/garage-extrasmall.css')}}" media="only screen and (min-width:300px) and (max-width:599px)">
     --}}
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/stylesheets/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/stylesheets/list-musician.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/stylesheets/list-musician-medium.css')}}" media="only screen and (min-width:768px) and (max-width:980px)">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/stylesheets/list-musician-small.css')}}" media="only screen and (min-width:600px) and (max-width:767px)">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/stylesheets/list-musician-extrasmall.css')}}" media="only screen and (min-width:300px) and (max-width:599px)">

    <style>
      .music-wrapper {
          display: flex;
          flex-wrap: wrap;
          align-items: center;
          justify-content: space-around;
      }
      .after-music {
          width: 100%;
          height: 175px;
          display: flex;
          justify-content: center;
          align-items: center
      }
      .after-music .after-music-wrapper {
          text-align: center
      }
      /*----------------------*/
      span.musician-genre {
          font-size: 13px;
          margin-top: 3px;
      }
      /*----------------------*/
      .musician-img-wrapper {
          flex: 2;
      }
      .musician-caption-wrapper {
          flex: 5;
      }
    </style>
    
    <div id="before-garage-preview-bg" class="before-preview">
      <div class="before-market-preview-wrapper">
        <div class="bmp-icon"></div>
        <h3 class="opening-text">Punya karya musik sendiri?</h3>
        <h1 class="main-text">bagikan kreasi musik kamu di sini</h1>
        <p class="desc-text">Unggah kreasi musik kamu, baik original maupun <i>Cover</i>.</p>
      </div>
    </div>
    <div class="bar-filter-bg">
      <div class="container">
        <div id="bar-filter-garage" class="bar-filter">

          <div class="bar-fragment bar-fragment-left">
            <ul class="bar-list-menu">
              <li><a href="/garage">garage's songs</a></li>
            </ul>
          </div>

          <div class="bar-fragment bar-fragment-right">
            <div class="bar-fragment-inside">
              <label class="label-form">Search using free text</label>
              <form>
                <input name="text" placeholder="Free Text">
                <button type="submit" class="btn">Search</button>
              </form>
            </div>
            <div class="bar-fragment-inside">
              <label class="label-form">Search by genre</label>
              <div class="dropdown"><a onclick="dropdown()" class="dropbtn btn">By Genre<i class="fa fa-chevron-down"></i></a>
                <div id="storedropdown" class="dropdown-content"><a href="#">All Categories</a><a href="#">T-shirt</a><a href="#">Hoodie</a><a href="#">Hat</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- <div id="garage-preview" class="main"> --}}
    <div id="garage-preview">
    {{-- <h1>list of stores</h1>
    @foreach($musicians as $musician)
        <li>{!! e($musician->name) !!}</li>
    @endforeach --}}
    <div class="container">
        <div class="music-wrapper" id="results">

          

        {{-- @foreach($musicians as $musician)
          <div class="musician-item">
            <div class="musician-img-cover"><img src="{{URL::to('/')}}/tempocepat/public/assets/img/garage/musician/cover/small/{{ $musician->image_cover }}"/></div>
            <div class="musician-content">
              <div class="musician-img-wrapper"><img src="{{URL::to('/')}}/tempocepat/public/assets/img/garage/musician/logo/small/{{ $musician->image }}"/></div>
              <div class="musician-caption-wrapper"><a href="/musician/profile/{{ $musician->slug }}">
                  <h3 class="musician-name">{!! e($musician->name) !!}</h3></a><span class="musician-genre">{!! e($musician->genre) !!}</span></div>
            </div>
          </div>
        @endforeach --}}
        </div>
        <div class="after-music">
          <div class="after-music-wrapper"><a href="#" class="btn btn-more">load more</a></div>
        </div>
</div>
</div>

{{-- //////////////////////////////////////// --}}
<style>
/*.wrapper > ul#results li {
  margin-bottom: 1px;
  background: #f9f9f9;
  padding: 20px;
  list-style: none;
}
.ajax-loading{
  text-align: center;
}*/
</style>
{{-- <div class="wrapper">
    <ul id="results"><!-- results appear here --></ul>

    <div class="after-music">
          <div class="after-music-wrapper"><a href="#" class="btn btn-more">load more</a></div>
        </div>

    <div class="ajax-loading"><img src="{{ asset('assets/images/loading.gif') }}" /></div>
</div> --}}
{{-- //////////////////////////////////// --}}

{{-- @include('layouts.footer') --}}
@stop
{{--@endif--}}

@section('additional')

<script>
var page = 1; //track user scroll as page number, right now page number is 1
load_more(page); //initial content load

// $(window).scroll(function() { //detect page scroll

  $('.btn-more').click(function() {



    // if($(window).scrollTop() + $(window).height() >= $(document).height()) { //if user scrolled from top to bottom of the page
    //   alert('a');
        page++; //page number increment
        load_more(page); //load content  
    // }
});

function load_more(page){
  $.ajax(
        {
            url: '?page=' + page,
            type: "get",
            datatype: "html",
            beforeSend: function()
            {
                $('.ajax-loading').show();
            }
        })
        .done(function(data)
        {
            if(data.length == 0){
            console.log(data.length);
              
                //notify user if nothing to load
                $('.ajax-loading').html("No more records!");
                return;
            }
            $('.ajax-loading').hide(); //hide loading animation once data is received
            $("#results").append(data); //append data into #results element          
        })
        .fail(function(jqXHR, ajaxOptions, thrownError)
        {
              alert('No response from server');
        });
 }
</script>

@append