@extends('authors.member-layout')
@section('member-content')

					<div id="page-content-wrapper" class="">
						<!--  -->
						<div class="box">
							<div class="box-header with-border">
								<h3 class="box-title"><i class="fa fa-edit"></i> Ubah Data Pribadi Anda</h3>
	                    	</div>
							{!! Form::open(array ('url' =>
	                                '/dashboard', 'method' =>
	                                'put')) !!}
							<div class="box-body">
							{!! Form::token() !!}

								<div class="form-group">
									{{-- <label for="">Profile Photo</label> --}}
									<img src="{{URL::to('/')}}/img/profiles/{{ e($user->image) }}" alt="" />
                                     <input type="file" name="image" id="profile-img" class="overlay-btn" />
								</div>
								<div class="form-group">
									<label for="">Username</label>
								<input type="text" name="name" value="{{ e($user->name) }}" class="form-control">
								</div>
								
							<div class="form-group">
								<label for="">Email</label>
								<input type="text" name="email" value="{{ e($user->email) }}" class="form-control">
							</div>
								
							<div class="form-group">
								<label for="angsuran_ke">Fullname</label>
								<input type="text" name="fullname" value="{{ e($user->fullname) }}" class="form-control">
							</div>
								<div class="form-group">
									<label for="">Sex Type</label>
								<input type="text" name="sex_type" value="{{ e($user->sex_type) }}" class="form-control">
								</div>
								<div class="form-group">
									<label for="">Birth Day</label>
								<input type="text" name="birthday_day" value="{{ e($user->birthday_day) }}-{{ e($user->birthday_month) }}-{{ e($user->birthday_year) }}" class="form-control">
								</div>
								<div class="form-group">
									<label for="">Address</label>
								<input type="text" name="address" value="{{ e($user->address) }}" class="form-control">
								</div>
							<input type="hidden" name="id" value="{{ e($user->id) }}">
							</div>
							<div class="box-footer">
							<button type="submit" class="btn btn-primary">Ubah Data Angsuran</button>
							</div>
	             			{!! Form::close() !!}
                  		</div>
						<!--  -->
					</div>
					<div id="ads-wrapper" class="">
						<img src="../../assets/img/ads6.jpg" alt="">
					</div>
				
@endsection
