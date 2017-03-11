@extends('layouts.default')
{{--@if(Session::has(''))--}}
@section('content')
@include('layouts.header')
<div id="before-profile" class="before-detail">
  <div class="container">
    <div class="bd-item">
      <ul class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li class="active">yourusername</li>
      </ul>
    </div>
    <div class="bd-item">
      <h1>profile</h1>
    </div>
    <div class="bd-item"></div>
  </div>
</div>
<div id="profile" class="content-details">
  <div class="container">
    <div class="main-wrapper">
      <div class="main-wrapper-card">
        <div class="part part-left">
          <div class="image-wrapper"><img src="{{URL::asset('assets/img/profile1.jpg')}}" alt=""></div><span class="username">@jennymella</span>
          <ul>
            <li class="active"><a href="/profile"><span>Profile Data</span></a></li>
            <li><a href="/profile/participatedevents"><span>Participated Events</span></a></li>
            <li><a href="/profile/wishlist"><span>Wishlist</span></a></li>
            <li><a href="/profile/likedmusics"><span>Liked Music</span></a></li>
          </ul>
        </div>
        <div id="part-liked-music" class="part part-center">
          <h2>liked music</h2><span class="hr-block"></span>
          <ul>
            <li><a href="#"><span class="list"><span class="img-wrap"><img src="{{URL::asset('assets/img/g1.jpg')}}" alt=""></span><span class="name-wrap">Andai Esok adalah Hari Ini</span><span class="musician-wrap">Jejak Kaki</span><span class="act-time"><span class="small">Liked at</span><span>12 Maret 2016, 1.32 PM</span></span></span></a></li>
            <li><a href="#"><span class="list"><span class="img-wrap"><img src="{{URL::asset('assets/img/g2.jpg')}}" alt=""></span><span class="name-wrap">Andai Esok adalah Hari Ini</span><span class="musician-wrap">Jejak Kaki</span><span class="act-time"><span class="small">Liked at</span><span>12 Maret 2016, 1.32 PM</span></span></span></a></li>
            <li><a href="#"><span class="list"><span class="img-wrap"><img src="{{URL::asset('assets/img/g3.jpg')}}" alt=""></span><span class="name-wrap">Andai Esok adalah Hari Ini</span><span class="musician-wrap">Jejak Kaki</span><span class="act-time"><span class="small">Liked at</span><span>12 Maret 2016, 1.32 PM</span></span></span></a></li>
          </ul>
        </div>
        <div class="part part-right">
          <div class="aside-content">
            <h4>Latest Activities</h4><span class="hr-orange"></span>
            <ul id="fav-articles">
              <li><a href="#"><img src="{{URL::asset('assets/img/profile1.jpg')}}"/><span>Dari Dahulu Hingga Kini dan selamanya</span></a></li>
              <li><a href="#"><img src="{{URL::asset('assets/img/profile1.jpg')}}"/><span>“Bangsa Indonesia, Bangsa Musik”</span></a></li>
              <li><a href="#"><img src="{{URL::asset('assets/img/profile1.jpg')}}"/><span>“Bangsa Indonesia, Bangsa Musik” Dari Dahulu Hingga Kini dan selamanya</span></a></li>
              <li><a href="#"><img src="{{URL::asset('assets/img/profile1.jpg')}}"/><span>Dari Dahulu Hingga Kini dan selamanya</span></a></li>
              <li><a href="#"><img src="{{URL::asset('assets/img/profile1.jpg')}}"/><span>“Bangsa Indonesia, Bangsa Musik”</span></a></li>
            </ul>
          </div>
          <div class="ads-wrapper"><img src="{{URL::asset('assets/img/ads6.jpg')}}"></div>
        </div>
      </div>
    </div>
  </div>
</div>
@include('layouts.footer')
@stop
{{--@endif--}}
