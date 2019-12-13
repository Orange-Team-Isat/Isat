<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Carbon\Carbon;
use Hash;
use Image;
use PHPExcel;
use PHPExcel_IOFactory;
use App\jobs;
use Datatables;
use PHPExcel_Cell;
use DB;

class ManagejobController extends Controller
{
    public function index()
    {
        $jobs = jobs::all();
        $data = array(
            'jobs' => $jobs
        );
        return view('Backend.jobs.jobs_list', $data);
    }
   
    public function create()
    {
        
        return view('Backend.jobs.jobs_add');
    }
    public function delete($id)
    {
        $jobs = DB::table('jobs')->where('jobs_id',$id)->first();
 
            DB::table('jobs')->where('jobs_id',$id)->delete();
            echo '<script>
                    alert("ลบข้อมูลเรียบร้อย");
                    window.location.href = "'.url('managejob').'" ;
            </script>';
      
            echo '<script>
                    alert("ไม่สามารถลบข้อมูลได้");
                    window.location.href = "'.url('managejob').'" ;
            </script>';          
    }
   
    public function show($id)
    {
        $jobs_list = DB::table('jobs')->where('jobs_id',$id)->first();
        $data = array(
            'jobs_list' => $jobs_list,
        );
        return view('Backend.jobs.jobs_add', $data);
    }
    
    public function store_jobs(Request $request){

        $values = array(
            'jobs_name_th'                 => $request->input('jobs_name_th'),
            'jobs_name_en'                 => $request->input('jobs_name_en'),
            'jobs_detail_th'               => $request->input('jobs_detail_th'),
            'jobs_detail_en'               => $request->input('jobs_detail_en'),
            'jobs_qualifications_th'       => $request->input('jobs_qualifications_th'),
            'jobs_qualifications_en'       => $request->input('jobs_qualifications_en'),
            'jobs_type'                    => $request->input('jobs_type'),
            'jobs_date'                    => $request->input('jobs_date'),
            'jobs_create'                  => date('Y-m-d H-i-s'),
            'jobs_update'                  => date('Y-m-d H-i-s')
        );           

        DB::table('jobs')->insert($values);

        echo '<script>
                    alert("บันทึกข้อมูลเรียบร้อย");
                    window.location.href = "'.url('managejob').'" ;
            </script>';
    }

    public function update_jobs(Request $request){

        $values = array(
            'jobs_name_th'                 => $request->input('jobs_name_th'),
            'jobs_name_en'                 => $request->input('jobs_name_en'),
            'jobs_detail_th'               => $request->input('jobs_detail_th'),
            'jobs_detail_en'               => $request->input('jobs_detail_en'),
            'jobs_qualifications_th'       => $request->input('jobs_qualifications_th'),
            'jobs_qualifications_en'       => $request->input('jobs_qualifications_en'),
            'jobs_type'                    => $request->input('jobs_type'),
            'jobs_date'                    => $request->input('jobs_date'),
            'jobs_update'                  => date('Y-m-d H-i-s')
        );           

        DB::table('jobs')->where('jobs_id',$request->input('jobs_id'))->update($values);

        echo '<script>
                    alert("บันทึกข้อมูลเรียบร้อย");
                    window.location.href = "'.url('managejob').'" ;
            </script>';
    }
    
}
