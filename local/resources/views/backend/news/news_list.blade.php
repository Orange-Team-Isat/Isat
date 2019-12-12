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
    .form-control-no{
        font-size: 14px;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        border-radius: .25rem;
        height: 25px;
        transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
	}
  </style>
@endsection
@section('content')
<!-- Page-body start -->
  <div class="page-body">
    <h4>&nbsp;<i class="fa fa-chevron-circle-right"></i>&nbsp;จัดการข้อมูลข่าว</h4>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
            <div class="card-header card_head_modify">
                <div class="row">
                    <div class="col-md-4">
                        <span class="pull-left pt-1" style="font-size: 18px;">{{ $menu }}</span>
                    </div>
                    
                    <div class="col-md-8">
                        <div class="pull-right pt-1">
                            <a href="{{ url('managenews/create') }}">
                                <button class="btn btn-primary btn-mini btn-round waves-effect waves-light mt-1"><i class="fa fa-plus-circle"></i>เพิ่มข้อมูลข่าว</button>
                            </a>
                        </div> 
                    </div>
                </div>
            </div>
            <div class="card-block">
                <div class="dt-responsive table-responsive">
                    <table id="footer-select" class="table table-striped table-bordered nowrap">
                        <thead class="thead_txt_center">
                            <tr>
                                <th>No</th>
                                <th>ภาพข่าว</th>
                                <th>หัวข้อข่าว(TH)</th>
                                <th>หัวข้อข่าว(EN)</th>
                                <th>ไฟล์ข่าว</th>
                                <th>วันที่</th>
                                <th>ประเภทสมาชิก</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="tbody_txt_center">
                        <?php $i = 1; ?>
                        @foreach ($news as $item => $value)
                                <tr>
                                    <td>{{ $i }}</td>
                                        <td><img src="<?php echo asset('local/public/news/').'/'.$value->news_index; ?>" width="300px" /></td>
                                        <td>{{ $value->news_title_th }}</td>
                                        <td>{{ $value->news_title_en }}</td>
                                        <td>
                                            <?php echo (!empty($value->news_file) ? '<a href="'.asset('local/public/news_files/').'/'.$value->news_file.'">ดาวน์โหลดไฟล์</a>' : '-' ); ?>
                                        </td>
                                        <td>{{ $value->news_date }}</td>
                                        <td>{{ ($value->news_member == 1 ? 'บุคคลทั่วไป' : 'สมาชิก') }}</td>
                                        </td>
                                    <td>
                                        <a href="{{ url('managenews/show/'.$value->news_id) }}"><button class="btn btn-info btn-round btn-mini">edit</button></a>
                                        <a href="{{ url('managenews/del/'.$value->news_id) }}"><button class="btn btn-danger btn-round btn-mini">delete</button></a>
                                    </td>
                                </tr>
                         <?php $i++; ?> 
                            @endforeach
                        </tbody>
                        <tfoot class="thead_txt_center">

                            <tr>
                                <th>No</th>
                                <th>ภาพข่าว</th>
                                <th>หัวข้อข่าว(TH)</th>
                                <th>หัวข้อข่าว(EN)</th>
                                <th>ไฟล์ข่าว</th>
                                <th>วันที่</th>
                                <th>ประเภทสมชิก</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
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
        var oTable = $('#footer-select').DataTable();
        $('#search_status').change(function(e){
			oTable.draw();
			e.preventDefault();
		});

    });
    function del_user(id) {
        swal({
            title: "ต้องการลบข้อมูลหรือไม่ ?",
            text: "การลบข้อมูลจะทำให้ข้อมูลหายไปอย่างถาวร",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Delete'
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    type:"GET",
                    url:"{!! url('backend/delete/"+id+"') !!}",
                    success: function(data) {
                        swal({
                            title: "Sucess!",
                            text: "ลบข้อมูลสำเร็จ",
                            type: "success",
                        }).then(() => {
                            location.reload();
                        })
                    }
                });
            }
        })
    };
  </script>
@endsection


