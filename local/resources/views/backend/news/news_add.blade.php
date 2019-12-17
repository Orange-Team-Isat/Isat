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
        <h4>&nbsp;<i class="fa fa-chevron-circle-right"></i>&nbsp;จัดการข้อมูลข่าว</h4>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card_head_modify">
                        <span class="pull-left">เพิ่มข้อมูลข่าว</span>
                        <div class="pull-right">
                            <a href="{{ url('backend') }}">
                                <button class="btn btn-primary btn-mini btn-round waves-effect waves-light mt-1"><i class="fa fa-arrow-circle-left"></i>กลับไปหน้าจัดการ</button>
                            </a>
                        </div>
                    </div>
                   
                    <form action="{{(!empty($news_list) ? url('managenews/update_news') : url('managenews/store_news'))}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="card-block pt-0">
                        <div class="form-group row">
                        <label class="col-sm-2 col-form-label text-right">ภาพข่าว</label>
                            <div class="col-sm-4">
                                <input type="file" name="news_index" class="form-control" placeholder="ไฟล์ภาพ" value="">
                                @if(!empty($news_list) && !empty($news_list->news_index))
                                <img src="<?php echo asset('local/public/news/').'/'.$news_list->news_index; ?>" width="300px" />
                                @endif
                                <input type="hidden" required name="news_id" value="{{ (!empty($news_list) ? $news_list->news_id : '') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-right">หัวข้อข่าว</label>
                            <div class="col-sm-4">
                                <input type="texe" name="news_title_th" class="form-control" placeholder="หัวข้อข่าวภาษาไทย" value="{{ (!empty($news_list) ? $news_list->news_title_th : '') }}">
                            </div>
                            <div class="col-sm-4">
                                <input type="texe" name="news_title_en" class="form-control" placeholder="หัวข้อข่าวภาษาอังกฤษ" value="{{ (!empty($news_list) ? $news_list->news_title_en : '') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-right">ไฟล์ข่าว</label>
                            <div class="col-sm-4">
                                <input type="file" name="news_file[]" multiple class="form-control" placeholder="ไฟล์ข่าว">
                                <div class="row" style="margin-top: 20px;">
                                @if(!empty($news_list))
                                    <?php $file = DB::table('news_files')->where('file_ref','LIKE',$news_list->news_ref)->get(); ?>
                                    @if(!empty($file))
                                    @foreach ($file as $_file)
                                    <div class="col-md-6 mt-1">
                                        <a href="<?php echo asset('local/public/news_files/').'/'.$_file->file_name; ?>" width="100%">ดาวน์โหลดไฟล์ </a>[<a href="{{ url('managefile/del/'.$_file->file_id.'/'.$news_list->news_id) }}"><i class="fa fa-trash"></i></a>]
                                    </div>
                                    @endforeach
                                    @endif
                                @endif
                                </div>
                            </div>
                            
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-right">รายละเอียดข่าว(TH)</label>
                            <div class="col-sm-4">
                                <textarea name="news_detail_th" id="news_detail_th" rows="10" cols="80">{{ (!empty($news_list) ? $news_list->news_detail_th : '') }}</textarea>
                            </div>
                            <label class="col-sm-2 col-form-label text-right">รายละเอียดข่าว(EN)</label>
                            <div class="col-sm-4">
                                <textarea name="news_detail_en" id="news_detail_en" rows="10" cols="80">{{ (!empty($news_list) ? $news_list->news_detail_en : '') }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-right">วันที่</label>
                            <div class="col-sm-4">
                                <input type="date" name="news_date" class="form-control" placeholder="วันที่" value="{{ (!empty($news_list) ? $news_list->news_date : '') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-right">ประเภทสมาชิก</label>
                            <div class="col-sm-4">
                                <select class="form-control" name="news_member">
                                <option {{ (!empty($news_list) && $news_list->news_member == '1' ? 'SELECTED' : '' ) }} value="1">บุคคลทั่วไป</option>
                                <option {{ (!empty($news_list) && $news_list->news_member == '2' ? 'SELECTED' : '' ) }} value="2" >สมาชิก</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-right">ประเภทของข่าว</label>
                            <div class="col-sm-4">
                                <select class="form-control" name="news_type">
                                <option {{ (!empty($news_list) && $news_list->news_type == '1' ? 'SELECTED' : '' ) }} value="1" >Meetings Minutes</option>
                                <option {{ (!empty($news_list) && $news_list->news_type == '2' ? 'SELECTED' : '' ) }} value="2" >Announcement & Updates</option>
                                <option {{ (!empty($news_list) && $news_list->news_type == '3' ? 'SELECTED' : '' ) }} value="3" >Sub-Committees</option>
                                <option {{ (!empty($news_list) && $news_list->news_type == '4' ? 'SELECTED' : '' ) }} value="4" >Rules & Regulations</option>
                                <option {{ (!empty($news_list) && $news_list->news_type == '5' ? 'SELECTED' : '' ) }} value="5" >Accreditations</option>
                                <option {{ (!empty($news_list) && $news_list->news_type == '6' ? 'SELECTED' : '' ) }} value="6" >News & Events</option>
                                </select>
                            
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
                CKEDITOR.replace( 'news_detail_th' )
                CKEDITOR.replace( 'news_detail_en' );
            </script>
@endsection


