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
    {{-- <h3>การแจ้งเตือน</h3> --}}
    <h4>&nbsp;<i class="fa fa-chevron-circle-right"></i>&nbsp;Dashboard</h4>
    <div class="row">

      <div class="col-md-6">
        <div class="card bg-c-green order-card">
          <div class="card-block h_alert">
            <div class="m-b-10 h_alert_title"><i class="ti-upload h_alert_icon" ></i>Box Show 1</div>
            <div class="m-b-5 h_alert_desc" >Today<span class="f-right">351</span></div>
            <div class="m-b-0 h_alert_desc" >Tomorrow<span class="f-right">351</span></div>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card bg-c-pink order-card">
          <div class="card-block h_alert">
            <div class="m-b-10 h_alert_title"><i class="ti-download h_alert_icon" ></i>Box Show 2</div>
            <div class="m-b-5 h_alert_desc" >Today<span class="f-right">351</span></div>
            <div class="m-b-0 h_alert_desc" >Tomorrow<span class="f-right">351</span></div>
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


