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

          </div>

        </div>
      </div>
    </div>

    <div class="row" >

      <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 p-3">
        <div class="panel panel-primary">
          <div class="panel-heading bg-primary">
            Primary Panel
          </div>
          <div class="panel-body p-3">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan.</p>
          </div>
          <div class="panel-footer text-primary">
            Panel Footer
          </div>
        </div>
      </div>

      <div class="col-10 p-3">
        <div class="panel panel-primary">
          <div class="panel-heading bg-default txt-white">
            Default Panel
          </div>
          <div class="panel-body p-3">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan.</p>
          </div>
          <div class="panel-footer text-primary text-center">
            <button class="btn btn-danger p-1" >Cancle</button>
            <button class="btn btn-success p-1" >Submit</button>
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


