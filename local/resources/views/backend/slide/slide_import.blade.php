@extends('layout.main')

@section('styles_link')
    <link rel="stylesheet" href="{{ asset('css/dropify.min.css') }}">
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
        <h4>&nbsp;<i class="fa fa-chevron-circle-right"></i>&nbsp;Import Excel</h4>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card_head_modify">
                        <span class="pull-left">เพิ่มข้อมูลผู้ใช้ : Import Excel</span>
                        <div class="pull-right">
                            <a href="{{ asset('file/Example_data.xlsx') }}">
                                <button class="btn btn-danger btn-mini btn-round waves-effect waves-light mt-1"><i class="fa fa-download"></i>Download Data File</button>
                            </a>
                            <a href="{{ url('backend') }}">
                                <button class="btn btn-primary btn-mini btn-round waves-effect waves-light mt-1"><i class="fa fa-arrow-circle-left"></i>กลับไปหน้าจัดการ</button>
                            </a>
                        </div>
                    </div>
                    {{ Form::open(['url'=>['backend/import_excel'],'id'=>'gen_form','autocomplete'=>'off','enctype'=>'multipart/form-data']) }}
                    <div class="card-block pt-0">
                        <div class="row">
                            <div class="col-md-4">
                                <h4>Import Excel</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <input type="file" name="import_file" id="input-file-now" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" class="dropify"  />
                            </div>
                        </div>
                        <div class="row pt-1">
                            <div class="col-sm-12">
                                <input type="number" name="import_year" id="input-year" class="form-control" value="<?php echo date('Y'); ?>"  />
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="button" id="btn_sub" class="btn btn-success form-control">Import</button>
                            </div>
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
<!-- Page-body end -->
@endsection
@section('javascripts')
    @if (isset($success))
        <script>
            swal({
                    title: "Import Excel Sucess",
                    type: "success",
                    successMode: true,
                })
        </script>
    @endif
    @if (isset($fail))
        <script>
            swal({
                    title: "Import Excel Fail",
                    type: "error",
                })
        </script>
    @endif
<script src="{{ asset('js/dropify.min.js') }}"></script>
  <script>
      $(document).ready(function(){
            // Basic
            $('.dropify').dropify();
            // Used events
            var drEvent = $('.dropify-event').dropify();

            drEvent.on('dropify.beforeClear', function(event, element){
                return confirm("Do you really want to delete \"" + element.filename + "\" ?");
            });
            drEvent.on('dropify.afterClear', function(event, element){
                alert('File deleted');
            });
        });
        $('#btn_sub').click(function() {
            load_sw();
            $('#gen_form').submit();
        })
  </script>
@endsection


