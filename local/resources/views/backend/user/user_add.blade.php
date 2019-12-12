@extends('layout.main')

@section('styles_link')
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/pages/data-table/css/buttons.dataTables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}">
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
        <h4>&nbsp;<i class="fa fa-chevron-circle-right"></i>&nbsp;จัดการข้อมูล : ผู้ใช้</h4>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card_head_modify">
                        <span class="pull-left">เพิ่มข้อมูลผู้ใช้</span>
                        <div class="pull-right">
                            <a href="{{ url('backend') }}">
                                <button class="btn btn-primary btn-mini btn-round waves-effect waves-light mt-1"><i class="fa fa-arrow-circle-left"></i>กลับไปหน้าจัดการ</button>
                            </a>
                        </div>
                    </div>
                    {{ Form::open(['url'=>['backend/store_user'],'id'=>'gen_form','autocomplete'=>'off','enctype'=>'multipart/form-data']) }}
                    <div class="card-block pt-0">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-right">No</label>
                            <div class="col-sm-4">
                                <input type="text" name="No" class="form-control" placeholder="No">
                            </div>
                            <label class="col-sm-2 col-form-label text-right">ID</label>
                            <div class="col-sm-4">
                                <input type="text" required name="userid" class="form-control" placeholder="ID">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-right">Name</label>
                            <div class="col-sm-4">
                                <input type="text" name="name" class="form-control" placeholder="Name">
                            </div>
                            <label class="col-sm-2 col-form-label text-right">Company</label>
                            <div class="col-sm-4">
                                <select name="company" class="form-control" id="">
                                    @foreach ($company as $item => $value)
                                        <option value="{{ $value->company_name }}">{{ $value->company_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-right">Department</label>
                            <div class="col-sm-4">
                                <input type="text" name="department" class="form-control" placeholder="Department">
                            </div>
                            <label class="col-sm-2 col-form-label text-right">Position</label>
                            <div class="col-sm-4">
                                <input type="text" name="position" class="form-control" placeholder="Position">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-right">Outher</label>
                            <div class="col-sm-4">
                                <input type="text" name="outher" class="form-control" placeholder="Outher">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-2">
                                <h4>รายการตรวจที่เลือก</h4>
                            </div>
                        </div>
                        <div class="row" id="main_key">
                            
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <div class="dt-responsive table-responsive">
                                    <table id="table_data" class="table table-striped table-bordered nowrap">
                                        <thead class="thead_txt_center">
                                            <tr>
                                                <th>#</th>
                                                <th>รายการตรวจ</th>
                                                <th>เลือก</th>
                                            </tr>
                                        </thead>
                                        <tbody class="tbody_txt_center">
                                            @foreach ($checklist as $key => $checklists)
                                                <tr>
                                                    <td>{{ $key+1 }}</td>
                                                    <td>{{ $checklists->checklist_name }}</td>
                                                    <td>
                                                        <input type="checkbox" name="" class="form-control checked" onclick="addlist({{ "'$checklists->checklist_name'" }})">
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
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
                    {{ Form::close() }}
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
@endsection


