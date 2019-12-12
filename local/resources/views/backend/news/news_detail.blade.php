@extends('layout.main')

@section('styles_link')
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/pages/data-table/css/buttons.dataTables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}">
@endsection
@section('styles')
  <style>
    #footer-select tfoot .form-control{
      width: 80%;
    }
  </style>
@endsection
@section('content')
<!-- Page-body start -->
  <div class="page-body">
    <h4>&nbsp;<i class="fa fa-chevron-circle-right"></i>&nbsp;รายละเอียดข้อมูล : ผู้ใช้</h4>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
            <div class="card-header card_head_modify">
                <span class="pull-left">ข้อมูลผู้ใช้</span>
                <div class="pull-right">
                    <a href="{{ url('backend') }}">
                    <button class="btn btn-primary btn-mini btn-round waves-effect waves-light mt-1"><i class="fa fa-arrow-circle-left"></i>กลับไปหน้าจัดการ</button></a>
                </div>
            </div>
            <div class="card-block">
                <div class="row">
                    <div class="col-md-3 mt-2">
                        <label for="">No : {{ $user_list->user_no }}</label>
                    </div>
                    <div class="col-md-3 mt-2">
                        <label for="">ID : {{ $user_list->user_id }}</label>
                    </div>
                    <div class="col-md-3 mt-2">
                        <label for="">Name : {{ $user_list->user_name }}</label>
                    </div>
                    <div class="col-md-3 mt-2">
                        <label for="">Company : {{ $user_list->company_show->company_name }}</label>
                    </div>
                    <div class="col-md-3 mt-2">
                        <label for="">Department : {{ $user_list->user_department }}</label>
                    </div>
                    <div class="col-md-3 mt-2">
                        <label for="">Position : {{ $user_list->user_position }}</label>
                    </div>
                    <div class="col-md-3 mt-2">
                        <label for="">Outher : {{ $user_list->user_outher }}</label>
                    </div>
                </div>
                <hr>
                <h4>รายการตรวจ</h4>
                <div class="dt-responsive table-responsive mt-2">
                    <table id="table_data" class="table table-striped table-bordered nowrap">
                        <thead class="thead_txt_center">
                            <tr>
                                <tr>
                                    <th>No</th>
                                    <th>ID</th>
                                </tr>
                            </tr>
                        </thead>
                        <tbody class="tbody_txt_center">
                            @php
                                $i = 0;
                            @endphp
                            @foreach ($user_list->check_station as $item => $value)
                                @foreach ($value->call_list as $key => $show)
                                    <tr>
                                        <td>{{ $i+1 }}</td>
                                        <td>{{ $show->stl_name }}</td>
                                    </tr>
                                    @php
                                        $i++;
                                    @endphp
                                @endforeach
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
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
  {{-- <script src="{{ asset('assets/pages/data-table/js/data-table-custom.js') }}"></script> --}}
  <script type="text/javascript">
        $(document).ready(function(){
            $('#table_data').DataTable({
            });
        });
  </script>
@endsection


