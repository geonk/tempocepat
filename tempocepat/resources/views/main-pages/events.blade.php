@extends('layouts.default')
{{--@if(Session::has(''))--}}
@section('content')
@include('layouts.header')

    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/stylesheets/events.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/stylesheets/events-medium.css')}}" media="only screen and (min-width:768px) and (max-width:980px)">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/stylesheets/events-small.css')}}" media="only screen and (min-width:600px) and (max-width:767px)">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/stylesheets/events-extrasmall.css')}}" media="only screen and (min-width:300px) and (max-width:599px)">

<style>
    /*#main-content .container .aside .highlight-this-week .list-slide-htw .owl-controls {
        margin-top: 0 !important;
    }*/
    /*-----*/
    /*.owl-carousel {
        position: relative;
    }*/
    /*-----*/
    .ul-liker{
        display: none;
    }
    .sticky {
        position: -webkit-sticky;
        position: sticky;
        top: 0;
    }
    /*.sticky:before,
    .sticky:after {
        content: '';
        display: table;
    }*/
    /*html,body {
        overflow: visible;*/
        /*overflow-x: unset !important;* /
        -webkit-perspective: unset;
        perspective:unset;
        -webkit-transform-style: unset;
        transform-style: unset;
    }
    /*supersmall*/
    @media only screen and (min-width:300px) and (max-width:445px){
    #main-content .container .main-section {
        width: 100%;
    }
    #main-content .container .main-section .list-events .event-item .event-card {
        width: 100%;
    }
    #main-content .container .main-section .list-events .event-item .event-card .event-image{
        width: 100%;
        height: auto;
        display: block;
    }
    #main-content .container .main-section .list-events .event-item .event-card .event-image img{
        width: 100%;
        height: auto;
        display: block;
    }
    #main-content .container .main-section .list-events .event-item .event-card .event-caption {
        width: 90%;
        min-height: 260px;
        padding: 12px 5%;
        height: auto;
    }
    }
    /*end-supersmall*/
</style>

    <div id="before-event-preview-bg" class="before-preview-bg"></div>
    <div id="before-event-preview" class="before-preview">
      <div class="before-market-preview-wrapper">
        <div class="bmp-icon"></div>
        <h3 class="opening-text">Mau tahu event musik ter-update?</h3>
        <h1 class="main-text">temukan event musik favoritmu di sini</h1>
        <p class="desc-text">Cari dan temukan event musik yang kamu banget, klik PARTICIPATE untuk berpartisipasi</p>
      </div>
    </div>
    <div id="main-content" class="main">
    <div class="white-bar">
    </div>
    <div class="container">
        <div class="main-section">
            <div class="white-bar-inside">
                <div class="title-wrapper">
                    <div id="leaf-left" class="leaf">
                    </div>
                    <h3 class="title-section">
                        recently registered events
                    </h3>
                    <div id="leaf-right" class="leaf">
                    </div>
                </div>
            </div>
            

<div class="list-events">
                <!--  -->
                @foreach ($events as $event)
                <!-- <div class="article"> -->
                    <!-- <h3>{ !! $article->title !!}</h3> -->
                    <!-- <a data-id="{ { $article->id }}" href="#">Like</a> -->
                    <!-- <p><span id="like_counter_{ { $article->id }}">{ !! $article->likes !!}</span> people like this.</p> -->
                    <!--@ if(!empty($article->liked_by))
                    <ul>
                        @ foreach($article->liked_by as $user)
                        <li>{ !! $user; !!}</li>
                        @ endforeach
                    </ul>
                    @ endif-->
                <!-- </div> -->
                <!-- @ endforeach -->
                <!--  -->
                <div class="event-item">
                    <div class="event-card">
                        <div class="event-image">
                            <img src="{{URL::to('/')}}/tempocepat/public/assets/img/event/medium/{{ $event->image }}" alt="">
                        </div>
                        <div class="event-caption">
                            <div class="main-event-caption">
                                <h3>
                                    {!! $event->title !!}
                                </h3>
                                <span class="time-info">
                                    28 Maret 2016 - 19.00 s/d 22.00 WIB
                                </span>
                                <span class="place-info">
                                    MAKODAM V BRAWIJAYA - Surabaya - Jawa Timur
                                </span>
                                <span class="hr-orange">
                                </span>
                                <div class="title-something">
                                    Special Performance:
                                </div>
                                <p class="desc-event">
                                    Superman Is Dead, Shaggydog, Endank Soekamti, Tomato, Suicidal Sinatra, Special performance TAKUPAZ Dancer.
                                </p>
                            </div>
                            <div class="footer-event-caption">
                                <a href="/event/details/{{ $event->id }}" class="more">
                                    More details
                                    <span class="arrow-more">
                                    </span>
                                </a>
                                <a href="#" class="btn">
                                    participate
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="event-actions">
                        <div class="common-event-actions">
                            <div class="action-wrapper action-wrapper-top">
                                <div class="icon-wrapper">
                                    <a src="#" class="circle-icon-a">
                                        <span class="circle-icon comment-action-icon" item-id="{{ $event->id }}">
                                        </span>
                                    </a>
                                </div>
                                <div class="icon-wrapper icon-wrapper-center">
                                    <a src="#" class="circle-icon-a" data-id="{{ $event->id }}">
                                        <span class="circle-icon like-action-icon">
                                        </span>
                                    </a>
                                    <span class="text-icon">
                                        <span id="like_counter_{{ $event->id }}">{!! $event->likes !!}</span> people likes this

                                    @if(!empty($event->liked_by))
                                    <ul class="ul-liker">
                                        @foreach($event->liked_by as $user)
                                        <li>{!! $user; !!}</li>
                                        @endforeach
                                    </ul>
                                    @endif

                                    </span>
                                </div>
                                <div class="icon-wrapper">
                                    <a src="#" class="circle-icon-a">
                                        <span class="circle-icon share-action-icon">
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="comments-block">
                            <div class="action-wrapper">
                                <div class="icon-wrapper">
                                    <a src="#" class="circle-icon-a">
                                        <span class="circle-icon comment-exist">
                                        </span>
                                    </a>
                                    <span class="text-icon">
                                        47 comment, click to view.
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
              <div class="comments-wrapper" id="comment_wrapper_{{ $event->id }}">
                
                
                @foreach($comments as $comment)
                @if($comment->related_table_id==$event->id)
                <div class="comment-item" data-id="{{ $comment->id }}">
                  <div class="comment-thumbnail"><a src="#" class="circle-thumbnail-a">
                      <div class="circle-thumbnail">
                      <img src="{{URL::to('/')}}/img/profiles/{{ $comment->image }}" class="user-image" alt="User Image">
                      </div></a></div><span class="vertical-line"></span>
                  <div class="comment-content">
                    <div class="comment-data">
                      <h5 class="comment-author">{!! $comment->name !!}</h5><span class="comment-timestamp">{!! date('F d, Y', strtotime($comment->updated_at)) !!} <span class="orange-color">-</span> {!! date('G:i A', strtotime($comment->updated_at)) !!}</span>
                    </div>
                    <div class="comment-text-wrapper">
                        <span class="baloon-triangle"></span>
                      <p id="comment_{{ $comment->id }}" class="comment-text">{!! $comment->comment !!}</p>
                      @if (Auth::id()==$comment->users_id)
                      <div class="dropdown comment-setting" data-id="{{ $comment->id }}">
                        <a href="#"  class="dropbtn">
                        <!-- onclick="dropdown()" -->
                            <span class="trile-dots">...</span>
                        </a>
                        <div id="storedropdown" class="dropdown-content">
                            <a class="edit_comment" data-id="{{ $comment->id }}">Edit</a>
                            <a class="delete_comment" data-id="{{ $comment->id }}">Delete</a>
                        </div>
                      </div>
                        @endif
                    </div>
                  </div>
                </div>
                @endif
                @endforeach
                
              </div>
              <div class="comments-wrapper-additional" id="comments_wrapper_additional_{{ $event->id }}">
                  <div class="comment-item comment-form" id="comments_form_{{ $event->id }}">
                      <div class="comment-thumbnail"><a src="#" class="circle-thumbnail-a">
                          <div class="circle-thumbnail"><img src="assets/img/avatar1.png"/></div></a></div><span class="vertical-line"></span>
                      <div class="blocking-bar"><span class="small-circle"></span></div>
                      <div class="comment-content">
                        <div class="comment-text-wrapper"><span class="baloon-triangle"></span>
                          <form action="#"> 
                            <!-- <meta name="csrf-token" content="{ { csrf_token() }}"/> -->
                            {!! Form::token() !!}
                            <!-- <input type="hidden" name="_token" value="{ { Session::token() }}" /> -->
                            <textarea id="ta-comment" name="comment" placeholder="Type your comment here!"></textarea>
                            <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                            <div class="btn-comment-wrapper"><a id="cancel-comment" class="btn" item-id="{{ $event->id }}">cancel</a>
                              <button type="submit" id="submit-comment" class="btn" item-id="{{ $event->id }}">go!</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                <div class="end-of-comments"></div>

              </div>
              <div class="event-actions event-actions-footer" id="event_actions_footer_{{ $event->id }}">
                <div class="comments-block-add">
                  <div class="action-wrapper">
                    <div class="icon-wrapper"><span class="vertical-line"></span><a src="#" class="circle-icon-a"><span class="circle-icon comment-exist add-comment" item-id="{{ $event->id }}"></span></a><span class="text-icon">Add new comments</span></div>
                  </div>
                </div>
                <div class="icon-wrapper-collapse"><span class="text-icon">Collapse comments</span><a src="#" class="circle-icon-a collapse-icon" item-id="{{ $event->id }}"><span class="circle-icon comment-exist"></span></a></div>
              </div>



                </div>
                
            @endforeach
                

                
            </div>
            {{-- { !! $events->render(new App\Pagination\CustomPresenter) !!} --}}
            <!-- { !!str_replace('/?', '?', $events->render())!!} -->

            <div class="large-12 medium-12 small-12 columns" id="containpager">
                {{-- {!! $events->render() !!} --}}
                {!!str_replace('/?', '?', $events->render())!!}
            </div>
            
            <style>
                #containpager {
                    margin-top: 50px;
                    margin-bottom: 70px;
                }
                ul.pagination {
                    display: block;
                    height: 1.5rem;
                    margin-left: -0.3125rem;
                }
                ul.pagination li {

                    float: left;
                    display: block;

                    height: 1.5rem;
                    color: #222222;
                    font-size: 0.875rem;
                    margin-left: 0.3125rem;

                    padding-top: 8px;

                }
                .pagination .active {
                    padding: 0.0625rem 0.625rem;
                    padding-top: 8px;
                }
                .pagination .disabled {
                    border: solid 1px #aaa;
                    padding: 0.0625rem 0.625rem;
                    border-radius: 3px;
                    padding-bottom: 0;
                    padding-top: 6px;
                }
                ul.pagination li a {
                    display: block;
                    padding: 0.0625rem 0.625rem 0.0625rem;
                    color: #999999;
                    -webkit-border-radius: 3px;
                    border-radius: 3px;
                }
                .pagination li a[rel="prev"], .pagination li a[rel="next"] {
                    color: #c89b62 !important;
                    border: solid 1px #c89b62;
                    margin-top: -10px;
                }
                .pagination li a[rel="prev"] {

                   padding-bottom: 8px;
                    padding-top: 8px;

                }
                .pagination li a[rel="next"] {
                    margin-left: 10px !important;

                   padding-bottom: 8px;
                    padding-top: 8px;

                }
            </style>

            <!-- { !! $events->render() !!} -->

            <!-- @ foreach($listevents as $listevent)
                <p>
                    { !! $listevent->title !!}
                </p>
            @ endforeach -->
            <!-- // @ include('pagination.custom', ['paginator' => $events]) -->


            <!--
            <div class="more-area">
                <a href="#" class="btn more-btn">
                    show me more events
                </a>
            </div>
            -->
        </div>
        <div class="aside">
            <div class="white-bar-inside">
                <div class="title-wrapper">
                    <div class="hr">
                    </div>
                    <h3 class="title-section">
                        events of this week
                    </h3>
                    <div class="hr">
                    </div>
                </div>
            </div>
            <div class="list-this-week">

                @foreach($listevents as $listevent)
                <a href="/event/details/{{ $listevent->id }}">
                <div class="ltw-item">
                    <div class="ltw-event-image">
                        <img src="{{URL::to('/')}}/tempocepat/public/assets/img/event/small/{{ $listevent->image }}"/>
                    </div>
                    <div class="ltw-event-caption">
                        <h3 class="ltw-title" style="color:black;">
                            {{-- {!! $listevent->title !!} --}}
                            {!! str_limit(htmlspecialchars_decode(e($listevent->title)),$limit=55,$end='...') !!}
                        </h3>
                        <span class="ltw-time-info">
                            28 Maret 2016
                        </span>
                    </div>
                    <div class="arrow-wrapper">
                        <div class="arrow-more">
                        </div>
                    </div>
                </div>
                </a>
                @endforeach

                {{-- <div class="ltw-item">
                    <div class="ltw-event-image">
                        <img src="assets/img/e1.jpg"/>
                    </div>
                    <div class="ltw-event-caption">
                        <h3 class="ltw-title">
                            Konser JADILAH LEGENDA
                        </h3>
                        <span class="ltw-time-info">
                            28 Maret 2016
                        </span>
                    </div>
                    <div class="arrow-wrapper">
                        <div class="arrow-more">
                        </div>
                    </div>
                </div>
                <div class="ltw-item">
                    <div class="ltw-event-image">
                        <img src="assets/img/e2.jpg"/>
                    </div>
                    <div class="ltw-event-caption">
                        <h3 class="ltw-title">
                            Konser jadilah yang lain!
                        </h3>
                        <span class="ltw-time-info">
                            28 Maret 2016
                        </span>
                    </div>
                    <div class="arrow-wrapper">
                        <div class="arrow-more">
                        </div>
                    </div>
                </div>
                <div class="ltw-item">
                    <div class="ltw-event-image">
                        <img src="assets/img/e3.jpg"/>
                    </div>
                    <div class="ltw-event-caption">
                        <h3 class="ltw-title">
                            Hhhwwwkkkwggghhh!!! yeah psycosocial party night
                        </h3>
                        <span class="ltw-time-info">
                            28 Maret 2016
                        </span>
                    </div>
                    <div class="arrow-wrapper">
                        <div class="arrow-more">
                        </div>
                    </div>
                </div>
                <div class="ltw-item">
                    <div class="ltw-event-image">
                        <img src="assets/img/e4.jpg"/>
                    </div>
                    <div class="ltw-event-caption">
                        <h3 class="ltw-title">
                            malam air dan api
                        </h3>
                        <span class="ltw-time-info">
                            28 Maret 2016
                        </span>
                    </div>
                    <div class="arrow-wrapper">
                        <div class="arrow-more">
                        </div>
                    </div>
                </div>
                <div class="ltw-item">
                    <div class="ltw-event-image">
                        <img src="assets/img/e5.jpg"/>
                    </div>
                    <div class="ltw-event-caption">
                        <h3 class="ltw-title">
                            Pesta pentai di tengah kota
                        </h3>
                        <span class="ltw-time-info">
                            28 Maret 2016
                        </span>
                    </div>
                    <div class="arrow-wrapper">
                        <div class="arrow-more">
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="sticky sticky--desktop">
                <div class="highlight-this-week">
                    <div class="htw-title-bar">
                        <span id="htw-icon">
                        </span>
                        <h3>
                            highlight of this week
                        </h3>
                    </div>
                    <div class="list-slide-htw">
                    @foreach($listevents as $listevent)

                <a href="/event/details/{{ $listevent->id }}">
                <div class="slide-htw-item">
                            <div class="htw-image-wrapper">
                                <img src="{{URL::to('/')}}/tempocepat/public/assets/img/event/medium/{{ $listevent->image }}"/>
                            </div>
                            <div class="htw-caption-wrapper">
                                <div id="days">
                                    <span class="small">
                                        coming up on
                                    </span>
                                    <span class="large">
                                        3 Days
                                    </span>
                                    <span class="time-show">
                                        28 Maret 2016 19.00 s/d 22.00 WIB
                                    </span>
                                </div>
                                <div id="event-details">
                                    <h2>
                                        {!! str_limit(htmlspecialchars_decode(e($listevent->title)),$limit=35,$end='...') !!}
                                    </h2>
                                    <span class="place-show">
                                        MAKODAM V BRAWIJAYA Surabaya - Jawa Timur
                                    </span>
                                </div>
                            </div>
                        </div>
                        </a>
                @endforeach
                        {{-- <div class="slide-htw-item">
                            <div class="htw-image-wrapper">
                                <img src="assets/img/e1.jpg"/>
                            </div>
                            <div class="htw-caption-wrapper">
                                <div id="days">
                                    <span class="small">
                                        coming up on
                                    </span>
                                    <span class="large">
                                        3 Days
                                    </span>
                                    <span class="time-show">
                                        28 Maret 2016 19.00 s/d 22.00 WIB
                                    </span>
                                </div>
                                <div id="event-details">
                                    <h2>
                                        Konser Amal JADILAH LEGENDA Part. 2
                                    </h2>
                                    <span class="place-show">
                                        MAKODAM V BRAWIJAYA Surabaya - Jawa Timur
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="slide-htw-item">
                            <div class="htw-image-wrapper">
                                <img src="assets/img/e2.jpg"/>
                            </div>
                            <div class="htw-caption-wrapper">
                                <div id="days">
                                    <span class="small">
                                        coming up on
                                    </span>
                                    <span class="large">
                                        3 Days
                                    </span>
                                    <span class="time-show">
                                        28 Maret 2016 19.00 s/d 22.00 WIB
                                    </span>
                                </div>
                                <div id="event-details">
                                    <h2>
                                        Konser jadilah yang lain!
                                    </h2>
                                    <span class="place-show">
                                        MAKODAM V BRAWIJAYA Surabaya - Jawa Timur
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="slide-htw-item">
                            <div class="htw-image-wrapper">
                                <img src="assets/img/e3.jpg"/>
                            </div>
                            <div class="htw-caption-wrapper">
                                <div id="days">
                                    <span class="small">
                                        coming up on
                                    </span>
                                    <span class="large">
                                        3 Days
                                    </span>
                                    <span class="time-show">
                                        28 Maret 2016 19.00 s/d 22.00 WIB
                                    </span>
                                </div>
                                <div id="event-details">
                                    <h2>
                                        Hhhwwwkkkwggghhh!!! yeah psycosocial party
                                    </h2>
                                    <span class="place-show">
                                        MAKODAM V BRAWIJAYA Surabaya - Jawa Timur
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="slide-htw-item">
                            <div class="htw-image-wrapper">
                                <img src="assets/img/e4.jpg"/>
                            </div>
                            <div class="htw-caption-wrapper">
                                <div id="days">
                                    <span class="small">
                                        coming up on
                                    </span>
                                    <span class="large">
                                        3 Days
                                    </span>
                                    <span class="time-show">
                                        28 Maret 2016 19.00 s/d 22.00 WIB
                                    </span>
                                </div>
                                <div id="event-details">
                                    <h2>
                                        malam air dan api
                                    </h2>
                                    <span class="place-show">
                                        MAKODAM V BRAWIJAYA Surabaya - Jawa Timur
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="slide-htw-item">
                            <div class="htw-image-wrapper">
                                <img src="assets/img/e5.jpg"/>
                            </div>
                            <div class="htw-caption-wrapper">
                                <div id="days">
                                    <span class="small">
                                        coming up on
                                    </span>
                                    <span class="large">
                                        3 Days
                                    </span>
                                    <span class="time-show">
                                        28 Maret 2016 19.00 s/d 22.00 WIB
                                    </span>
                                </div>
                                <div id="event-details">
                                    <h2>
                                        Pesta pentai di tengah kota
                                    </h2>
                                    <span class="place-show">
                                        MAKODAM V BRAWIJAYA Surabaya - Jawa Timur
                                    </span>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="what-is-this-corner">
                    <span class="q-icon">
                        ?
                    </span>
                    <h3>
                        web apaan sih ini?
                    </h3>
                    <a href="#">
                        <span>
                            Cari tahu
                            <span class="arrow-more">
                            </span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')
@stop
{{--@endif--}}

@section('additional')
{{-- <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/scripts/foundation.css')}}"> --}}
{{-- <script src="{{URL::asset('assets/scripts/foundation.js')}}"></script> --}}
<script src="{{URL::asset('assets/scripts/stickyfill.js')}}"></script>
<script charset="utf-8">
    $.ajaxSetup({
            headers:{
                // 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                'X-CSRF-TOKEN': $('input[name="_token"]').val()
            }
        });

        $(function() {
            $('.sticky').Stickyfill();
        });

    $(document).ready(function() {

        // $(function() {
        //     $('.sticky').Stickyfill();
        // });
        // $('.sticky').Stickyfill();





            $('.comments-wrapper').slideUp();
            $('.event-actions-footer').fadeOut();
            $('.comments-wrapper-additional').slideUp();



            //---
            $('.comment-setting a').on('click', function(){
            // function dropdown(){
                // document.getElementById('storedropdown').classList.toggle("show");
                $(this).parent().find('#storedropdown').toggleClass("show");
            // }
            window.onclick = function(event){
                if(!event.target.matches('.dropbtn')){
                    // var dropdowns = document.getElementByClassName('dropdown-content');
                    var dropdowns = $(this).parent().find('dropdown-content');
                    var i;
                    for(i=0; i<dropdowns.length; i++){
                        var openDropDown = dropdowns[i];
                        if(openDropDown.classList.contains('show')){
                            openDropDown.classList.remove('show');
                        }
                    }
                }
            }
            });
            //---



        $('.collapse-icon').on('click', function(){
            var itemid = $(this).attr('item-id');
            // $('.comments-wrapper').slideUp();
            $('#comment_wrapper_'+itemid).slideToggle();
            $(this).parent().parent().fadeOut();
            // $('.comments-wrapper-additional').slideToggle();
            $('#comments_wrapper_additional_'+itemid).slideToggle();



        });

        $('.comment-action-icon').on('click', function(){
            var itemid = $(this).attr('item-id');
            // alert(itemid);
            // if($('.comments-wrapper').attr('item-id')==itemid){
            //     alert(itemid);
                // $('.comments-wrapper').slideToggle();
            // }else{

            // }



            //------------------------

            var item = $(this).parent().parent().parent().parent().parent().parent().find('#comment_wrapper_'+itemid);
            var children = item.children().length;

            // alert(children);

            var addelem = '<div class="comment-item hidden-comments"><div class="comment-thumbnail"></div><span class="vertical-line"></span><div class="comment-content"><a src="#"><div class="comment-text-wrapper"><span class="trile-dots">...</span><span class="bold-text">'+(children-4)+' more comments,</span><span> tab/click to show up its!</span></div></a></div></div>';

            
            // item.find('div div div .dropdown .dropdown-content').hide();
            // item.lastChild().show();

            // $('.dropdown-content').removeClass('show');

            // $(this).parent().parent().parent().parent().parent().parent().find('.comments-wrapper>div:nth-child(2)').after(addelem);
            if(children>4){

                item.children().hide();

                item.find('.comment-item:nth-child(1)').show();
                item.find('.comment-item:nth-child(2)').show();
                item.find('.comment-item:nth-last-child(2)').show();
                item.find('.comment-item:nth-last-child(1)').show();

                // $(this).parent().parent().parent().parent().parent().parent().parent().find('.comments-wrapper>div:nth-child(2)').after(addelem);
                item.parent().parent().find('#comment_wrapper_'+itemid+'>div:nth-child(2)').after(addelem);
                item.find('.hidden-comments div a').on('click', function(){
                    item.children().show();
                    $(this).parent().parent().hide();
                });
            }else{}

            //------------------------



            $('#comment_wrapper_'+itemid).slideToggle();

            $('#event_actions_footer_'+itemid).fadeToggle();
            $('#comments_wrapper_additional_'+itemid).slideToggle();








        });

        $('.add-comment').on('click', function(){
            var itemid = $(this).attr('item-id');
            // $('.comment-form').css('display','flex');
            // $('.event-actions-footer').fadeToggle();
            $('#comments_form_'+itemid).css('display','flex');
            $('#event_actions_footer_'+itemid).fadeToggle();
        });
        $('.comment-form .comment-content .comment-text-wrapper form .btn-comment-wrapper .btn').on('click', function(){
            var itemid = $(this).attr('item-id');
            $('#comments_form_'+itemid).css('display','none');
            $('#event_actions_footer_'+itemid).fadeToggle();
        });
        //insert
            $('.comment-form .comment-content .comment-text-wrapper form').on('submit',function(e){
                e.preventDefault();
                var token = $(this).find('input[name=_token]').val();
                var comment = $(this).find('textarea[name=comment]').val();
                var userid = $(this).find('input[name=user_id]').val();
                var itemid = $(this).find('button[type=submit]').attr('item-id');
                $.ajax({
                    type: "post",
                    url: "submitcomment",
                    data: {'_token':token,'comment':comment,'item_id':itemid,'user_id':userid},
                    dataType: 'json',
                    success: function(data){
                        $('#comment_wrapper_'+itemid).append(data);
                        console.log(data);
                        $('textarea[name=comment]').val('');
                    },
                    error: function(data){
                        alert('error');
                    }
                });
            });

            
            //delete
            $(document).on('click','.delete_comment',function(){
                var id = $(this).attr('data-id');
                $.ajax({
                    type: "post",
                    url: "deletecomment",
                    data: {'comment_id':id},
                    dataType: 'json',
                    success: function(data){
                        $("#comment_"+id).parent().parent().parent().fadeOut();
                    },
                    error: function(data){
                        alert('error');
                    }
                });
            });
            //---


            //select
            $(document).on('click','.edit_comment',function(){
                var id = $(this).attr('data-id');
                var oldtext = $('#comment_'+id).text();
                var textbox = $(document.createElement('textarea')).attr({'id':'textarea_'+id,'name':'comment'}).val(oldtext);
                $('.dropdown[data-id="'+id+'"]').hide();
                var buttonedit = $(document.createElement('button')).attr({'id':'button_edit_'+id,'class':'edit_comment_btn','data-id':id}).text('Edit');
                $('#comment_'+id).parent().append(buttonedit);
                $('#comment_'+id).replaceWith(textbox);
            });
            //edit
            $(document).on('click','.edit_comment_btn',function(){
                var id = $(this).attr('data-id');
                var isi = $('#textarea_'+id).val();
                var text = $(document.createElement('p')).attr({
                        'id':'comment_'+id,
                        'class':'comment-text',
                        'data-id':id
                    }).text(isi);
            
                $.ajax({
                    type: "post",
                    url: "updatecomment",
                    dataType: 'json',
                    data: {
                            comment_value : isi,
                            comment_id : id
                        },
                    success: function(data){
                        $('.edit_comment_btn').hide();
                        $('.dropdown[data-id="'+id+'"]').show();
                        $('#textarea_'+id).replaceWith(text);
                        $('.dropdown-content').removeClass('show');
                    },
                    error: function(data){
                        alert('error');
                    }
                });

            });
            //---

            //like
            $('.icon-wrapper-center a.circle-icon-a').on('click',function(e){
                e.preventDefault();
                // var token = $(this).find('input[name=_token]').val();
                // var comment = $(this).find('textarea[name=comment]').val();
                var id = $(this).attr('data-id');
                // alert(id);
                $.ajax({
                    type: "post",
                    url: "like",
                    data: {
                        // '_token':token,
                        'type' : 'event',
                        'id' : id
                    },
                    dataType: 'json',
                    success: function(data){
                        $('#like_counter_'+id).replaceWith(data);
                        console.log(data);
                    },
                    error: function(data){
                        alert('error');
                    }
                });
            });

    });
</script>
@append