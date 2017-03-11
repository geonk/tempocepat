@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" id="dashboard-member">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading" id="panel-heading-dashboard-member">
                    
                </div>

                <div class="panel-body panel-body-padding" id="panel-body-dashboard-member">
                    <div class="image-wrapper">
                        <img src="assets/img/profile1.jpg" alt="">
                        <!-- <img src="http://graph.facebook.com/{ { Auth::user()->facebook_id }}/picture?type=large" alt=""> -->
                    </div>
                    <div class="profile-data-wrapper">
                        <!-- <h2>Elizabeth Abigail</h2>
                        <span class="email">elie.abigail@ gmail.com</span> -->
                        <h2>{!! Auth::user()->name !!}</h2>
                        <span class="email">{!! Auth::user()->email !!}</span>
                    </div>
                </div>

                <!--<div class="panel-body"></div>-->

                <div class="panel-footer" id="panel-footer-dashboard-member">
                    Copyright TempoCepat 2016 - <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection