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


{{-- <div id="crop_wrapper">
  <img src="{{URL::to('/')}}/tempocepat/public/assets/img/oI750JKz_product_image.jpg">
  <div id="crop_div">
  </div>
</div> --}}

{{-- <form method="post" action="/musician/do_crop" onsubmit="return crop();">
                            {!! Form::token() !!}
                            <input type="hidden" name="musician_id" value="{{ e($musician->id) }}">
  <input type="hidden" value="" id="top" name="top">
  <input type="hidden" value="" id="left" name="left">
  <input type="hidden" value="" id="right" name="right">
  <input type="hidden" value="" id="bottom" name="bottom">
  <input type="submit" name="crop_image">
</form> --}}


 {{-- do_crop.php --}}
 


    <!--  -->

                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title"><i class="fa fa-edit"></i> Update Musician Data</h3>
                            </div>
                            {!! Form::open(array ('url' =>
                                    '/musician/update', 'method' =>
                                    'POST',
            'files' => true, 'role' => 'form',  'onsubmit' => 'return crop();' )) !!}
                            <div class="box-body">
                            {!! Form::token() !!}

                                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    {{-- <label for="">cover</label> --}}

                                    <div id="crop_wrapper">
                                    <img src="{{URL::to('/')}}/tempocepat/public/assets/img/garage/musician/cover/medium/{{ $musician->image_cover }}" alt="" />
                                     <div id="crop_div"></div>
                                     </div>

                                     <input type="file" name="image_cover" id="input-cover-img" class="overlay-btn" multiple="multiple" type="file"/>
                                     {{-- <div id="image-holder"></div> --}}
                                </div>

                                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    {{-- <label for="">image</label> --}}

                                    <div id="crop_wrapper_square" style="width:200px;min-height:200px;/**/">
                                    <img src="{{URL::to('/')}}/tempocepat/public/assets/img/garage/musician/logo/medium/{{ $musician->image }}" alt="" />
                                     <div id="crop_div_square"></div>
                                    </div>

                                     <input type="file" name="image" id="input-square-img" class="overlay-btn" multiple="multiple" type="file" />
                                </div>
                            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <label for="name">Name</label>
                                <input type="text" name="name" value="{{ e($musician->name) }}" class="form-control">
                            </div>
                            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <label for="">Description</label>
                                <textarea name="description" id="textarea_description" class="form-control my-editor" cols="90" rows="3">
                                    {!! e($musician->description) !!}
                                </textarea>
                            </div>
                            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <label for="genre">Genre</label>
                                <input type="text" name="genre" value="{{ e($musician->genre) }}" class="form-control">
                            </div>
                            <input type="hidden" name="id" value="{{ e($musician->id) }}">
                            <input type="hidden" name="filename" value="{{ e($musician->image) }}">
                            <input type="hidden" name="filename_cover" value="{{ e($musician->image_cover) }}">
                            </div>
                            <div class="box-footer">

                            <input type="hidden" value="" id="top" name="top">
                            <input type="hidden" value="" id="left" name="left">
                            <input type="hidden" value="" id="right" name="right">
                            <input type="hidden" value="" id="bottom" name="bottom">

                            <input type="hidden" value="" id="top_square" name="top_square">
                            <input type="hidden" value="" id="left_square" name="left_square">
                            <input type="hidden" value="" id="right_square" name="right_square">
                            <input type="hidden" value="" id="bottom_square" name="bottom_square">

                            <button type="submit" name="crop_image" class="btn btn-primary">Update Now</button>
                            </div>
                            {!! Form::close() !!}
                        </div>
                        <!--  -->


    <!-- -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">
                <i class="fa fa-file">
                </i>
                Upload New Song
            </h3>
        </div>
        <div class="box-body">
            <p>
              Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.
            </p>
            <a href="/music/create" class="btn">Create & Uplaod Now</a>
        </div>
    </div>
    <!-- -->

    <!-- -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">
                <i class="fa fa-file">
                </i>
                Your Songs
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
                            Description
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
                    @foreach($musics as $music)
                    <tr>
                        <td>
                            <img src="{{URL::to('/')}}/tempocepat/public/assets/img/garage/musician/logo/small/{{ $music->image }}" alt="">
                        </td>
                        <td>
                            {!! e($music->title) !!}
                        </td>
                        <td>
                            {!! e($music->description) !!}
                        </td>
                        <td>
                            Available
                        </td>
                        <td>
                            <span class="comment-timestamp">{!! date('F d, Y', strtotime($music->musics_created)) !!} <span class="orange-color">-</span> {!! date('G:i A', strtotime($music->musics_created)) !!}</span>
                        </td>
                        <td>
                            <span style="display: inline-block;">
                                {!!Form::open(array('url' =>
                                   '/music/'.$music->id.'/edit', 'method'=>
                                   'GET')) !!}
                                   {!!Form::submit('Sunting', array('class' =>
                                   'btn btn-warning','style'=>'')) !!}
                                   {!!Form::close() !!}
                            </span>
                            <span style="display: inline-block;">
                                {!!Form::open(array('url' =>
                                   '/music/delete/'.$music->id, 'method'=>
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
                            Description
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

<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/stylesheets/crop_style.css')}}">
<script src="{{URL::asset('assets/scripts/jquery-ui.js')}}"></script>
<script type="text/javascript">


// //*
// $("#input-cover-img").on('change', function () {
 
//         if (typeof (FileReader) != "undefined") {
 
//             var image_holder = $("#image-holder");
//             image_holder.empty();
 
//             var reader = new FileReader();
//             reader.onload = function (e) {
//                 $("<img />", {
//                     "src": e.target.result,
//                     "class": "thumb-image"
//                 }).appendTo(image_holder);
 
//             }
//             image_holder.show();
//             reader.readAsDataURL($(this)[0].files[0]);
//         } else {
//             alert("This browser does not support FileReader.");
//         }
//     });
// //*


    // var imgHeight = $('#crop_wrapper img').height();
    // $('#crop_wrapper').height() = imgHeight;
    // $('#crop_wrapper img').height() = imgHeight;

    $(function() {
      $( "#crop_div" ).draggable({ containment: "parent" });
      $( "#crop_div_square" ).draggable({ containment: "parent" });
    });

    $("#crop_div").mousedown(function() {
        document.getElementById("top").value='';
        document.getElementById("left").value='';
        document.getElementById("right").value='';
        document.getElementById("bottom").value='';
    });

    $("#crop_div_square").mousedown(function() {
        document.getElementById("top_square").value='';
        document.getElementById("left_square").value='';
        document.getElementById("right_square").value='';
        document.getElementById("bottom_square").value='';
    });
       
    function crop()
    {
      var posi = document.getElementById('crop_div');
      document.getElementById("top").value=posi.offsetTop;//()-290
      document.getElementById("left").value=posi.offsetLeft;
      document.getElementById("right").value=posi.offsetWidth;
      document.getElementById("bottom").value=posi.offsetHeight;

      var posi_square = document.getElementById('crop_div_square');
        document.getElementById("top_square").value=posi_square.offsetTop;
        document.getElementById("left_square").value=(posi_square.offsetLeft)-15;
        document.getElementById("right_square").value=posi_square.offsetWidth;
        document.getElementById("bottom_square").value=posi_square.offsetHeight;

      // alert(
      //   document.getElementById("top").value + ', ' + 
      //   document.getElementById("left").value  + ', ' + 
      //   document.getElementById("right").value  + ', ' + 
      //   document.getElementById("bottom").value
      // );

      alert(
        document.getElementById("top_square").value + ', ' + 
        document.getElementById("left_square").value  + ', ' + 
        document.getElementById("right_square").value  + ', ' + 
        document.getElementById("bottom_square").value
      );

      

      return true;
    }

  </script>



<script src="{{URL::asset('assets/scripts/tinymce/js/tinymce/tinymce.min.js')}}"></script>
{{-- <script src='//cdn.tinymce.com/4/tinymce.min.js'></script> --}}
{{-- <link rel='stylesheet prefetch' href='http://www.tinymce.com/css/codepen.min.css'>
    <script src="/vendor/laravel-filemanager/js/lfm.js"></script>

    <script>
        var cmsURL = editor_config.path_absolute + 'your-custom-route?field_name='+field_name+'&lang='+ tinymce.settings.language;
      if (type == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }
    </script> --}}


{{-- <script>
  tinymce.init({
    selector: '#textarea_description',
    height: 300,
  theme: 'modern',
  // menubar: true,
  plugins: [
    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
    'searchreplace wordcount visualblocks visualchars code fullscreen',
    'insertdatetime media nonbreaking save table contextmenu directionality',
    'emoticons template paste textcolor colorpicker textpattern imagetools'
  ],
  toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
  toolbar2: 'print preview media | forecolor backcolor emoticons',
  image_advtab: true,
  templates: [
    { title: 'Test template 1', content: 'Test 1' },
    { title: 'Test template 2', content: 'Test 2' }
  ],
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css'
  ]

  });
  </script> --}}

  <script>
  // tinymce.init({

  var editor_config = {
    path_absolute : "/",
    // selector: "textarea.my-editor",

    selector: '#textarea_description',
    height: 300,
    theme: 'modern',

    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
    relative_urls: false,
    file_browser_callback : function(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
      if (type == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.open({
        file : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no"
      });
    }
  };
    // });

  tinymce.init(editor_config);
</script>


{{-- <script> tinymce.init({
  selector: "textarea.my-editor",
  height: 500,
  theme: 'modern',
  plugins: [
    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
    'searchreplace wordcount visualblocks visualchars code fullscreen',
    'insertdatetime media nonbreaking save table contextmenu directionality',
    'emoticons template paste textcolor colorpicker textpattern imagetools'
  ],
  toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
  toolbar2: 'print preview media | forecolor backcolor emoticons',
  image_advtab: true,
  templates: [
    { title: 'Test template 1', content: 'Test 1' },
    { title: 'Test template 2', content: 'Test 2' }
  ],
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css'
  ]
 }); </script>
 --}}

<script>
$(document).ready(function() {
        $("#input-cover-img").on('change', function() {


      
        document.getElementById("top").value='';
        document.getElementById("left").value='';
        document.getElementById("right").value='';
        document.getElementById("bottom").value='';

        


          //Get count of selected files
          var countFiles = $(this)[0].files.length;
          var imgPath = $(this)[0].value;
          var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
          var image_holder = $("#crop_wrapper");
          // image_holder.empty();
          image_holder.find('img:first').remove();
          if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
            if (typeof(FileReader) != "undefined") {
              //loop for each file selected for uploaded.
              for (var i = 0; i < countFiles; i++) 
              {
                var reader = new FileReader();
                reader.onload = function(e) {
                  $("<img />", {
                    "src": e.target.result,
                    "class": "thumb-image"
                  }).appendTo(image_holder);
                }
                image_holder.show();
                reader.readAsDataURL($(this)[0].files[i]);
              }
            } else {
              alert("This browser does not support FileReader.");
            }
          } else {
            alert("Pls select only images");
          }
        });

        //---------------------------square
        $("#input-square-img").on('change', function() {


        document.getElementById("top_square").value='';
        document.getElementById("left_square").value='';
        document.getElementById("right_square").value='';
        document.getElementById("bottom_square").value='';

        


          //Get count of selected files
          var countFiles = $(this)[0].files.length;
          var imgPath = $(this)[0].value;
          var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
          var image_holder = $("#crop_wrapper_square");
          // image_holder.empty();
          image_holder.find('img:first').remove();
          if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {



            if (typeof(FileReader) != "undefined") {
              //loop for each file selected for uploaded.
              for (var i = 0; i < countFiles; i++) 
              {
                var reader = new FileReader();
                reader.onload = function(e) {
                  $("<img />", {
                    "src": e.target.result,
                    "class": "thumb-image"
                  }).appendTo(image_holder);

                  // console.log($("#crop_wrapper_square img").height() + ">>>>>>>>>>>>>>>");
                  //--------------------------
                  var selectedImgIm = $("#crop_wrapper_square img");
// alert(selectedImgIm.height());
if(selectedImgIm.height() < selectedImgIm.width()){
  image_holder.css({'min-width':'200px','height':'200px','width': 'auto !important','min-height':'0'});
  image_holder.find('img').css({'height':'200px','min-width':'auto','width':'auto','min-height':'200px', 'max-width':'unset'});
  newWidth = image_holder.find('img').width();
  image_holder.css({'width': newWidth});
  alert('landsapexxxx');
}else{
  image_holder.css({'width':'200px','min-height':'200px','min-width':'0','height':'auto'});
  image_holder.find('img').css({'max-width':'100%'});
  alert('portraitxxxxx');
}
                  //--------------------------

                }
                image_holder.show();


                reader.readAsDataURL($(this)[0].files[i]);

              }

                // alert($("#crop_wrapper_square img").height());
                
                //=======
              // var selectedImg = image_holder.find('img');
              // // alert($("#crop_wrapper_square img").height());
              // if(selectedImg.height() < selectedImg.width()){
              //   image_holder.css({'min-width':'200px','height':'200px','width':'0','min-height':'0'});
              //   // image_holder.find('img').css({'height':'200px','min-width':'auto','width':'auto','min-height':'200px', 'max-width':'unset'});
              //   // alert('landsape');
              // }else{
              //   image_holder.css({'width':'200px','min-height':'200px','min-width':'0','height':'0'});
              //   // image_holder.find('img').css({'max-width':'100%'});
              //   // alert('portrait');
              // }
              //=======

            } else {
              alert("This browser does not support FileReader.");
            }


          } else {
            alert("Pls select only images");
          }




              



        });
        //---------------------------------




      });
</script>


  @append
