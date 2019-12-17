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
        <h4>&nbsp;<i class="fa fa-chevron-circle-right"></i>&nbsp;จัดการข้อมูลงาน</h4>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card_head_modify">
                        <span class="pull-left">เพิ่มข้อมูลงาน</span>
                        <div class="pull-right">
                            <a href="{{ url('backend') }}">
                                <button class="btn btn-primary btn-mini btn-round waves-effect waves-light mt-1"><i class="fa fa-arrow-circle-left"></i>กลับไปหน้าจัดการ</button>
                            </a>
                        </div>
                    </div>
                   
                    <form action="{{(!empty($faq_list) ? url('managefaq/update_faq') : url('managefaq/store_faq'))}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="card-block pt-0">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-right">Question (TH)</label>
                            <div class="col-sm-4">
                                <input type="text" name="faq_question_th" class="form-control" placeholder="คำถามภาษาไทย" value="{{ (!empty($faq_list) ? $faq_list->faq_question_th : '') }}">
                                <input type="hidden" required name="faq_id" value="{{ (!empty($faq_list) ? $faq_list->faq_id : '') }}">

                            </div>
                            <label class="col-sm-2 col-form-label text-right">Question (EN)</label>
                            <div class="col-sm-4">
                                <input type="text" name="faq_question_en" class="form-control" placeholder="คำถามภาษาอังกฤษ" value="{{ (!empty($faq_list) ? $faq_list->faq_question_en : '') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-right">Answer(TH)</label>
                            <div class="col-sm-4">
                                <textarea name="faq_ans_th" id="faq_ans_th" rows="10" cols="80">{{ (!empty($faq_list) ? $faq_list->faq_ans_th  : '') }}</textarea>
                            </div>
                            <label class="col-sm-2 col-form-label text-right">Answer(EN)</label>
                            <div class="col-sm-4">
                                <textarea name="faq_ans_en" id="faq_ans_en" rows="10" cols="80">{{ (!empty($faq_list) ? $faq_list->faq_ans_en  : '') }}</textarea>
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
                CKEDITOR.replace( 'faq_ans_th' )
                CKEDITOR.replace( 'faq_ans_en' );
                
            </script>
 
@endsection

