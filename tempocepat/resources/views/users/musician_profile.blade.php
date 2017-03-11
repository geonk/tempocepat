@extends('layouts.default')
{{--@if(Session::has(''))--}}
@section('content')
@include('layouts.header')

    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/stylesheets/garage.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/stylesheets/musician.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/stylesheets/musician-medium.css')}}" media="only screen and (min-width:768px) and (max-width:980px)">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/stylesheets/musician-small.css')}}" media="only screen and (min-width:600px) and (max-width:767px)">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/stylesheets/musician-extrasmall.css')}}" media="only screen and (min-width:300px) and (max-width:599px)">

    <div id="before-musician" class="before-detail">
      <div class="container">
        <div class="bd-item">
          <ul class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li><a href="/musician/list">Musicians</a></li>
            <li class="active">{!! e($musician->name) !!}</li>
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
          <div id="musician-cover-image"><img src="{{URL::to('/')}}/tempocepat/public/assets/img/garage/musician/cover/medium/{{ $musician->image_cover }}"></div>
          <div class="main-wrapper-card">
            <div class="part part-left">
              <div class="image-wrapper"><img src="{{URL::to('/')}}/tempocepat/public/assets/img/garage/musician/logo/medium/{{ $musician->image }}" alt=""></div>
              <h2>{!! e($musician->name) !!}</h2>
              <span class="genre">{!! e($musician->genre) !!}</span>
              <span class="list-title">Inheritance:</span>
              <ul class="inherit">
                <li>Jazz</li>
                <li>Metal</li>
                <li>Orcestra</li>
              </ul>
              <ul class="musician-menu">
                <li class="active"><a href="profile-participated-events.html"><span>Musician Profile</span></a></li>
                <li class=""><a href="profile.html"><span>Songs</span></a></li>
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
              <h4>Musician Profile</h4><span class="hr-orange"></span>
              <div class="musician-profile-content"><span class="tagline">"Social media marketing itu tidak sederhana. Bukan cuma sekedar posting tweet yang lucu atau upload gambar meme."</span>
                <p>{!! htmlspecialchars_decode(e($musician->description)) !!}</p>
                <div class="line-row">
                  <label class="label">Date of Born:</label><span class="data">19 May 2000</span>
                </div>
                <div class="line-row">
                  <label class="label">City:</label><span class="data">Surabaya</span>
                </div>
                <div class="line-row">
                  <label class="label">Influence:</label><span class="data">Social Distortion, AKA, Aragon</span>
                </div>
                <div class="line-row">
                  <label class="label">Best Gigs:</label><span class="data">Opening Metalica 2008, Main Stage Soundrenaline Surabaya, Opening Burgerkill Sidoarjo 2006, Main Stage Soundrenaline Surabaya, Opening Burgerkill Sidoarjo 2006</span>
                </div>
                <div class="line-row">
                  <label class="label">Personel:</label>
                </div>
                <div class="personel-wrapper">
                  <div class="personel-item">
                    <div class="image-wrapper"><img src="{{URL::to('/')}}/assets/img/profile1.jpg"></div>
                    <div class="caption-wrapper"><a href="#"><span class="name">Kaka Muhardin</span></a><span class="position">Guitar</span></div>
                  </div>
                  <div class="personel-item">
                    <div class="image-wrapper"><img src="{{URL::to('/')}}/assets/img/profile1.jpg"></div>
                    <div class="caption-wrapper"><a href="#"><span class="name">Kaka Muhardin</span></a><span class="position">Guitar</span></div>
                  </div>
                  <div class="personel-item">
                    <div class="image-wrapper"><img src="{{URL::to('/')}}/assets/img/profile1.jpg"></div>
                    <div class="caption-wrapper"><a href="#"><span class="name">Kaka Muhardin</span></a><span class="position">Guitar</span></div>
                  </div>
                  <div class="personel-item">
                    <div class="image-wrapper"><img src="{{URL::to('/')}}/assets/img/profile1.jpg"></div>
                    <div class="caption-wrapper"><a href="#"><span class="name">Kaka Muhardin</span></a><span class="position">Guitar</span></div>
                  </div>
                  <div class="personel-item">
                    <div class="image-wrapper"><img src="{{URL::to('/')}}/assets/img/profile1.jpg"></div>
                    <div class="caption-wrapper"><a href="#"><span class="name">Kaka Muhardin</span></a><span class="position">Guitar</span></div>
                  </div>
                  <div class="personel-item">
                    <div class="image-wrapper"><img src="{{URL::to('/')}}/assets/img/profile1.jpg"></div>
                    <div class="caption-wrapper"><a href="#"><span class="name">Kaka Muhardin</span></a><span class="position">Guitar</span></div>
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
