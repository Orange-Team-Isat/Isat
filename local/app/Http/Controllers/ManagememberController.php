<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Carbon\Carbon;
use Hash;
use Image;
use PHPExcel;
use PHPExcel_IOFactory;
use App\member;
use Datatables;
use PHPExcel_Cell;
use DB;

class ManagememberController extends Controller
{
    public function index()
    {
        $member = member::all();
        $data = array(
            'member' => $member
    );
        return view('Backend.member.member_list', $data);
    }
   
    public function create()
    {
        
        return view('Backend.member.member_add');
    }
    public function delete($id)
    {
        $member = DB::table('member')->where('member_id',$id)->first();
        
            DB::table('member')->where('member_id',$id)->delete();
            echo '<script>
                    alert("ลบข้อมูลเรียบร้อย");
                    window.location.href = "'.url('managemember').'" ;
            </script>';
    
            echo '<script>
                    alert("ไม่สามารถลบข้อมูลได้");
                    window.location.href = "'.url('managemember').'" ;
            </script>';        
    }
   
    public function show($id)
    {
        $member_list = DB::table('member')->where('member_id',$id)->first();
        $data = array(
            'member_list' => $member_list,
        );
        return view('Backend.member.member_add', $data);
    }
    
    public function store_member(Request $request){

        $values = array(
            'member_fullname'               => $request->input('member_fullname'),
            'member_thainame'               => $request->input('member_thainame'),
            'member_display'                => $request->input('member_display'),
            'member_password'               => $request->input('member_address_en'),
            'member_school'                 => $request->input('member_school'),
            'member_position'               => $request->input('member_position'),
            'member_phone'                  => $request->input('member_phone'),
            'member_email'                  => $request->input('member_email'),
            'member_status'                 => $request->input('member_status'),
            'member_roles'                  => $request->input('member_roles'),
            'member_contact'                => $request->input('member_contact'),
            'member_create'                 => date('Y-m-d H-i-s'),
            'member_update'                 => date('Y-m-d H-i-s')
        );           


        DB::table('member')->insert($values);

        echo '<script>
                    alert("บันทึกข้อมูลเรียบร้อย");
                    window.location.href = "'.url('managemember').'" ;
            </script>';
    }

    public function update_member(Request $request){

        $values = array(
            'member_fullname'               => $request->input('member_fullname'),
            'member_thainame'               => $request->input('member_thainame'),
            'member_display'                => $request->input('member_display'),
            'member_password'               => $request->input('member_address_en'),
            'member_school'                 => $request->input('member_school'),
            'member_position'               => $request->input('member_position'),
            'member_phone'                  => $request->input('member_phone'),
            'member_email'                  => $request->input('member_email'),
            'member_status'                 => $request->input('member_status'),
            'member_roles'                  => $request->input('member_roles'),
            'member_contact'                => $request->input('member_contact'),
            'member_update'                 => date('Y-m-d H-i-s')
        );           

        DB::table('member')->where('member_id',$request->input('member_id'))->update($values);

        echo '<script>
                    alert("บันทึกข้อมูลเรียบร้อย");
                    window.location.href = "'.url('managemember').'" ;
            </script>';
    }
    
}
