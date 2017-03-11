@extends('authors.member-layout')
@section('member-content')
<style>
    .nav-tabs li{
        width: 50%;
        text-align: center;
    }
    .nav-tabs .active{
        font-weight: bold;
    }
    .nav-tabs .active a{
        border-top: 3px solid #f16621 !important;
        border-bottom: none !important;
        padding-top: 9px !important;
    }
    .tab-content{
        padding: 25px;
    }
</style>
<div class="" id="page-content-wrapper-wide">
    <!-- -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">
                <i class="fa fa-file">
                </i>
                Additional Features
            </h3>
        </div>
        <div class="box-body">
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active">
                    <a href="#store" aria-controller="store" role="tab" data-toggle="tab">Store</a>
                </li>
                <li role="presentation" class="">
                    <a href="#musician" aria-controller="musician" role="tab" data-toggle="tab">Musician</a>
                </li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="store">
                    <p>
                      Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.
                      Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.
                      Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.
                    </p>
                    <a href="/store/create" class="btn">Create a Store Now</a>
                </div>
                <div role="tabpanel" class="tab-pane" id="musician">
                    <p>
                      Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.
                      Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.
                    </p>
                    <a href="/musician/create" class="btn">Create a Musician Now</a>
                </div>
            </div>
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
