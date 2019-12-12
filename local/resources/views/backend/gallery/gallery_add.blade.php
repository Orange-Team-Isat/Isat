@extends('layout.main')

@section('styles_link')
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/pages/data-table/css/buttons.dataTables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}">
    <script src="{{asset('assets/ckeditor/ckeditor.js')}}"></script>
@endsection
@section('styles')
  <style>
    .short{
      width: 94%;
    }
  </style>
@endsection
@section('content')
<!-- Page-body start -->
  <div class="page-body">
    <div class="page-body">
        <h4>&nbsp;<i class="fa fa-chevron-circle-right"></i>&nbsp;จัดการข้อมูลอัลบั้มภาพ</h4>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card_head_modify">
                        <span class="pull-left">เพิ่มข้อมูลอัลบั้มภาพ</span>
                        <div class="pull-right">
                            <a href="{{ url('backend') }}">
                                <button class="btn btn-primary btn-mini btn-round waves-effect waves-light mt-1"><i class="fa fa-arrow-circle-left"></i>กลับไปหน้าจัดการ</button>
                            </a>
                        </div>
                    </div>
                   
                    <form action="{{(!empty($gallery_list) ? url('managegallery/update_gallery') : url('managegallery/store_gallery'))}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="card-block pt-0">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-right">หัวข้ออัลบั้มภาพ</label>
                            <div class="col-sm-4">
                                <input type="text" name="gallery_title_th" class="form-control" placeholder="หัวข้ออัลบั้มภาพภาษาไทย" value="{{ (!empty($gallery_list) ? $gallery_list->gallery_title_th: '') }}">
                                <input type="hidden" required name="gallery_id" value="{{ (!empty($gallery_list) ? $gallery_list->gallery_id : '') }}">
                            </div>
                            <div class="col-sm-4">
                                <input type="text" name="gallery_title_en" class="form-control" placeholder="หัวข้ออัลบั้มภาพภาษาอังกฤษ" value="{{ (!empty($gallery_list) ? $gallery_list->gallery_title_en: '') }}">
                                <input type="hidden" required name="gallery_id" value="{{ (!empty($gallery_list) ? $gallery_list->gallery_id : '') }}">
                            </div>
                        </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-right">ภาพปกอัลบั้ม</label>
                            <div class="col-sm-4">
                                <input type="file" name="gallery_index" class="form-control" placeholder="ภาพปกอัลบั้ม" value="">
                                @if(!empty($gallery_list) && !empty($gallery_list->gallery_index))
                                <img src="<?php echo asset('local/public/gallery/').'/'.$gallery_list->gallery_index; ?>" width="300px" />
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-right">รายละเอียด</label>
                            <div class="col-sm-4">
                                <textarea name="gallery_detail_th" id="gallery_detail_th" rows="10" cols="80">{{ (!empty($gallery_list) ? $gallery_list->gallery_detail_th : '') }}</textarea>
                            </div>
                            <div class="col-sm-4">
                                <textarea name="gallery_detail_en" id="gallery_detail_en" rows="10" cols="80">{{ (!empty($gallery_list) ? $gallery_list->gallery_detail_en : '') }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-right">วันที่</label>
                            <div class="col-sm-4">
                                <input type="date" name="gallery_date" class="form-control" placeholder="วันที่" value="{{ (!empty($gallery_list) ? $gallery_list->gallery_date : '') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-right">ภาพอัลบั้ม</label>
                            <div class="col-sm-10">
                                <input type="file" name="gallery_image[]" multiple class="form-control" >
                            </div>

                            <div class="row" style="margin-top: 20px;">
                            @if(!empty($gallery_list))
                                <?php $image = DB::table('image')->where('image_ref','LIKE',$gallery_list->gallery_ref)->get(); ?>
                                @if(!empty($image))
                                @foreach ($image as $_image)
                                <div class="col-md-3 mt-3">
                                <img src="<?php echo asset('local/public/gallery/').'/'.$_image->image_file; ?>" width="100%" />
                                <a href="{{ url('manageimage/del/'.$_image->image_id.'/'.$gallery_list->gallery_id) }}"><i class="btn btn-warning fa fa-trash" style="position: absolute; margin-left: -52px;"></i></a>
                                </div>
                                @endforeach
                                @endif
                            @endif
                            </div>
                            
                        </div>
                        
                    </div>
                        
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-success form-control">Save</button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!-- Page-body end -->
@endsection
@section('javascripts')
<script src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js')  }}"></script>
  <script src="{{ asset('bower_components/datatables.net-buttons/js/dataTables.buttons.min.js')  }}"></script>
  <script src="{{ asset('bower_components/datatables.net-buttons/js/buttons.print.min.js')  }}"></script>
  <script src="{{ asset('bower_components/datatables.net-buttons/js/buttons.html5.min.js')  }}"></script>
  <script src="{{ asset('bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js')  }}"></script>
  <script src="{{ asset('bower_components/datatables.net-responsive/js/dataTables.responsive.min.js')  }}"></script>
  <script src="{{ asset('bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')  }}"></script>
  <script>
      $(document).ready(function(){
        $('#table_data').DataTable({
            });
        });
        function addlist(id) {
            var ck_arr = $("input[name='list[]']").map(function(){
            return $(this).val();}).get();
            var ture_ck = 0;
            for (let index = 0; index < ck_arr.length; index++) {
                if (ck_arr[index] == id) {
                    var ture_ck = 1;
                }
            }
            if (ture_ck == 0) {
                var html_model = "<div id=\""+id+"\" class=\"col-md-2 mt-2\">"
                                    +"<input type=\"text\" class=\"form-control\" readonly name=\"list[]\" value=\""+id+"\">"
                                +"</div>";
                $("#main_key").append(html_model);
            }else{
                $("#"+id+"").remove();
            }
        }
  </script>
  <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'gallery_detail_th' )
                CKEDITOR.replace( 'gallery_detail_en' );
            </script>
@endsection


