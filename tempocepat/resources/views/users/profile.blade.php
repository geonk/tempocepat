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
          <div class="image-wrapper"><img src="assets/img/profile1.jpg" alt=""></div><span class="username">@jennymella</span>
          <ul>
            <li class="active"><a href="/profile"><span>Profile Data</span></a></li>
            <li><a href="/profile/participatedevents"><span>Participated Events</span></a></li>
            <li><a href="/profile/wishlist"><span>Wishlist</span></a></li>
            <li><a href="/profile/likedmusics"><span>Liked Music</span></a></li>
          </ul>
        </div>
        <div id="part-profile" class="part part-center">
          <h2>nama yang agak panjang sekali banget</h2><span class="username">@jennymella</span><span class="hr-block"></span>
          <ul>
            <li><span class="label-data">Address</span><span class="data">Jl. Elok Permai - Surabaya - Jawa Timur</span></li>
            <li><span class="label-data">Sex Type</span><span class="data">Perempuan</span></li>
            <li><span class="label-data">Website/Blog</span><span class="data">jennymella.com</span></li>
            <li><span class="label-data">Email Address</span><span class="data">jennymella@gmail.com</span></li>
            <li><span class="label-data">Facebook</span><span class="data">jennymella@gmail.com</span></li>
            <li><span class="label-data">Twitter</span><span class="data">@jennymella</span></li>
            <li><span class="label-data">Instagram</span><span class="data">@jennymella</span></li>
            <li><span class="label-data">Mobile Number</span><span class="data">+6485648984911</span></li>
          </ul>
        </div>
        <div class="part part-right">
          <div class="aside-content">
            <h4>Latest Activities</h4><span class="hr-orange"></span>
            <ul id="fav-articles">
              <li><a href="#"><img src="assets/img/profile1.jpg"/><span>Dari Dahulu Hingga Kini dan selamanya</span></a></li>
              <li><a href="#"><img src="assets/img/profile1.jpg"/><span>“Bangsa Indonesia, Bangsa Musik”</span></a></li>
              <li><a href="#"><img src="assets/img/profile1.jpg"/><span>“Bangsa Indonesia, Bangsa Musik” Dari Dahulu Hingga Kini dan selamanya</span></a></li>
              <li><a href="#"><img src="assets/img/profile1.jpg"/><span>Dari Dahulu Hingga Kini dan selamanya</span></a></li>
              <li><a href="#"><img src="assets/img/profile1.jpg"/><span>“Bangsa Indonesia, Bangsa Musik”</span></a></li>
            </ul>
          </div>
          <div class="ads-wrapper"><img src="assets/img/ads6.jpg"></div>
        </div>
      </div>
    </div>
  </div>
</div>
@include('layouts.footer')
@stop
{{--@endif--}}
