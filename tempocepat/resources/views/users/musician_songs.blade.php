@extends('layouts.default')
{{--@if(Session::has(''))--}}
@section('content')
@include('layouts.header')
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/stylesheets/garage.css')}}">
{{-- <style>
  .music-wrapper{
    flex-wrap: wrap;
    display: flex;
  }
  .music-wrapper .music-item{
    display: flex;
    justify-content: flex-start;
    flex-direction: column;
  }
</style> --}}
    <div id="before-musician" class="before-detail">
      <div class="container">
        <div class="bd-item">
          <ul class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">yourusername</li>
          </ul>
        </div>
        <div class="bd-item">
          <h1>musician</h1>
        </div>
        <div class="bd-item"></div>
      </div>
    </div>
<div id="musician" class="content-details">
      <div class="container">
        <div class="main-wrapper">
          <div id="musician-cover-image"><img src="{{URL::to('/')}}/assets/img/musician-1.jpg"></div>
          <div class="main-wrapper-card">
            <div class="part part-left">
              <div class="image-wrapper"><img src="{{URL::to('/')}}/assets/img/g7.jpg" alt=""></div>
              <h2>Alice's Tears</h2><span class="genre">Jazzyphonic</span><span class="list-title">Inheritance:</span>
              <ul class="inherit">
                <li>Jazz</li>
                <li>Metal</li>
                <li>Orcestra</li>
              </ul>
              <ul class="musician-menu">
                <li class="active"><a href="profile.html"><span>Songs</span></a></li>
                <li><a href="profile-participated-events.html"><span>Musician Profile</span></a></li>
              </ul><span class="list-title">Tags:</span>
              <ul class="tags"><a href="#">
                  <li>Jazz</li></a><a href="#">
                  <li>Metal</li></a><a href="#">
                  <li>orcestra</li></a><a href="#">
                  <li>Metalic</li></a><a href="#">
                  <li>Jazz</li></a><a href="#">
                  <li>Metal</li></a><a href="#">
                  <li>orcestra</li></a></ul>
            </div>
            <div id="part-musician-songs" class="part part-right">
              <h4>Songs</h4><span class="hr-orange"></span>
              <div class="music-wrapper">
                <div class="music-item">
                  <div class="music-img-wrapper"><img src="{{URL::to('/')}}/assets/img/g7.jpg"/></div>
                  <div class="music-caption-wrapper">
                    <h3 class="music-title">petaka di ujung timur jawa</h3><a href="#"><span class="music-author">laskar abang cemeng</span></a><span class="song-category">original</span><a href="#" class="btn">play</a>
                  </div>
                </div>
                <div class="music-item">
                  <div class="music-img-wrapper"><img src="{{URL::to('/')}}/assets/img/g7.jpg"/></div>
                  <div class="music-caption-wrapper">
                    <h3 class="music-title">adalah pusaka sejuta umat manusia di dunia</h3><a href="#"><span class="music-author">laskar abang cemeng</span></a><span class="song-category">original</span><a href="#" class="btn">play</a>
                  </div>
                </div>
                <div class="music-item">
                  <div class="music-img-wrapper"><img src="{{URL::to('/')}}/assets/img/g7.jpg"/></div>
                  <div class="music-caption-wrapper">
                    <h3 class="music-title">petaka di ujung timur jawa</h3><a href="#"><span class="music-author">laskar abang cemeng</span></a><span class="song-category">original</span><a href="#" class="btn">play</a>
                  </div>
                </div>
                <div class="music-item">
                  <div class="music-img-wrapper"><img src="{{URL::to('/')}}/assets/img/g7.jpg"/></div>
                  <div class="music-caption-wrapper">
                    <h3 class="music-title">L.D.R.</h3><a href="#"><span class="music-author">laskar abang cemeng</span></a><span class="song-category">original</span><a href="#" class="btn">play</a>
                  </div>
                </div>
                <div class="music-item">
                  <div class="music-img-wrapper"><img src="{{URL::to('/')}}/assets/img/g7.jpg"/></div>
                  <div class="music-caption-wrapper">
                    <h3 class="music-title">L.D.R.</h3><a href="#"><span class="music-author">laskar abang cemeng</span></a><span class="song-category">original</span><a href="#" class="btn">play</a>
                  </div>
                </div>
                <div class="music-item">
                  <div class="music-img-wrapper"><img src="{{URL::to('/')}}/assets/img/g7.jpg"/></div>
                  <div class="music-caption-wrapper">
                    <h3 class="music-title">petaka di ujung timur jawa</h3><a href="#"><span class="music-author">laskar abang cemeng</span></a><span class="song-category">original</span><a href="#" class="btn">play</a>
                  </div>
                </div>
                <div class="music-item">
                  <div class="music-img-wrapper"><img src="{{URL::to('/')}}/assets/img/g7.jpg"/></div>
                  <div class="music-caption-wrapper">
                    <h3 class="music-title">adalah pusaka sejuta umat manusia di dunia</h3><a href="#"><span class="music-author">laskar abang cemeng</span></a><span class="song-category">original</span><a href="#" class="btn">play</a>
                  </div>
                </div>
                <div class="music-item">
                  <div class="music-img-wrapper"><img src="{{URL::to('/')}}/assets/img/g7.jpg"/></div>
                  <div class="music-caption-wrapper">
                    <h3 class="music-title">petaka di ujung timur jawa</h3><a href="#"><span class="music-author">laskar abang cemeng</span></a><span class="song-category">original</span><a href="#" class="btn">play</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@include('layouts.footer')
@stop
{{--@endif--}}
