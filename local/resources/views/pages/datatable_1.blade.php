@extends('layout.main')

@section('styles_link')
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/assets/pages/data-table/css/buttons.dataTables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}">
@endsection
@section('styles')
 <style type="text/css">

 </style>
@endsection

@section('content')
<!-- Page-body start -->
  <div class="page-body">
    {{-- <h3>การแจ้งเตือน</h3> --}}
    <h4>&nbsp;<i class="fa fa-chevron-circle-right"></i>&nbsp;Datatable</h4>

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card_head_modify">
            <span class="pull-left">Manage Data </span>
            <div class="pull-right">
              <a href="{{ url('customer/add') }}"><button class="btn btn-primary btn-mini btn-round waves-effect waves-light mt-1"><i class="fa fa-plus-circle"></i>Add Data</button></a>
            </div>
          </div>

          <div class="card-block">
            <div class="dt-responsive table-responsive">
              <table id="table_list1" class="table table-striped table-bordered nowrap">
                <thead class="thead_txt_center">
                  <tr>
                    <th width="15">#</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th width="50">Action</th>
                  </tr>
                </thead>
                <tbody class="tbody_txt_center">
                  @for ($i = 0 ; $i < 5;$i++) 
                  <tr>
                    <td>{{ ($i+1) }}</td>
                    <td>{{ ($i+1)  }}</td>
                    <td>{{ ($i+1)  }}</td>
                    <td>{{ ($i+1)  }}</td>
                    <td>{{ ($i+1)  }}</td>
                    <td>{!! ($i+1) !!}</td>
                    <td>
                      <a href="{{ url('') }}"><button class="btn btn-info btn-round btn-mini">แก้ไข</button></a>
                      <button class="btn btn-danger btn-round btn-mini" onclick="del_data()" >ลบ</button>
                    </td>
                  </tr>
                  @endfor
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
  <script src="{{ asset('theme/bower_components/datatables.net/js/jquery.dataTables.min.js')  }}"></script>
  <script src="{{ asset('theme/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js')  }}"></script>
  <script src="{{ asset('theme/assets/pages/data-table/js/jszip.min.js')  }}"></script>
  <script src="{{ asset('theme/assets/pages/data-table/js/pdfmake.min.js')  }}"></script>
  <script src="{{ asset('theme/assets/pages/data-table/js/vfs_fonts.js')  }}"></script>
  <script src="{{ asset('theme/bower_components/datatables.net-buttons/js/buttons.print.min.js')  }}"></script>
  <script src="{{ asset('theme/bower_components/datatables.net-buttons/js/buttons.html5.min.js')  }}"></script>
  <script src="{{ asset('theme/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js')  }}"></script>
  <script src="{{ asset('theme/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js')  }}"></script>
  <script src="{{ asset('theme/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')  }}"></script>
<script type="text/javascript">
       $(document).ready(function(){
         $('#table_list1').DataTable();
      });

    // function del_data(id) {
    //     var del_result = "{!! url('customer/del/"+id+"') !!}";
    //     sweet_del(del_result);
    // }

    </script>
@endsection


