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
                Wishlist
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
                            Name
                        </th>
                        <th>
                            Price
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
                    @foreach($products as $product)
                    <tr>
                        <td>
                            <img src="{{URL::to('/')}}/tempocepat/public/assets/img/market/product/small/1/{{ $product->image }}" alt="">
                        </td>
                        <td>
                            {!! e($product->name) !!}
                        </td>
                        <td>
                            {!! e($product->price) !!}
                        </td>
                        <td>
                            Available
                        </td>
                        <td>
                            <span class="comment-timestamp">{!! date('F d, Y', strtotime($product->created_at)) !!} <span class="orange-color">-</span> {!! date('G:i A', strtotime($product->created_at)) !!}</span>
                        </td>
                        <td>
                            <span style="display: inline-block;">
                                {!!Form::open(array('url' =>
                                   '/editwishlist/'.$product->
                                   id, 'method'=>
                                   'GET')) !!}
                                   {!!Form::submit('Sunting', array('class' =>
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
                            Name
                        </th>
                        <th>
                            Price
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
