@extends('layouts.default')
{{--@if(Session::has(''))--}}
@section('content')
@include('layouts.header')

    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/stylesheets/blog-details.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/stylesheets/blog-details-medium.css')}}" media="only screen and (min-width:768px) and (max-width:980px)">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/stylesheets/blog-details-small.css')}}" media="only screen and (min-width:600px) and (max-width:767px)">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/stylesheets/blog-details-extrasmall.css')}}" media="only screen and (min-width:300px) and (max-width:599px)">

<div id="before-blog-detail" class="before-detail">
  <div class="container">
    <div class="bd-item">
      <ul class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li><a href="/blog">Blog</a></li>
        <li class="active">{!! str_limit(e($blog->title),$limit=45,$end='...') !!}</li>
      </ul>
    </div>
    <div class="bd-item">
      <h1>blog details</h1>
    </div>
    <div class="bd-item">
      <div class="back-wrapper"><a href="/blog"><span class="back-wrapper-icon arrow-more"></span><span>Back</span></a></div>
    </div>
  </div>
</div>
<div id="main-content-details-blog" class="content-details">
  <div class="container">
    <div class="main-wrapper">
      <div class="main-wrapper-card">
        {{-- <span>{!! $blog->slug !!}</span> --}}
        <h1 class="article-title">{!! $blog->title !!}</h1>
        <div class="article-data"><span class="article-category">musiclopedia</span><span class="date-time">{!! date('F d, Y', strtotime($blog->updated_at)) !!}</span></div>
        <div class="main-image-wrapper"><img src="{{URL::to('/')}}/tempocepat/public/assets/img/blog/large/{{ $blog->image }}" alt=""></div>
        <p>{!! str_limit(htmlspecialchars_decode(e($blog->article)),$limit=1024,$end='...') !!}</p>
        <!--
        <p class="article">Social media marketing itu tidak sederhana. Bukan cuma sekedar posting tweet yang lucu atau upload gambar meme. Dan yang terpenting, tidak diotomatiskan dari social media A ke B. Intinya, anda sebagai pemain baru tidak akan bisa langsung aktif di banyak social media sekaligus. Ini justru akan berdampak buruk. Intinya, anda sebagai pemain baru tidak akan bisa langsung aktif di banyak social media sekaligus. Ini justru akan berdampak buruk.</p>
        <div class="main-image-wrapper"><img src="{ {URL::asset('assets/img/b1.jpg')}}" alt=""></div>
        <p class="article">Facebook menempati posisi tertinggi sebagai social media dengan jumlah pengguna terbanyak, disusul oleh Twitter. Ukuran dan umur memang 2 faktor utama dalam menentukan social media untuk keperluan pemasaran. Dalam hal ini, Facebook dan Twitter lebih unggul. Social media marketing itu tidak sederhana. Bukan cuma sekedar posting tweet yang lucu atau upload gambar meme. Dan yang terpenting, tidak diotomatiskan dari social media A ke B. Intinya, anda sebagai pemain baru tidak akan bisa langsung aktif di banyak social media sekaligus. Ini justru akan berdampak buruk. Intinya, anda sebagai pemain baru tidak akan bisa langsung aktif di banyak social media sekaligus. Ini justru akan berdampak buruk.<br/> Social media marketing itu tidak sederhana. Bukan cuma sekedar posting tweet yang lucu atau upload gambar meme. Dan yang terpenting, tidak diotomatiskan dari social media A ke B. Intinya, anda sebagai pemain baru tidak akan bisa langsung aktif di banyak social media sekaligus. Ini justru akan berdampak buruk. Intinya, anda sebagai pemain baru tidak akan bisa langsung aktif di banyak social media sekaligus. Ini justru akan berdampak buruk.</p>
        -->
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
        <h4>recommended articles</h4><span class="hr-orange"></span>
        <ul id="fav-articles">
        @foreach ($postsrecom as $postsrecom)
          <li style="min-height: 50px;height:unset;"><a href="/blog/details/{{ $postsrecom->slug }}"><img style="width: 75px;height: 50px;" src="{{URL::to('/')}}/tempocepat/public/assets/img/blog/small/{{ $postsrecom->image }}"/><span style="display:block;width:100%;height: 20px;"><span>{!! $postsrecom->title !!}</span></span></a></li>
        @endforeach
          {{-- <li><a href="#"><img src="{{URL::asset('assets/img/10.jpg')}}"/><span>Dari Dahulu Hingga Kini dan selamanya</span></a></li>
          <li><a href="#"><img src="{{URL::asset('assets/img/12.jpg')}}"/><span>“Bangsa Indonesia, Bangsa Musik”</span></a></li>
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