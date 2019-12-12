@extends('layout.main')

@section('styles_link')
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/fullcalendar_th/fullcalendar.min.css') }}" > --}}
@endsection
@section('styles')
 <style type="text/css">

 </style>
@endsection

@section('content')
<!-- Page-body start -->
  <div class="page-body">
    <h4>&nbsp;<i class="fa fa-chevron-circle-right"></i>&nbsp;Page Simple</h4>

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

            <div class="row">
              <div class="form-group col-md-6">
                  <label for="recipient-name" class="col-form-label">ชื่อ-นามสกุล *</label>
                  <input type="text" class="form-control" id="cnew_name" name="cnew_name" >
              </div>

              <div class="form-group col-md-6">
                  <label for="recipient-name" class="col-form-label">ชื่อเล่น *</label>
                  <input type="text" class="form-control" id="cnew_nickname" name="cnew_nickname" >
              </div>
           

              <div class="form-group col-md-6">
                  <label for="recipient-name" class="col-form-label">โทรศัพท์ *</label>
                  <input type="text" class="form-control" id="cnew_phone" name="cnew_phone" >
              </div>

              <div class="form-group col-md-6">
                  <label for="recipient-name" class="col-form-label">อีเมลล์</label>
                  <input type="email" class="form-control" id="cnew_email" name="cnew_email" >
              </div>

              <div class="form-group col-md-12">
                  <label for="recipient-name" class="col-form-label">ที่อยู่</label>
                  <textarea rows="3" class="form-control" id="cnew_address" name="cnew_address" ></textarea>
              </div>
              
            </div>

            <div class="row panel_btn_center">
              <div class="col-md-12 pl-0">
                <input type="button" value="ยกเลิก" id="btn_cancel" class="btn btn-warning btn_refresh">
                <input type="submit" value="บันทึก" class="btn btn-success">
                  
              </div>
            </div>

          </div>

        </div>
      </div>
    </div>

  </div>
<!-- Page-body end -->
@endsection

@section('javascripts')
{{--
<script  src="{{ asset ('bower_components/fullcalendar_th/lib/moment.min.js') }}"></script>
<script  src="{{ asset ('bower_components/fullcalendar_th/fullcalendar.min.js') }}"></script>
<script  src="{{ asset ('bower_components/fullcalendar_th/lang/th.js') }}"></script> 
--}}
<script type="text/javascript">
</script>
@endsection


