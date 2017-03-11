@extends('layouts.default')
{{--@if(Session::has(''))--}}
@section('content')
@include('layouts.header')

    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/stylesheets/market.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/stylesheets/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/stylesheets/market-large.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/stylesheets/market-medium.css')}}" media="only screen and (min-width:768px) and (max-width:980px)">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/stylesheets/market-small.css')}}" media="only screen and (min-width:600px) and (max-width:767px)">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/stylesheets/market-extrasmall.css')}}" media="only screen and (min-width:300px) and (max-width:599px)">

    {{-- <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/stylesheets/market.css')}}"> --}}

    <div id="before-market-inside-preview-bg" class="before-preview-bg"></div>
    <div id="before-market-inside-preview" class="before-preview">
      <div class="before-market-preview-wrapper">
        <div class="bmp-icon"></div>
        <h3 class="opening-text">Mau Tampil Gaul & Trendy?</h3>
        <h1 class="main-text">semua merchandise musik ada di sini</h1>
        <p class="desc-text">Dapatkan marchandise yang kamu banget di ratusan toko virtual kami</p>
      </div>
    </div>
    <div class="bar-filter-bg">
      <div class="container">
        <div id="bar-filter-garage" class="bar-filter">
          <div class="bar-fragment bar-fragment-left">
            <ul class="bar-list-menu">
              <li><a href="store/list">list of stores</a></li>
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
              <div class="dropdown"><a onclick="dropdown()" class="dropbtn btn">By Categories<i class="fa fa-chevron-down"></i></a>
                <div id="storedropdown" class="dropdown-content"><a href="#">All Categories</a><a href="#">T-shirt</a><a href="#">Hoodie</a><a href="#">Hat</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="market-preview" class="main">
      <div class="container">
        <div class="product-wrapper">
        @foreach ($products as $product)
          <div class="product-item"><a href="/product/details/{{ $product->id }}">
              <div class="product-card">
                <div class="pci-image-wrapper"><img src="{{URL::to('/')}}/tempocepat/public/assets/img/market/product/small/1/{{ $product->image }}" alt=""></div>
                <div class="pci-caption-wrapper"><span class="merch-category">{!! $product->product_categories_name !!}</span><span class="merch-name">{!! $product->name !!}</span><span class="merch-price">{!! $product->price !!} K</span></div>
              </div></a></div>
        @endforeach
        </div>
        <div class="after-product">
          <div class="after-product-wrapper"><a href="#" class="btn">load more</a></div>
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