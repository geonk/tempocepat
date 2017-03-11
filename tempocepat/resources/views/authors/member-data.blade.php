@extends('authors.member-layout')
@section('member-content')

					<div id="page-content-wrapper" class="">
						<!--  -->
						<div class="box">
							<div class="box-header with-border">
								<h3 class="box-title"><i class="fa fa-file"></i> Data Pribadi Anda</h3>
	                    	</div>
	                    	<div class="box-body">
								<div class="row-data">
									<img src="{{URL::to('/')}}/img/profiles/{{ e($user->image) }}" alt="" />
								</div>
								<div class="row-data">
									<label for="">Username</label>
									<span class="data">{!! e($user->name) !!}</span>
								</div>
								<div class="row-data">
									<label for="">Email</label>
									<span class="data">{!! e($user->email) !!}</span>
								</div>
								<div class="row-data">
									<label for="">Full Name</label>
									<span class="data">{!! e($user->fullname) !!}</span>
								</div>
								<div class="row-data">
									<label for="">Sex Type</label>
									<span class="data">{!! e($user->sex_type) !!}</span>
								</div>
								<div class="row-data">
									<label for="">Birth Day</label>
									<span class="data">{!! e($user->birthday_day) !!}-{!! e($user->birthday_month) !!}-{!! e($user->birthday_year) !!}</span>
								</div>
								<div class="row-data">
									<label for="">Address</label>
									<span class="data">{!! e($user->address) !!}</span>
								</div>
	                    	</div>
                  		</div>
						<!--  -->
					</div>
					<div id="ads-wrapper" class="">
						<img src="../assets/img/ads6.jpg" alt="">
					</div>

@endsection
