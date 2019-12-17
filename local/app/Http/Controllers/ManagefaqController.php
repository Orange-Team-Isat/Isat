<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Carbon\Carbon;
use Hash;
use Image;
use PHPExcel;
use PHPExcel_IOFactory;
use App\FAQ;
use Datatables;
use PHPExcel_Cell;
use DB;

class ManagefaqController extends Controller
{
    public function index()
    {
        $faq = faq::all();
        $data = array(
            'faq' => $faq
        );
        return view('Backend.faq.faq_list', $data);
    }
   
    public function create()
    {
        
        return view('Backend.faq.faq_add');
    }
    public function delete($id)
    {
        $faq = DB::table('faq')->where('faq_id',$id)->first();
 
            DB::table('faq')->where('faq_id',$id)->delete();
            echo '<script>
                    alert("ลบข้อมูลเรียบร้อย");
                    window.location.href = "'.url('managefaq').'" ;
            </script>';
      
            echo '<script>
                    alert("ไม่สามารถลบข้อมูลได้");
                    window.location.href = "'.url('managefaq').'" ;
            </script>';          
    }
   
    public function show($id)
    {
        $faq_list = DB::table('faq')->where('faq_id',$id)->first();
        $data = array(
            'faq_list' => $faq_list,
        );
        return view('Backend.faq.faq_add', $data);
    }
    
    public function store_faq(Request $request){

        $values = array(
            'faq_question_th'          => $request->input('faq_question_th'),
            'faq_question_en'          => $request->input('faq_question_en'),
            'faq_ans_th'               => $request->input('faq_ans_th'),
            'faq_ans_en'               => $request->input('faq_ans_en'),
            'faq_create'               => date('Y-m-d H-i-s'),
            'faq_update'               => date('Y-m-d H-i-s')
        );           

        DB::table('faq')->insert($values);

        echo '<script>
                    alert("บันทึกข้อมูลเรียบร้อย");
                    window.location.href = "'.url('managefaq').'" ;
            </script>';
    }

    public function update_faq(Request $request){

        $values = array(
            'faq_question_th'          => $request->input('faq_question_th'),
            'faq_question_en'          => $request->input('faq_question_en'),
            'faq_ans_th'               => $request->input('faq_ans_th'),
            'faq_ans_en'               => $request->input('faq_ans_en'),
            'faq_update'               => date('Y-m-d H-i-s')
        );           

        DB::table('faq')->where('faq_id',$request->input('faq_id'))->update($values);

        echo '<script>
                    alert("บันทึกข้อมูลเรียบร้อย");
                    window.location.href = "'.url('managefaq').'" ;
            </script>';
    }
    
}
