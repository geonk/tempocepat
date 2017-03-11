@extends('layouts.default')
{{--@if(Session::has(''))--}}
@section('content')
@include('layouts.header')

    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/stylesheets/garage.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/stylesheets/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/stylesheets/list-store.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/stylesheets/list-store-medium.css')}}" media="only screen and (min-width:768px) and (max-width:980px)">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/stylesheets/list-store-small.css')}}" media="only screen and (min-width:600px) and (max-width:767px)">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/stylesheets/list-store-extrasmall.css')}}" media="only screen and (min-width:300px) and (max-width:599px)">

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

    <div id="before-market-inside-preview-bg" class="before-preview">
      <div class="before-market-preview-wrapper">
        <div class="bmp-icon"></div>
        <h3 class="opening-text">Mau Tampil Gaul &amp; Trendy?</h3>
        <h1 class="main-text">semua merchandise musik ada di sini</h1>
        <p class="desc-text">Dapatkan marchandise yang kamu banget di ratusan toko virtual kami</p>
      </div>
    </div>
    <div class="bar-filter-bg">
      <div class="container">
        <div id="bar-filter-market" class="bar-filter">

          <div class="bar-fragment bar-fragment-left">
            <ul class="bar-list-menu">
              <li><a href="/market">All Products</a></li>
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
          </div>
        </div>
      </div>
    </div>
<div id="garage-preview" class="main">
    {{-- <h1>list of stores</h1>
    @foreach($stores as $store)
        <li>{!! e($store->name) !!}</li>
    @endforeach --}}
    <div class="container">
        <div class="music-wrapper">
        @foreach($stores as $store)
          <div class="store-item">
            <div class="store-img-cover"><img src="{{URL::to('/')}}/tempocepat/public/assets/img/market/store/cover/small/{{ $store->image_cover }}"/></div>
            <div class="store-content">
              <div class="store-img-wrapper"><img src="{{URL::to('/')}}/tempocepat/public/assets/img/market/store/logo/small/{{ $store->image }}"/></div>
              <div class="store-caption-wrapper"><a href="/store/details/{{ $store->id }}">
                  <h3 class="store-name">{!! e($store->name) !!}</h3></a><span class="store-product-count">13 Products</span></div>
            </div>
          </div>
        @endforeach
        </div>
        <div class="after-music">
          <div class="after-music-wrapper"><a href="#" class="btn">load more</a></div>
        </div>
</div>
</div>
{{-- @include('layouts.footer') --}}
@stop
{{--@endif--}}