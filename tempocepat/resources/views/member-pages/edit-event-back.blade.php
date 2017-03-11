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
                <!--
                @ if(Session::get('roleid') == 1 && $user->email != Session::get('actusr'))
                <li><a href="/daftaranggota"><i class="fa fa-files-o"></i> Daftar Anggota</a></li>
                <li class="active">Rincian Data Anggota</li>
                @ else
                <li class="active">Data Anda</li>
                @ endif
                -->
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
        {!! Form::open(
        array (
            'url'     => 'event/update',
            'method'=> 'post',
            'files'    => true,
            'class'    => 'form',
            'id'     => 'form-add-post',
            'role'    => 'form'
        )) !!}
        <div class="box-body">
            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                {!! Form::label('title', 'Event Title', ['class'=>'']) !!}
                <div class="">
                    {!! Form::text('title', $event->title, ['class'=>'form-control']) !!}
                {!! $errors->first('title', '
                    <p class="help-block error-text">
                        :message
                    </p>
                    ') !!}
                </div>
            </div>
            <div class="form-group{{ $errors->has('body_info') ? ' has-error' : '' }}">
                {!! Form::label('body_info', 'Body Info', ['class'=>'']) !!}
                <div class="">
                    {!! Form::text('body_info', $event->body_info, ['class'=>'form-control']) !!}
                {!! $errors->first('body_info', '
                    <p class="help-block error-text">
                        :message
                    </p>
                    ') !!}
                </div>
            </div>
            <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                {!! Form::label('image', 'Event Image', ['class'=>'']) !!}
      <br>
      <img src="{{URL::to('/')}}/assets/img/event/medium/{{ $event->image }}" alt="">
                <div class="">
                    {!! Form::file('image', null, ['class'=>'form-control']) !!}
                {!! $errors->first('image', '
                    <p class="help-block error-text">
                        :message
                    </p>
                    ') !!}
                </div>
            </div>
            {!! Form::hidden('users_id', 1, ['class'=>'form-control']) !!}
            {!! Form::hidden('users_role_id', 1, ['class'=>'form-control']) !!}
            {!! Form::hidden('filename', $event->image, ['class'=>'form-control']) !!}
      {!! Form::hidden('id', $event->id, ['class'=>'form-control']) !!}
        </div>
        <div class="box-footer">
            {!! Form::submit('Publish this Event', ['class'=>'btn btn-primary']) !!}
        </div>
        {!!Form::close() !!}

             <!-- @ if(Session::get('roleid') == 1 && $user->email != Session::get('actusr')) -->
                                   <div class="box-footer">
                                             {!! Form::open(array('url'=>
                                     'event/deleteinside', 'method'=>
                                     'POST', 'style'=>
                                     'display:inline;')) !!}
                                     <!-- , 'onSubmit'=>'return confirm("Apakah Anda yakin akan menghapus data ini?")')) !!} -->
                                     <div class="form-group" style="margin:0;">
                                         {!! Form::hidden('filename', $event->image) !!}
                                         {!! Form::token() !!}
                                         {!! Form::hidden('id', $event->id, array('class'=>
                                         'form-control')) !!}
                                         {!! Form::submit('Hapus Event Ini', array('class'=>
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