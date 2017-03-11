@extends('dashboard.layout-dashboard')
<!-- @ if(Session::has('actusr')) -->
@section('dashboard-content')

          <style media="screen"></style>

        <!-- <div class="content">
            <h1>Dashboard {!! Session::get('actusr') !!}</h1>
        </div> -->

            <!-- Content Header (Page header) -->
            <section class="content-header">
              <h1>
                Developer Dashboard
                <!-- <small>Kilasan Informasi Bulan Ini</small> -->
              </h1>
              <ol class="breadcrumb">
                <li><a href="/dashboard"><i class="fa fa-dashboard"></i> Beranda</a></li>
                @if(Session::get('roleid') == 1 && $user->email != Session::get('actusr'))
                <li><a href="/daftaranggota"><i class="fa fa-files-o"></i> Daftar Anggota</a></li>
                <li class="active">Rincian Data Anggota</li>
                @else
                <li class="active">Data Anda</li>
                @endif
              </ol>
            </section>

            <!-- Main content -->
            <section class="content">

              <!-- Main row -->
              <div class="row">
                <!-- Left col -->
                <section class="col-lg-7 connectedSortable">

                          <!-- general form elements -->
                  <div class="box box-success">
                    <div class="box-header with-border">
                      <h3 class="box-title">Data Pribadi Anda</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <!-- <form role="form" action="dashboardmember/update" method="put" file="true"> -->
                              <!-- { !! Form::token() !!} -->
                              <!-- <input type="hidden" name="_token" value="{ { e($user->remember_token) }}"> -->
<!-- 
                              @ if(Session::get('roleid') == 1 && $user->email != Session::get('actusr'))
                                { !! Form::open(array ('url' =>
                                'dashboardmember/updateadmin', 'method' =>
                                'put','files'=>
                                true)) !!}
                              @ else -->
                                {!! Form::open(array ('url' =>
                                '/dashboard-data-member/update', 'method' =>
                                'post','files'=>
                                true)) !!}
                              {{-- @endif --}}

                      <div class="box-body">

                          {!! Form::token() !!}

                                <!--
                        <div class="form-group">
                          <label for="exampleInputEmail1">Email address</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputFile">File input</label>
                          <input type="file" id="exampleInputFile">

                          <!- <p class="help-block">Example block-level help text here.</p> ->
                        </div>
                              -->



                              <div class="form-group">
                                     <label for="fullname">Nama Lengkap</label>
                                     <!-- <small class="pull-right">Boleh dengan gelar</small> -->
                                     <input type="text" name="fullname" value="{{ e($user->fullname) }}" class="form-control">
                              </div>
                              <div class="form-group">
                                     <label for="tempat_lahir">Bulan Lahir</label>

                                     <input type="text" name="birthday_month" value="{{ e($user->birthday_month) }}" class="form-control">

                              </div>
                              <div class="form-group">
                                     <label for="tempat_lahir">Tahun Lahir</label>

                                     <input type="text" name="birthday_year" value="{{ e($user->birthday_year) }}" class="form-control">

                              </div>
                              <div class="form-group">
                                     <label for="tanggal_lahir">Tanggal Lahir</label>

                                     <input type="text" name="birthday_day" placeholder="1990-12-30" value="{{ e($user->birthday_day) }}" class="form-control">

                              </div>
                              <div class="form-group">
                                 <label for="name">Jenis Kelamin</label>

                                     <div class="radio-wrapper">
                                         <label class="radio checked">
                                              <input type="radio" name="jenis_kelamin_id" id="" value="1" checked/>
                                              <span>Laki-laki</span>
                                         </label>
                                         <label class="radio">
                                              <input type="radio" name="jenis_kelamin_id" id="" value="2" />
                                              <span>perempuan</span>
                                         </label>
                                     </div>

                              </div>
                              <!-- <div class="form-group">
                                     <label for="no_telp">No. Telepon</label>

                                     <input type="text" name="no_telp" value="{ { e($user->no_telp) }}" class="form-control">

                              </div> -->
                              <div class="form-group">
                                 <label for="alamat">Alamat Rumah</label>

                                     <input type="text" name="address" value="{{ e($user->address) }}" class="form-control">

                              </div>
                              <div class="form-group">
                                 <label for="alamat">Foto Diri</label>

                                     <img src="{{URL::to('/')}}/img/profiles/{{ e($user->image) }}" alt="" />

                                     <input type="file" id="profile-img" name="image"/>

                              </div>
                              <div class="form-group">
                                 <label for="email">Alamat E-Mail</label>

                                     <input type="text" name="email" value="{{ e($user->email) }}" class="form-control">

                              </div>
                              <div class="form-group">
                                         <label for="username">Username</label>
                                         <!-- <small class="pull-right">Singkat & jelas, akan digunakan sebagai pengidentifikasi anggota</small> -->

                                         <input type="text" name="name" value="{{ e($user->name) }}" class="form-control">

                              </div>
                              <div class="form-group">
                                         <label for="password">Sandi</label>

                                         <input type="password" name="password" value="" class="form-control" disabled>

                              </div>
                              <div class="form-group">
                                         <label for="password_confirmation">Konfirmasi Sandi</label>

                                     <input type="password" name="password_confirmation" value="" class="form-control" disabled>

                              </div>
                              <!-- <input type="hidden" name="role_id" value="2"> -->

                              <input type="hidden" name="filename" value="{{ e($user->image) }}">

                              <input type="hidden" name="id" value="{{ e($user->id) }}">



                        <!-- <div class="checkbox">
                          <label>
                            <input type="checkbox"> Check me out
                          </label>
                        </div> -->
                      </div>
                      <!-- /.box-body -->

                      <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Perbaharui</button>
                      </div>


                     <!-- </form> -->
             {!! Form::close() !!}

             <!-- @ if(Session::get('roleid') == 1 && $user->email != Session::get('actusr')) -->
                                   <div class="box-footer">
                                             {!! Form::open(array('url'=>
                                     'user/deleteinside', 'method'=>
                                     'POST', 'style'=>
                                     'display:inline;')) !!}
                                     <!-- , 'onSubmit'=>'return confirm("Apakah Anda yakin akan menghapus data ini?")')) !!} -->
                                     <div class="form-group" style="margin:0;">
                                         {!! Form::hidden('filename', $user->image) !!}
                                         {!! Form::token() !!}
                                         {!! Form::hidden('id', $user->id, array('class'=>
                                         'form-control')) !!}
                                         {!! Form::submit('Hapus Anggota Ini', array('class'=>
                                         'btn btn-danger delete-confirm', 'style'=>'color:white;')) !!}
                                     </div>
                                     {!! Form::close() !!}
                                 </div>
                                 <!-- @ endif -->


                  </div>
                  <!-- /.box -->

                </section>
                <!-- /.Left col -->
                <!-- right col (We are only adding the ID to make the widgets sortable)-->
                <section class="col-lg-5 connectedSortable">

                  <!-- Map box -->
                  <div class="box box-solid">
                    <div class="box-header">
                      <!-- tools box ->
                      <div class="pull-right box-tools">
                        <button type="button" class="btn btn-primary btn-sm daterange pull-right" data-toggle="tooltip" title="Date range">
                          <i class="fa fa-calendar"></i></button>
                        <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                          <i class="fa fa-minus"></i></button>
                      </div>
                      <!- /. tools -->

                      <i class="fa fa-files-o"></i>

                      <h3 class="box-title">
                        Profil Koperasi
                      </h3>
                    </div>
                    <div id="box-world-map" class="box-body" style="background-color: rgb(184, 230, 136);">
                      <div id="world-map" style="height: 313px; width: 100%;">
                        <a href="/profil" class="btn btn-primary">Lihat Profil Koperasi</a>
                      </div>
                    </div>
                    <!-- /.box-body-->
                    <!--
                    <div class="box-footer no-border">
                      <div class="row">
                        <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                          <div id="sparkline-1"></div>
                          <div class="knob-label">Visitors</div>
                        </div>
                        <!-- ./col ->
                        <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                          <div id="sparkline-2"></div>
                          <div class="knob-label">Online</div>
                        </div>
                        <!-- ./col ->
                        <div class="col-xs-4 text-center">
                          <div id="sparkline-3"></div>
                          <div class="knob-label">Exists</div>
                        </div>
                        <!-- ./col ->
                      </div>
                      <!-- /.row ->
                    </div>
                    -->
                  </div>
                  <!-- /.box -->



                </section>
                <!-- right col -->
              </div>
              <!-- /.row (main row) -->

            </section>
            <!-- /.content -->

@stop
<!-- @ endif -->