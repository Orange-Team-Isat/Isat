<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Carbon\Carbon;
use Hash;
use Image;
use PHPExcel;
use PHPExcel_IOFactory;
use App\memberschool;
use Datatables;
use PHPExcel_Cell;
use DB;

class ManageschoolController extends Controller
{
    public function index()
    {
        $memberschool = memberschool::all();
        $data = array(
            'memberschool' => $memberschool
    );
        return view('Backend.memberschool.memberschool_list', $data);
    }
   
    public function create()
    {
        
        return view('Backend.memberschool.memberschool_add');
    }
    public function delete($id)
    {
        $memberschool = DB::table('memberschool')->where('school_id',$id)->first();
        if(file_exists(public_path('/memberschool/').$memberschool->school_img)){

            @unlink(public_path('/memberschool/').$memberschool->school_img);
            DB::table('memberschool')->where('school_id',$id)->delete();
            echo '<script>
                    alert("ลบข้อมูลเรียบร้อย");
                    window.location.href = "'.url('manageschool').'" ;
            </script>';
        }else{
            echo '<script>
                    alert("ไม่สามารถลบข้อมูลได้");
                    window.location.href = "'.url('manageschool').'" ;
            </script>';
        }
    }
   
    public function show($id)
    {
        $memberschool_list = DB::table('memberschool')->where('school_id',$id)->first();
        $data = array(
            'memberschool_list' => $memberschool_list,
        );
        return view('Backend.memberschool.memberschool_add', $data);
    }
    
    public function store_school(Request $request){
        // dd($request->input(),$request->file());

        $values = array(
            'school_name_th'                   => $request->input('school_name_th'),
            'school_name_en'                   => $request->input('school_name_en'),
            'school_address_th'                => $request->input('school_address_th'),
            'school_address_en'                => $request->input('school_address_en'),
            'school_location_th'               => $request->input('school_location_th'),
            'school_location_en'               => $request->input('school_location_en'),
            'school_year'                      => $request->input('school_year'),
            'school_age'                       => $request->input('school_age'),
            'school_edusystem'                 => $request->input('school_edusystem'),
            'school_accreditation'             => $request->input('school_accreditation'),
            'school_website'                   => $request->input('school_website'),
            'school_phone'                     => $request->input('school_phone'),
            'school_fax'                       => $request->input('school_fax'),
            'school_create'                    => date('Y-m-d H-i-s'),
            'school_update'                    => date('Y-m-d H-i-s')
        );           


        if(!empty($request->file('school_img'))){
            $file = $request->file('school_img');
            // foreach ($file as $_file) {
                $imagename = '';
                $imagename = date('Y-m-d-H-i-s').rand().'.jpg';

                $destinationPath_origi = public_path('/memberschool/');            
                $thumb_img_origi = Image::make($file->getRealPath());
                $thumb_img_origi->save($destinationPath_origi.$imagename);

                $values['school_img'] = $imagename;
            // }
        }

        // dd($request->file(),$values);

        DB::table('memberschool')->insert($values);

        echo '<script>
                    alert("บันทึกข้อมูลเรียบร้อย");
                    window.location.href = "'.url('manageschool').'" ;
            </script>';
    }

    public function update_school(Request $request){
        // dd($request->input(),$request->file());

        $values = array(
            'school_name_th'                   => $request->input('school_name_th'),
            'school_name_en'                   => $request->input('school_name_en'),
            'school_address_th'                => $request->input('school_address_th'),
            'school_address_en'                => $request->input('school_address_en'),
            'school_location_th'               => $request->input('school_location_th'),
            'school_location_en'               => $request->input('school_location_en'),
            'school_year'                      => $request->input('school_year'),
            'school_age'                       => $request->input('school_age'),
            'school_edusystem'                 => $request->input('school_edusystem'),
            'school_accreditation'             => $request->input('school_accreditation'),
            'school_website'                   => $request->input('school_website'),
            'school_phone'                     => $request->input('school_phone'),
            'school_fax'                       => $request->input('school_fax'),
            'school_update'                 => date('Y-m-d H-i-s')
        );           


        if(!empty($request->file('school_img'))){
            $file = $request->file('school_img');
            // foreach ($file as $_file) {
                $imagename = '';
                $imagename = date('Y-m-d-H-i-s').rand().'.jpg';

                $destinationPath_origi = public_path('/memberschool/');            
                $thumb_img_origi = Image::make($file->getRealPath());
                $thumb_img_origi->save($destinationPath_origi.$imagename);

                $values['school_img'] = $imagename;
            // }
        }

        DB::table('memberschool')->where('school_id',$request->input('school_id'))->update($values);

        echo '<script>
                    alert("บันทึกข้อมูลเรียบร้อย");
                    window.location.href = "'.url('manageschool').'" ;
            </script>';
    }
    
}
