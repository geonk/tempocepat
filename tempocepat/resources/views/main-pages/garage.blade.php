@extends('layouts.default')
{{--@if(Session::has(''))--}}
@section('content')
@include('layouts.header')

    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/stylesheets/garage.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/stylesheets/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/stylesheets/garage-large.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/stylesheets/garage-medium.css')}}" media="only screen and (min-width:768px) and (max-width:980px)">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/stylesheets/garage-small.css')}}" media="only screen and (min-width:600px) and (max-width:767px)">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/stylesheets/garage-extrasmall.css')}}" media="only screen and (min-width:300px) and (max-width:599px)">

    {{-- <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/stylesheets/garage.css')}}"> --}}

    <style>
      .music-item .music-img-wrapper img {
          height: 90%;
          width: auto;
      }
    </style>

    <div id="before-garage-preview-bg" class="before-preview-bg"></div>
    <div id="before-garage-preview" class="before-preview">
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
              <li><a href="musician/list">list of musicians</a></li>
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
                <div id="storedropdown" class="dropdown-content"><a href="#">All Genre</a><a href="#">Rock</a><a href="#">Jazz</a><a href="#">Hip Hop</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="garage-preview" class="main">
  <div class="container">
    <div class="music-wrapper">
      @foreach ($musics as $music)
      <div class="music-item">
        <div class="music-img-wrapper"><img src="{{URL::to('/')}}/tempocepat/public/assets/img/garage/musician/logo/medium/{{ $music->image }}" alt=""></div>
        <div class="music-caption-wrapper">
          <h3 class="music-title">{!! $music->title !!}</h3><a href="/musician/profile/{{ e($music->musicians_slug) }}"><span class="music-author">{!! $music->name !!}</span></a><span class="song-category">{!! $music->music_categories_name !!}</span><a href="#" class="btn">play</a>
        </div>
      </div>
      @endforeach
    </div>
    <div class="after-music">
      <div class="after-music-wrapper"><a href="#" class="btn">load more</a></div>
    </div>
  </div>
</div>
{{--@include('layouts.footer')--}}
@stop
{{--@endif--}}

@section('additional')
<!-- Font Awesome -->
<link rel="stylesheet" href="{{URL::asset('assets/stylesheets/AdminLTE/bootstrap/css/font-awesome.min.css')}}">
<style>
  .dropdown-content {
    z-index: 999;
  }
</style>
<script>
  function dropdown(){
        document.getElementById('storedropdown').classList.toggle("show");
    }
    window.onclick = function(event){
        if(!event.target.matches('.dropbtn')){
            var dropdowns = document.getElementByClassName('dropdown-content');
            var i;
            for(i=0; i<dropdowns.length; i++){
                var openDropDown = dropdowns[i];
                if(openDropDown.classList.contains('show')){
                    openDropDown.classList.remove('show');
                }
            }
        }
    }
</script>
@append