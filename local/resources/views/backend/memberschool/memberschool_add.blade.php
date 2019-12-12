@extends('layout.main')

@section('styles_link')
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/pages/data-table/css/buttons.dataTables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}">
    <!-- <script src="{{asset('assets/ckeditor/ckeditor.js')}}"></script> -->
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
        <h4>&nbsp;<i class="fa fa-chevron-circle-right"></i>&nbsp;จัดการข้อมูลโรงเรียน</h4>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card_head_modify">
                        <span class="pull-left">เพิ่มข้อมูลโรงเรียน</span>
                        <div class="pull-right">
                            <a href="{{ url('backend') }}">
                                <button class="btn btn-primary btn-mini btn-round waves-effect waves-light mt-1"><i class="fa fa-arrow-circle-left"></i>กลับไปหน้าจัดการ</button>
                            </a>
                        </div>
                    </div>
                   
                    <form action="{{(!empty($memberschool_list) ? url('manageschool/update_school') : url('manageschool/store_school'))}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="card-block pt-0">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-right">School Name</label>
                            <div class="col-sm-4">
                                <input type="texe" name="school_name_th" class="form-control" placeholder="ชื่อโรงเรียนภาษไทย" value="{{ (!empty($memberschool_list) ? $memberschool_list->school_name_th : '') }}">
                            </div>
                            <div class="col-sm-4">
                                <input type="texe" name="school_name_en" class="form-control" placeholder="ชื่อโรงเรียนภาษาอังกฤษ" value="{{ (!empty($memberschool_list) ? $memberschool_list->school_name_en : '') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-right">School Image</label>
                            <div class="col-sm-4">
                                <input type="file" name="school_img" class="form-control value=">
                                @if(!empty($memberschool_list) && !empty($memberschool_list->school_img))
                                <img src="<?php echo asset('local/public/memberschool/').'/'.$memberschool_list->school_img; ?>" width="300px" />
                                @endif
                                <input type="hidden" required name="school_id" value="{{ (!empty($memberschool_list) ? $memberschool_list->school_id : '') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-right">location</label>
                            <div class="col-sm-4">
                                <input type="texe" name="school_location_th" class="form-control" placeholder="ที่ตั้งของโรงเรียนภาษาไทย" value="{{ (!empty($memberschool_list) ? $memberschool_list->school_location_th : '') }}">
                            </div>
                            <div class="col-sm-4">
                                <input type="texe" name="school_location_en" class="form-control" placeholder="ที่ตั้งของโรงเรียนภาษาอังกฤษ" value="{{ (!empty($memberschool_list) ? $memberschool_list->school_location_en : '') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-right">Address</label>
                            <div class="col-sm-4">
                                <input type="texe" name="school_address_th" class="form-control" placeholder="ที่อยู่ของโรงเรียนภาษาไทย" value="{{ (!empty($memberschool_list) ? $memberschool_list->school_address_th : '') }}">
                            </div>
                            <div class="col-sm-4">
                                <input type="texe" name="school_address_en" class="form-control" placeholder="ที่อยู่ของโรงเรียนภาษาอังกฤษ" value="{{ (!empty($memberschool_list) ? $memberschool_list->school_address_en : '') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-right">Year established</label>
                            <div class="col-sm-4">
                                <input type="texe" name="school_year" class="form-control" placeholder="ปีที่จัดตั้งโรงเรียน" value="{{ (!empty($memberschool_list) ? $memberschool_list->school_year : '') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-right">Age range</label>
                            <div class="col-sm-4">
                                <input type="texe" name="school_age" class="form-control" placeholder="ช่วงอายุ" value="{{ (!empty($memberschool_list) ? $memberschool_list->school_age : '') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-right">Education system</label>
                            <div class="col-sm-4">
                                <input type="texe" name="school_edusystem" class="form-control" placeholder="ระบบการศึกษา" value="{{ (!empty($memberschool_list) ? $memberschool_list->school_edusystem : '') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-right">Accreditation</label>
                            <div class="col-sm-4">
                                <input type="texe" name="school_accreditation" class="form-control" placeholder="Accreditation" value="{{ (!empty($memberschool_list) ? $memberschool_list->school_accreditation : '') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-right">Web</label>
                            <div class="col-sm-4">
                                <input type="texe" name="school_website" class="form-control" placeholder="เว็บไซต์" value="{{ (!empty($memberschool_list) ? $memberschool_list->school_website: '') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-right">Phone</label>
                            <div class="col-sm-4">
                                <input type="texe" name="school_phone" class="form-control" placeholder="เบอร์โทรศัพท์" value="{{ (!empty($memberschool_list) ? $memberschool_list->school_phone : '') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-right">Fax</label>
                            <div class="col-sm-4">
                                <input type="texe" name="school_fax" class="form-control" placeholder="เบอร์โทรสาร" value="{{ (!empty($memberschool_list) ? $memberschool_list->school_fax : '') }}">
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
  <!-- <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'news_detail' );
            </script> -->
@endsection


