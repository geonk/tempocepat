
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
                <section class="col-lg-12 connectedSortable">

                          <!-- general form elements -->
                  <div class="box box-success">
                    <div class="box-header with-border">
                      <h3 class="box-title">List Store</h3>
                    </div>
                    
                      <div class="box-body">

                          <table class="table table-bordered table-striped" id="example1">
                <thead>
                    <tr>
                        <th>
                            Image
                        </th>
                        <th>
                            Title
                        </th>
                        <th>
                            Article
                        </th>
                        <th>
                            Time
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($listarticle as $article)
                    <tr>
                        <td>
                            <img src="{{URL::to('/')}}/tempocepat/public/assets/img/blog/small/{{ $article->image }}"/>
                        </td>
                        <td>
                            {!! e($article->title) !!}
                        </td>
                        <td>
                            {!! e($article->article) !!}
                        </td>
                        <td>
                            <span class="comment-timestamp">{!! date('F d, Y', strtotime($article->created_at)) !!} <span class="orange-color">-</span> {!! date('G:i A', strtotime($article->created_at)) !!}</span>
                        </td>
                        <td>
                            <span style="display: inline-block;">
                                {!!Form::open(array('url' =>
                                   '/blog/'.$article->id.'/edit', 'method'=>
                                   'GET')) !!}
                                   {!!Form::submit('Sunting', array('class' =>
                                   'btn btn-warning','style'=>'')) !!}
                                   {!!Form::close() !!}
                            </span>
                            <span style="display: inline-block;">
                                {!!Form::open(array('url' =>
                                   '/blog/delete/'.$article->id, 'method'=>
                                   'GET')) !!}
                                   {!!Form::submit('Hapus', array('class' =>
                                   'btn btn-warning','style'=>'')) !!}
                                   {!!Form::close() !!}
                            </span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>
                            Image
                        </th>
                        <th>
                            Title
                        </th>
                        <th>
                            Article
                        </th>
                        <th>
                            Time
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                </tfoot>
            </table>

                      </div>
                      <!-- /.box-body -->

                      <div class="box-footer">
                      </div>

                  </div>
                  <!-- /.box -->

                </section>
                <!-- /.Left col -->
                
                </div>

            </section>
            <!-- /.content -->

@stop
<!-- @ endif -->

@section('additional')
<script src="{{URL::asset('assets/stylesheets/AdminLTE/plugins/datatables/jquery.dataTables.min.js')}}">
</script>
<script src="{{URL::asset('assets/stylesheets/AdminLTE/plugins/datatables/dataTables.bootstrap.min.js')}}">
</script>
<script>
$(function () {
    $("#example1").DataTable();
});
</script>
@append
