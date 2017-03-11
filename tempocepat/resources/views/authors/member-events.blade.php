@extends('authors.member-layout')
@section('member-content')
<style>
    table tbody tr td{
        /*display: flex;*/
        /*align-items: center;*/
        vertical-align: middle !important;
    }
    table tbody tr td >*{
    }
    table tbody tr td img{
        height: 60px;
        width: auto;
    }
</style>
<div class="" id="page-content-wrapper-wide">
    <!-- -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">
                <i class="fa fa-file">
                </i>
                Events
            </h3>
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
                            More Info
                        </th>
                        <th>
                            Status
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
                    @foreach($events as $event)
                    <tr>
                        <td>
                            <img src="{{URL::to('/')}}/tempocepat/public/assets/img/event/small/{{ $event->image }}"/>
                        </td>
                        <td>
                            {!! e($event->title) !!}
                        </td>
                        <td>
                            {!! e($event->body_info) !!}
                        </td>
                        <td>
                            Available
                        </td>
                        <td>
                            <span class="comment-timestamp">{!! date('F d, Y', strtotime($event->created_at)) !!} <span class="orange-color">-</span> {!! date('G:i A', strtotime($event->created_at)) !!}</span>
                        </td>
                        <td>
                            <span style="display: inline-block;">
                                {!!Form::open(array('url' =>
                                   '/editevent/'.$event->
                                   id, 'method'=>
                                   'GET')) !!}
                                   {!!Form::submit('Remove', array('class' =>
                                   'btn btn-danger','style'=>'')) !!}
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
                            More Info
                        </th>
                        <th>
                            Status
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
    </div>
    <!-- -->
    <!-- -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">
                <i class="fa fa-file">
                </i>
                Create New Events
            </h3>
        </div>
        <div class="box-body">
            <p>
              Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.
            </p>
            <a href="/event/create" class="btn">Create Now</a>
        </div>
    </div>
    <!-- -->
</div>
@endsection

@section('additional')
<!--
<link rel="stylesheet" href="{ {URL::asset('assets/stylesheets/AdminLTE/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{ {URL::asset('assets/stylesheets/AdminLTE/plugins/datatables/dataTables.bootstrap.css')}}">
-->
<!-- jQuery 2.2.0 -->
<!-- <script src="{ {URL::asset('assets/stylesheets/AdminLTE/plugins/jQuery/jQuery-2.2.0.min.js')}}"></script> -->
<!-- DataTables -->
<!-- DataTables -->
<script src="{{URL::asset('assets/stylesheets/AdminLTE/plugins/datatables/jquery.dataTables.min.js')}}">
</script>
<script src="{{URL::asset('assets/stylesheets/AdminLTE/plugins/datatables/dataTables.bootstrap.min.js')}}">
</script>
<script>
    $(function () {
  $("#example1").DataTable();
    //     $('#example2').DataTable({
    //       "paging": true,
    //       "lengthChange": false,
    //       "searching": false,
    //       "ordering": true,
    //       "info": true,
    //       "autoWidth": false
    //     });
});
</script>
@append
