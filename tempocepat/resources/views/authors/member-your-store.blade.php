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
    <!--  -->
                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title"><i class="fa fa-edit"></i> Update Your Store</h3>
                            </div>
                            {!! Form::open(array ('url' =>
                                    '/store/update', 'method' =>
                                    'POST',
            'files' => true, 'role' => 'form')) !!}
                            <div class="box-body">
                            {!! Form::token() !!}

                                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    {{-- <label for="">cover</label> --}}
                                    <img src="{{URL::to('/')}}/tempocepat/public/assets/img/market/store/cover/medium/{{ $store->image_cover }}" alt="" />
                                     <input type="file" name="image_cover" id="profile-img" class="overlay-btn" />
                                </div>

                                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    {{-- <label for="">image</label> --}}
                                    <img src="{{URL::to('/')}}/tempocepat/public/assets/img/market/store/logo/medium/{{ $store->image }}" alt="" />
                                     <input type="file" name="image" id="profile-img" class="overlay-btn" />
                                </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <label for="name">Name</label>
                                <input type="text" name="name" value="{{ e($store->name) }}" class="form-control">
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <label for="slogan">Slogan</label>
                                <input type="text" name="slogan" value="{{ e($store->slogan) }}" class="form-control">
                            </div>
                            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <label for="description">Description</label>
                                <textarea name="description" id="" cols="90" rows="3">
                                    {!! e($store->description) !!}
                                </textarea>
                            </div>
                            <input type="hidden" name="id" value="{{ e($store->id) }}">
                            <input type="hidden" name="filename" value="{{ e($store->image) }}">
                            <input type="hidden" name="filename_cover" value="{{ e($store->image_cover) }}">
                            </div>
                            </div>
                            <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Update Store Data</button>
                            </div>
                            {!! Form::close() !!}
                        {{-- </div> --}}
                        <!--  -->


    <!-- -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">
                <i class="fa fa-file">
                </i>
                Upload New Product
            </h3>
        </div>
        <div class="box-body">
            <p>
              Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.
            </p>
            <a href="/product/create" class="btn">Create & Upload Now</a>
        </div>
    </div>
    <!-- -->

    <!-- -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">
                <i class="fa fa-file">
                </i>
                Your Products
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
                                   '/product/'.$product->
                                   id.'/edit', 'method'=>
                                   'GET')) !!}
                                   {!!Form::submit('Sunting', array('class' =>
                                   'btn btn-warning','style'=>'')) !!}
                                   {!!Form::close() !!}
                            </span>
                            <span style="display: inline-block;">
                                {!!Form::open(array('url' =>
                                   '/product/delete/'.$product->id, 'method'=>
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
