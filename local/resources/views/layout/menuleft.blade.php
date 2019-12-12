<style>
   /* .text_show{ font-size: 13px;} */
</style>
@php
    $hidden = '';
    if (Session::get('level') == 'Staff') {$hidden = 'hidden' ; }
@endphp
<nav class="pcoded-navbar">
    <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
    <div class="pcoded-inner-navbar main-menu">
        
        <div class="pcoded-navigation-label">จัดการข้อมูล</div>
        <ul class="pcoded-item pcoded-left-item">
            <li id="pcoded-hasmenu">
                <a href="{{ url('backend') }}">
                    <span class="pcoded-micon"><i class="fa fa-users"></i><b>M</b></span>
                    <span class="pcoded-mtext text_show">จัดการข้อมูลผู้ใช้</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li id="pcoded-hasmenu">
                <a href="{{ url('manageslide') }}">
                    <span class="pcoded-micon"><i class="fa fa-building"></i><b>M</b></span>
                    <span class="pcoded-mtext text_show">จัดการภาพสไลด์</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <!-- <li id="pcoded-hasmenu">
                <a href="{{ url('managenews') }}">
                    <span class="pcoded-micon"><i class="zmdi zmdi-balance"></i><b>M</b></span>
                    <span class="pcoded-mtext text_show">จัดการข้อมูลข่าว</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li> -->
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="fa fa-check-square"></i><b>M</b></span>
                    <span class="pcoded-mtext text_show">การจัดการข้อมูลข่าว</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="">
                        <a href="{{ url('managenews_sub/meeting') }}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext text_show">Meetings Minutes</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{url('managenews_sub/announcement')}}">
                            <span class="pcoded-micon"><i class="fa fa-check-square"></i></span>
                            <span class="pcoded-mtext text_show">Announcement & Updates</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{url('managenews_sub/subcommittees')}}">
                            <span class="pcoded-micon"><i class="fa fa-check-square"></i></span>
                            <span class="pcoded-mtext text_show">Sub-Committees</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{url('managenews_sub/rules')}}">
                            <span class="pcoded-micon"><i class="fa fa-check-square"></i></span>
                            <span class="pcoded-mtext text_show">Rules & Regulations</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{url('managenews_sub/accreditations')}}">
                            <span class="pcoded-micon"><i class="fa fa-check-square"></i></span>
                            <span class="pcoded-mtext text_show">Accreditations</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{url('managenews_sub/newsevents')}}">
                            <span class="pcoded-micon"><i class="fa fa-check-square"></i></span>
                            <span class="pcoded-mtext text_show">News & Events</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- <div class="pcoded-navigation-label">จัดการข้อมูลข่าว</div>
                <ul class="pcoded-item pcoded-left-item">
                    <li id="pcoded-hasmenu">
                        <a href="{{ url('managenews/meeting') }}">
                            <span class="pcoded-micon"><i class="fa fa-upload"></i><b>M</b></span>
                            <span class="pcoded-mtext text_show">Meetings Minutes</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li id="pcoded-hasmenu">
                        <a href="{{ url('managenews/announcement') }}">
                            <span class="pcoded-micon"><i class="fa fa-upload"></i><b>M</b></span>
                            <span class="pcoded-mtext text_show">Announcement & Updates</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li id="pcoded-hasmenu">
                        <a href="{{ url('managenews/subcommittees') }}">
                            <span class="pcoded-micon"><i class="fa fa-upload"></i><b>M</b></span>
                            <span class="pcoded-mtext text_show">Sub-Committees</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li id="pcoded-hasmenu">
                        <a href="{{ url('managenews/rules') }}">
                            <span class="pcoded-micon"><i class="fa fa-upload"></i><b>M</b></span>
                            <span class="pcoded-mtext text_show">Rules & Regulations</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li id="pcoded-hasmenu">
                        <a href="{{ url('managenews/accreditations') }}">
                            <span class="pcoded-micon"><i class="fa fa-upload"></i><b>M</b></span>
                            <span class="pcoded-mtext text_show">Accreditations</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li id="pcoded-hasmenu">
                        <a href="{{ url('managenews/news') }}">
                            <span class="pcoded-micon"><i class="fa fa-upload"></i><b>M</b></span>
                            <span class="pcoded-mtext text_show">News & Events</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul> -->
            
            <li id="pcoded-hasmenu">
                <a href="{{ url('managegallery') }}">
                    <span class="pcoded-micon"><i class="fa fa-heartbeat"></i><b>M</b></span>
                    <span class="pcoded-mtext text_show">จัดการข้อมูลอัลบั้มภาพ</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li id="pcoded-hasmenu">
                <a href="{{ url('manageschool') }}">
                    <span class="pcoded-micon"><i class="zmdi zmdi-balance"></i><b>M</b></span>
                    <span class="pcoded-mtext text_show">จัดการข้อมูลโรงเรียน</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            </li>
            <li id="pcoded-hasmenu">
                <a href="{{ url('managejob') }}">
                    <span class="pcoded-micon"><i class="zmdi zmdi-balance"></i><b>M</b></span>
                    <span class="pcoded-mtext text_show">จัดการข้อมูลงาน</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li id="pcoded-hasmenu">
                <a href="{{ url('managemember') }}">
                    <span class="pcoded-micon"><i class="fa fa-users"></i><b>M</b></span>
                    <span class="pcoded-mtext text_show">จัดการข้อมูลสมาชิก</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            
<!--             
            {{-- <li id="pcoded-hasmenu">
                <a href="{{ url('#') }}">
                    <span class="pcoded-micon"><i class="zmdi zmdi-flag"></i><b>M</b></span>
                    <span class="pcoded-mtext text_show">จัดการข้อมูล Station</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li> --}}
        </ul>
        <div class="pcoded-navigation-label">นำเข้าข้อมูล</div>
        <ul class="pcoded-item pcoded-left-item">
            <li id="pcoded-hasmenu">
                <a href="{{ url('backend/import') }}">
                    <span class="pcoded-micon"><i class="fa fa-upload"></i><b>M</b></span>
                    <span class="pcoded-mtext text_show">Import Data Register</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li id="pcoded-hasmenu">
                <a href="{{ url('lab_result/index') }}">
                    <span class="pcoded-micon"><i class="fa fa-upload"></i><b>M</b></span>
                    <span class="pcoded-mtext text_show">Import Lab Result</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            {{-- <li id="pcoded-hasmenu">
                <a href="{{ url('xray/add_data') }}">
                    <span class="pcoded-micon"><i class="fa fa-upload"></i><b>M</b></span>
                    <span class="pcoded-mtext text_show">Import Data X-ray </span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li> --}}
        </ul>
        <div class="pcoded-navigation-label">รายงาน</div>
        <ul class="pcoded-item pcoded-left-item">
            <li id="pcoded-hasmenu">
                <a href="{{ url('report/realtime') }}">
                    <span class="pcoded-micon"><i class="fa fa-file-text"></i><b>M</b></span>
                    <span class="pcoded-mtext text_show">รายงานผู้ลงทะเบียน</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li id="pcoded-hasmenu">
                <a href="{{ url('lab_result/print_lab') }}">
                    <span class="pcoded-micon"><i class="fa fa-book"></i><b>M</b></span>
                    <span class="pcoded-mtext text_show">พิมพ์เล่มประจำตัว (A5)</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
               <li id="pcoded-hasmenu">
                <a href="{{ url('lab_compare/print_lab') }}">
                    <span class="pcoded-micon"><i class="fa fa-book"></i><b>M</b></span>
                    <span class="pcoded-mtext text_show">พิมพ์เล่มประจำตัวเลือกปี (A5)</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li> -->
            <!-- <li id="pcoded-hasmenu">
                <a href="{{ url('print_lab_a4/print_lab') }}">
                    <span class="pcoded-micon"><i class="fa fa-book"></i><b>M</b></span>
                    <span class="pcoded-mtext text_show">พิมพ์รายงานตรวจ (A4)</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            {{-- <li id="pcoded-hasmenu">
                <a href="{{ url('#') }}">
                    <span class="pcoded-micon"><i class="fa fa-book"></i><b>M</b></span>
                    <span class="pcoded-mtext text_show">พิมพ์เล่มใหญ่</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li> --}} --> 
        <!-- </ul> -->
    </div>
</nav>