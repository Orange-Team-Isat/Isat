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
        <h4>&nbsp;<i class="fa fa-chevron-circle-right"></i>&nbsp;จัดการข้อมูลสมาชิก</h4>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card_head_modify">
                        <span class="pull-left">เพิ่มข้อมูลสมาชิก</span>
                        <div class="pull-right">
                            <a href="{{ url('backend') }}">
                                <button class="btn btn-primary btn-mini btn-round waves-effect waves-light mt-1"><i class="fa fa-arrow-circle-left"></i>กลับไปหน้าจัดการ</button>
                            </a>
                        </div>
                    </div>
                   
                    <form action="{{(!empty($member_list) ? url('managemember/update_member') : url('managemember/store_member'))}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="card-block pt-0">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-right">Full Name</label>
                            <div class="col-sm-4">
                                <input type="hidden" required name="member_id" value="{{ (!empty($member_list) ? $member_list->member_id : '') }}">
                                <input type="texe" name="member_fullname" class="form-control" placeholder="ชื่อเต็ม(ภาษาอังกฤษ)" value="{{ (!empty($member_list) ? $member_list->member_fullname : '') }}">
                            </div>
                            <div class="col-sm-4">
                                <input type="texe" name="member_thainame" class="form-control" placeholder="ชื่อเต็ม(ภาษาไทย)" value="{{ (!empty($member_list) ? $member_list->member_thainame : '') }}">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-right">Display Name</label>
                            <div class="col-sm-4">
                                <input type="texe" name="member_display" class="form-control" placeholder="ชื่อที่ใช้แสดง" value="{{ (!empty($member_list) ? $member_list->member_display : '') }}">
                            </div>
                            
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-right">Password</label>
                            <div class="col-sm-4">
                                <input type="texe" name="member_password" class="form-control" placeholder="password" value="{{ (!empty($member_list) ? $member_list->member_password : '') }}">
                            </div>
                            
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-right">School</label>
                            <div class="col-sm-4">
                            <select class="form-control" name="school_name_th">
                            <option>select</option>
                            </select>

                                <!-- <input type="texe" name="member_school" class="form-control" placeholder="ชื่อโรงเรียน" value="{{ (!empty($member_list) ? $member_list->member_school : '') }}"> -->
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-right">Position</label>
                            <div class="col-sm-4">
                                <input type="texe" name="member_position" class="form-control" placeholder="ตำแหน่ง" value="{{ (!empty($member_list) ? $member_list->member_position : '') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-right">Phone Number</label>
                            <div class="col-sm-4">
                                <input type="texe" name="member_phone" class="form-control" placeholder="เบอร์โทรศัพท์" value="{{ (!empty($member_list) ? $member_list->member_phone : '') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-right">E-mail</label>
                            <div class="col-sm-4">
                                <input type="texe" name="member_email" class="form-control" placeholder="E-mail" value="{{ (!empty($memberd_list) ? $member_list->member_email : '') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-right">Status</label>
                            <div class="col-sm-4">
                            <select class="form-control" name="member_status">
                                <option {{ (!empty($member_list) && $member_list->member_status == '1' ? 'SELECTED' : '' ) }} value="1">Acttive</option>
                                <option {{ (!empty($member_list) && $member_list->member_status == '2' ? 'SELECTED' : '' ) }} value="2" >Blocked</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-right">Roles</label>
                            <div class="col-sm-4">
                            <!-- <input type="texe" name="member_roles" class="form-control" placeholder="Roles (1-4)" value="{{ (!empty($memberd_list) ? $member_list->member_roles : '') }}">                             -->
                            <select class="form-control" name="member_roles">
                                <option {{ (!empty($member_list) && $member_list->member_roles == '1' ? 'SELECTED' : '' ) }} value="1" >1</option>
                                <option {{ (!empty($member_list) && $member_list->member_roles == '2' ? 'SELECTED' : '' ) }} value="2" >2</option>
                                <option {{ (!empty($member_list) && $member_list->member_roles == '3' ? 'SELECTED' : '' ) }} value="3" >3</option>
                                <option {{ (!empty($member_list) && $member_list->member_roles == '4' ? 'SELECTED' : '' ) }} value="4" >4</option>
                                
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-right">Contact</label>
                            <div class="col-sm-4">
                                <input type="texe" name="member_contact" class="form-control" placeholder="ติดต่อ" value="{{ (!empty($member_list) ? $member_list->member_contact : '') }}">
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
  
@endsection


