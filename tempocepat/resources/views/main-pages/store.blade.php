@extends('layouts.default')
{{--@if(Session::has(''))--}}
@section('content')
@include('layouts.header')

    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/stylesheets/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/stylesheets/store.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/stylesheets/store-medium.css')}}" media="only screen and (min-width:768px) and (max-width:980px)">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/stylesheets/store-small.css')}}" media="only screen and (min-width:600px) and (max-width:767px)">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/stylesheets/store-extrasmall.css')}}" media="only screen and (min-width:300px) and (max-width:599px)">
  

<div id="before-store" class="before-detail">
  <div class="container">
    <div class="bd-item">
      <ul class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li><a href="/market">Market</a></li>
        <li class="active"><a href="/store/list"><span>List of Stores</span></a></li>
        <li class="active">{!! e($store->name) !!}</li>
      </ul>
    </div>
    <div class="bd-item">
      <h1>store</h1>
    </div>
    <div class="bd-item">
      {{-- <div class="back-wrapper"><a href="store/list" style="color: white;"><span>List of Stores</span></a></div> --}}
    </div>
  </div>
</div>
<div id="store" class="content-details">
  <div class="container">
    <div class="main-wrapper">
      <div class="main-wrapper-card">
        <div class="main-image-wrapper">
        <img src="{{URL::to('/')}}/tempocepat/public/assets/img/market/store/cover/medium/{{ $store->image_cover }}" alt="">
        </div>
        <div class="card-store-data">
          <div class="store-image-head">
            <div class="store-image-profile">
            <img src="{{URL::to('/')}}/tempocepat/public/assets/img/market/store/logo/medium/{{ $store->image }}" alt="">
            </div>
            <div class="icons-wrap">
              <ul>
                <li><a href="#"><i class="icon fa fa-heart"></i></a></li>
                <li><a href="#"><i class="icon fa fa-share"></i></a></li>
                <li><a href="#"><i class="icon fa fa-envelope"></i></a></li>
                <li><a href="#"><i class="icon fa fa-warning"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="store-data"><span class="store-name">{!! e($store->name) !!}</span>
            <p class="short-desc">Di sekitar JX dulu aja bro, Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>
            <div class="line-info">
              <div id="lip-left" class="line-info-part"><span class="lip-title">offline office</span>
                <ul>
                  <li><span class="label">address</span><span>Jl. Pumpungan No.47A - Menur Pumpungan - Sukolilo - Surabaya - Jawa Timur - Indonesia</span></li>
                  <li><span class="label">website</span><span>kecebongekorsembilan.com</span></li>
                  <li><span class="label">contact</span><span>+6285648984911</span></li>
                </ul>
              </div>
              <div id="lip-right" class="line-info-part"><span class="lip-title">find us on social media</span>
                <ul><a href="#">
                    <li><span class="fa fa-facebook"></span></li></a><a href="#">
                    <li><span class="fa fa-twitter"></span></li></a><a href="#">
                    <li><span class="fa fa-instagram"></span></li></a><a href="#">
                    <li><span class="fa fa-whatsapp"></span></li></a><a href="#">
                    <li><span class="fa fa-soundcloud"></span></li></a></ul>
              </div>
            </div>
          </div>
        </div>
        <div class="store-actions">
          <div id="sa-left" class="store-action-part">
            <h3>all products</h3><span class="hr-orange"></span>
          </div>
          <div id="sa-right" class="store-action-part">
            <div class="dropper-wrap">
              <div class="dropdown"><a onclick="dropdown()" class="dropbtn btn">By Categories<i class="fa fa-chevron-down"></i></a>
                <div id="storedropdown" class="dropdown-content"><a href="#">All Categories</a><a href="#">T-shirt</a><a href="#">Hoodie</a><a href="#">Hat</a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="product-wrapper">
        @foreach ($products as $product)
          <div class="product-item"><a href="/product/details/{{ $product->id }}">
              <div class="product-card">
                <div class="pci-image-wrapper"><img src="{{URL::to('/')}}/tempocepat/public/assets/img/market/product/small/1/{{ $product->image }}" alt=""></div>
                <div class="pci-caption-wrapper"><span class="merch-category">jacket</span><span class="merch-name">{!! $product->name !!}</span><span class="merch-price">750 K</span></div>
              </div></a></div>
        @endforeach
          {{-- <div class="product-item"><a href="product-details.html">
              <div class="product-card">
                <div class="pci-image-wrapper"><img src="assets/img/m1.jpg"/></div>
                <div class="pci-caption-wrapper"><span class="merch-category">jacket</span><span class="merch-name">black leather rocka nazination</span><span class="merch-price">750 K</span></div>
              </div></a></div>
          <div class="product-item"><a href="product-details.html">
              <div class="product-card">
                <div class="pci-image-wrapper"><img src="assets/img/m2.jpg"/></div>
                <div class="pci-caption-wrapper"><span class="merch-category">jacket</span><span class="merch-name">black leather rocka nazination</span><span class="merch-price">750 K</span></div>
              </div></a></div>
          <div class="product-item"><a href="product-details.html">
              <div class="product-card">
                <div class="pci-image-wrapper"><img src="assets/img/m3.jpg"/></div>
                <div class="pci-caption-wrapper"><span class="merch-category">jacket</span><span class="merch-name">black leather rocka nazination</span><span class="merch-price">750 K</span></div>
              </div></a></div>
          <div class="product-item"><a href="product-details.html">
              <div class="product-card">
                <div class="pci-image-wrapper"><img src="assets/img/m4.jpg"/></div>
                <div class="pci-caption-wrapper"><span class="merch-category">jacket</span><span class="merch-name">black leather rocka nazination</span><span class="merch-price">750 K</span></div>
              </div></a></div>
          <div class="product-item"><a href="product-details.html">
              <div class="product-card">
                <div class="pci-image-wrapper"><img src="assets/img/m5.jpg"/></div>
                <div class="pci-caption-wrapper"><span class="merch-category">jacket</span><span class="merch-name">black leather rocka nazination</span><span class="merch-price">750 K</span></div>
              </div></a></div>
          <div class="product-item"><a href="product-details.html">
              <div class="product-card">
                <div class="pci-image-wrapper"><img src="assets/img/m6.jpg"/></div>
                <div class="pci-caption-wrapper"><span class="merch-category">jacket</span><span class="merch-name">black leather rocka nazination</span><span class="merch-price">750 K</span></div>
              </div></a></div>
          <div class="product-item"><a href="product-details.html">
              <div class="product-card">
                <div class="pci-image-wrapper"><img src="assets/img/m1.jpg"/></div>
                <div class="pci-caption-wrapper"><span class="merch-category">jacket</span><span class="merch-name">black leather rocka nazination</span><span class="merch-price">750 K</span></div>
              </div></a></div>
          <div class="product-item"><a href="product-details.html">
              <div class="product-card">
                <div class="pci-image-wrapper"><img src="assets/img/m2.jpg"/></div>
                <div class="pci-caption-wrapper"><span class="merch-category">jacket</span><span class="merch-name">black leather rocka nazination</span><span class="merch-price">750 K</span></div>
              </div></a></div>
          <div class="product-item"><a href="product-details.html">
              <div class="product-card">
                <div class="pci-image-wrapper"><img src="assets/img/m3.jpg"/></div>
                <div class="pci-caption-wrapper"><span class="merch-category">jacket</span><span class="merch-name">black leather rocka nazination</span><span class="merch-price">750 K</span></div>
              </div></a></div>
          <div class="product-item"><a href="product-details.html">
              <div class="product-card">
                <div class="pci-image-wrapper"><img src="assets/img/m4.jpg"/></div>
                <div class="pci-caption-wrapper"><span class="merch-category">jacket</span><span class="merch-name">black leather rocka nazination</span><span class="merch-price">750 K</span></div>
              </div></a></div>
          <div class="product-item"><a href="product-details.html">
              <div class="product-card">
                <div class="pci-image-wrapper"><img src="assets/img/m5.jpg"/></div>
                <div class="pci-caption-wrapper"><span class="merch-category">jacket</span><span class="merch-name">black leather rocka nazination</span><span class="merch-price">750 K</span></div>
              </div></a></div>
          <div class="product-item"><a href="product-details.html">
              <div class="product-card">
                <div class="pci-image-wrapper"><img src="assets/img/m6.jpg"/></div>
                <div class="pci-caption-wrapper"><span class="merch-category">jacket</span><span class="merch-name">black leather rocka nazination</span><span class="merch-price">750 K</span></div>
              </div></a></div>
          <div class="product-item"><a href="product-details.html">
              <div class="product-card">
                <div class="pci-image-wrapper"><img src="assets/img/m1.jpg"/></div>
                <div class="pci-caption-wrapper"><span class="merch-category">jacket</span><span class="merch-name">black leather rocka nazination</span><span class="merch-price">750 K</span></div>
              </div></a></div>
          <div class="product-item"><a href="product-details.html">
              <div class="product-card">
                <div class="pci-image-wrapper"><img src="assets/img/m2.jpg"/></div>
                <div class="pci-caption-wrapper"><span class="merch-category">jacket</span><span class="merch-name">black leather rocka nazination</span><span class="merch-price">750 K</span></div>
              </div></a></div>
          <div class="product-item"><a href="product-details.html">
              <div class="product-card">
                <div class="pci-image-wrapper"><img src="assets/img/m3.jpg"/></div>
                <div class="pci-caption-wrapper"><span class="merch-category">jacket</span><span class="merch-name">black leather rocka nazination</span><span class="merch-price">750 K</span></div>
              </div></a></div>
          <div class="product-item"><a href="product-details.html">
              <div class="product-card">
                <div class="pci-image-wrapper"><img src="assets/img/m4.jpg"/></div>
                <div class="pci-caption-wrapper"><span class="merch-category">jacket</span><span class="merch-name">black leather rocka nazination</span><span class="merch-price">750 K</span></div>
              </div></a></div>
          <div class="product-item"><a href="product-details.html">
              <div class="product-card">
                <div class="pci-image-wrapper"><img src="assets/img/m5.jpg"/></div>
                <div class="pci-caption-wrapper"><span class="merch-category">jacket</span><span class="merch-name">black leather rocka nazination</span><span class="merch-price">750 K</span></div>
              </div></a></div>
          <div class="product-item"><a href="product-details.html">
              <div class="product-card">
                <div class="pci-image-wrapper"><img src="assets/img/m6.jpg"/></div>
                <div class="pci-caption-wrapper"><span class="merch-category">jacket</span><span class="merch-name">black leather rocka nazination</span><span class="merch-price">750 K</span></div>
              </div></a></div> --}}
        </div>
      </div>
    </div>
  </div>
</div>
@include('layouts.footer')
@stop
{{--@endif--}}