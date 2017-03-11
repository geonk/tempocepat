
@extends('dashboard.layout-dashboard')
<!-- @ if(Session::has('actusr')) -->
@section('dashboard-content')

          <style media="screen">
          .bg-green-1 {
              background-color: #ffde50;
          }
          </style>

        <!-- <div class="content">
            <h1>Dashboard { !! Session::get('actusr') !!}</h1>
        </div> -->

            <!-- Content Header (Page header) -->
            <section class="content-header">
              <h1>
                Dashboard
                <!-- <small>Kilasan Informasi Bulan Ini</small> -->
              </h1>
              <ol class="breadcrumb">
                <li><a href="dashboard"><i class="fa fa-dashboard"></i> Beranda</a></li>
                <li class="active">Dashboard</li>
              </ol>
            </section>

            <!-- Main content -->
            <section class="content">
              <!-- Small boxes (Stat box) -->
              <div class="row">
                <div class="col-lg-3 col-xs-6">
                  <!-- small box -->
                  <div class="small-box bg-green-1">
                    <div class="inner">
                      <h3>{!! e($articlecount) !!}</h3>

                      <p>Articles</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-file ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">Explore <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                  <!-- small box -->
                  <div class="small-box bg-green-2">
                    <div class="inner">
                      <h3>{!! e($storecount) !!}<sup style="font-size: 20px"></sup></h3>

                      <p>Stores</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-shopping-bag ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">Explore <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                  <!-- small box -->
                  <div class="small-box bg-green-3">
                    <div class="inner">
                      <h3>{!! e($musiciancount) !!}</h3>

                      <p>Musicians</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-music ion ion-person-add"></i>
                    </div>
                    <a href="#" class="small-box-footer">Explore <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                  <!-- small box -->
                  <div class="small-box bg-green-4">
                    <div class="inner">
                      <h3>{!! e($usercount) !!}</h3>

                      <p>Users</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-user ion ion-pie-graph"></i>
                    </div>
                    <a href="#" class="small-box-footer">Explore <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
              </div>
              <!-- /.row -->
              <!-- Main row -->
              <div class="row">
                <!-- Left col -->
                <section class="col-lg-7 connectedSortable">

                  <!-- Chat box -->
                  <div class="box box-success">
                    <div class="box-header">
                      <i class="fa fa-files-o"></i>

                      <h3 class="box-title">History of Activities</h3>
                      <!--
                      <div class="box-tools pull-right" data-toggle="tooltip" title="Status">
                        <div class="btn-group" data-toggle="btn-toggle">
                          <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i>
                          </button>
                          <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>
                        </div>
                      </div>
                      -->
                    </div>
                    <div class="box-body chat" id="chat-box">
                      <!-- chat item -->

                          @foreach($logs as $log)

                      <div class="item">
                        <img src="{{URL::to('/')}}/img/profiles/{{ e($log->image) }}" alt="user image" class="online">

                        <p class="message">
                          <a href="#" class="name">
                            <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> {{ e($log->updated_at) }}</small>
                            {{ e($log->name) }}
                          </a>
                          {{ e($log->text) }}
                        </p>
                        <!--
                        <div class="attachment">
                          <h4>Attachments:</h4>

                          <p class="filename">
                            Theme-thumbnail-image.jpg
                          </p>

                          <div class="pull-right">
                            <button type="button" class="btn btn-primary btn-sm btn-flat">Open</button>
                          </div>
                        </div>
                        <!- /.attachment -->
                      </div>

                          @endforeach

                      <!-- /.item ->
                      <!- chat item ->
                      <div class="item">
                        <img src="{ {URL::asset('bower_components/AdminLTE/dist/img/user3-128x128.jpg')}}" alt="user image" class="offline">

                        <p class="message">
                          <a href="#" class="name">
                            <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:15</small>
                            Alexander Pierce
                          </a>
                          I would like to meet you to discuss the latest news about
                          the arrival of the new theme. They say it is going to be one the
                          best themes on the market
                        </p>
                      </div>
                      <!- /.item -->
                      <!-- chat item ->
                      <div class="item">
                        <img src="{ {URL::asset('bower_components/AdminLTE/dist/img/user2-160x160.jpg')}}" alt="user image" class="offline">

                        <p class="message">
                          <a href="#" class="name">
                            <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:30</small>
                            Susan Doe
                          </a>
                          I would like to meet you to discuss the latest news about
                          the arrival of the new theme. They say it is going to be one the
                          best themes on the market
                        </p>
                      </div>
                      <!- /.item ->
                      <!- chat item ->
                      <div class="item">
                        <img src="{ {URL::asset('bower_components/AdminLTE/dist/img/user2-160x160.jpg')}}" alt="user image" class="offline">

                        <p class="message">
                          <a href="#" class="name">
                            <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:30</small>
                            Susan Doe
                          </a>
                          I would like to meet you to discuss the latest news about
                          the arrival of the new theme. They say it is going to be one the
                          best themes on the market
                        </p>
                      </div>
                      <!- /.item ->
                    </div>
                    <!- /.chat -->
                    <!--
                    <div class="box-footer">
                      <div class="input-group">
                        <input class="form-control" placeholder="Type message...">

                        <div class="input-group-btn">
                          <button type="button" class="btn btn-success"><i class="fa fa-plus"></i></button>
                        </div>
                      </div>
                    </div>
                    -->
                  </div>
                  </div>
                  <!-- /.box (chat box) -->

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
                        TempoCepat in Data
                      </h3>
                    </div>
                    <div id="box-world-map" class="box-body">
                      <div id="world-map">
                        <a href="/profil" class="btn btn-primary">View TempoCepat in Data</a>
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
