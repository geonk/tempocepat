@extends('layouts.app')
@section('content')
<style>
  .box-body div div table tbody tr td span form input.btn{
    margin: 2px;
  }
</style>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li>
					<a href="{{ url('/dashboard') }}">Dashboard</a>
				</li>
				<li class="active">{{ $title }}</li>
			</ul>
			<div class="panel panel-default">
				<div class="panel-heading" id="">
					<h2 class="panel-title">Your Profile</h2>
				</div>
				<div class="panel-body">
					<div id="sidebar-wrapper" class="">
						<ul class="sidebar-nav">
							<li>
								<a href="/dashboard/data"><i class="fa fa-user"></i> Profile</a>
							</li>
							<li>
								<a href="/dashboard/data/edit"><i class="fa fa-edit"></i> Profile Edit</a>
							</li>
							<li>
								<a href="/dashboard/events"><i class="fa fa-star"></i> Participated Events</a>
							</li>
							<li>
								<a href="/dashboard/wishlist"><i class="fa fa-shopping-cart"></i> Wishlist</a>
							</li>
							<li>
								<a href="/dashboard/playlist"><i class="fa fa-music"></i> Playlist</a>
							</li>
						</ul>
						<h5>Your Menus</h5>
						<ul class="sidebar-nav">
							<li>
								<a href="/dashboard/your_events"><i class="fa fa-check"></i> Your Events</a>
							</li>
							<li>
								<a href="/dashboard/your_store/{{ e($user->stores_slug) }}"><i class="fa fa-check"></i> Your Store</a>
							</li>
							<li>
								<a href="/dashboard/your_musician/{{ e($user->musicians_slug) }}"><i class="fa fa-check"></i> Your Musician</a>
							</li>
						</ul>
						<h5>Additional Menu</h5>
						<ul class="sidebar-nav">
							<li>
								<a href="/dashboard/additional"><i class="fa fa-plus"></i> Additional</a>
							</li>
						</ul>
					</div>
					
					@yield('member-content')

				</div>
                <div class="panel-footer" id="panel-footer-dashboard-member">
                    Copyright TempoCepat 2016 - <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-instagram"></i></a>
                </div>
			</div>
		</div>
	</div>
</div>
@endsection
