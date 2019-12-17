<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Carbon\Carbon;
use Hash;
use Image;
use PHPExcel;
use PHPExcel_IOFactory;
use App\Slide;
use Datatables;
use PHPExcel_Cell;
use DB;

class ManageslideController extends Controller
{
    public function index()
    {
        $slide = Slide::orderBy('banner_sort','DESC')->get();
        $data = array(
            'slide' => $slide
        );
        return view('Backend.slide.slide_list', $data);
    }
   
    public function create()
    {
        
        return view('Backend.slide.slide_add');
    }
    public function delete($id)
    {
        $banner = DB::table('banner')->where('banner_id',$id)->first();
        if(file_exists(public_path('/slide/').$banner->banner_file)){
            // echo public_path('/slide/').$banner->banner_file;
            // echo 'have file';
            unlink(public_path('/slide/').$banner->banner_file);
            DB::table('banner')->where('banner_id',$id)->delete();
            echo '<script>
                    alert("ลบข้อมูลเรียบร้อย");
                    window.location.href = "'.url('manageslide').'" ;
            </script>';
        }else{
            echo '<script>
                    alert("ไม่สามารถลบข้อมูลได้");
                    window.location.href = "'.url('manageslide').'" ;
            </script>';
            // echo public_path('/slide/').$banner->banner_file;
        }
          //  DB::table('banner')->where('banner_id',$id)->delete();
        
              
          // return back();
    }
   
    public function show($id)
    {
        $slide_list = DB::table('banner')->where('banner_id',$id)->first();
        $data = array(
            'slide_list' => $slide_list,
        );
        return view('Backend.slide.slide_add', $data);
    }
    
    public function store_slide(Request $request){
        // dd($request->input(),$request->file());

        $values = array(
            'banner_sort'            => $request->input('banner_sort'),
            'banner_create'          => date('Y-m-d H-i-s'),
            'banner_update'          => date('Y-m-d H-i-s')
        );           


        if(!empty($request->file('banner_file'))){
            $file = $request->file('banner_file');
            // foreach ($file as $_file) {
                $imagename = '';
                $imagename = date('Y-m-d-H-i-s').rand().'.jpg';

                $destinationPath_origi = public_path('/slide/');            
                $thumb_img_origi = Image::make($file->getRealPath());
                $thumb_img_origi->save($destinationPath_origi.$imagename);

                $values['banner_file'] = $imagename;
            // }
        }

        DB::table('banner')->insert($values);

        echo '<script>
                    alert("บันทึกข้อมูลเรียบร้อย");
                    window.location.href = "'.url('manageslide').'" ;
            </script>';
    }

    public function update_slide(Request $request){
        // dd($request->input(),$request->file());

        $values = array(
            'banner_sort'            => $request->input('banner_sort'),
            'banner_update'          => date('Y-m-d H-i-s')
        );           


        if(!empty($request->file('banner_file'))){
            $file = $request->file('banner_file');
            // foreach ($file as $_file) {
                $imagename = '';
                $imagename = date('Y-m-d-H-i-s').rand().'.jpg';

                $destinationPath_origi = public_path('/slide/');            
                $thumb_img_origi = Image::make($file->getRealPath());
                $thumb_img_origi->save($destinationPath_origi.$imagename);

                $values['banner_file'] = $imagename;
            // }
        }

        DB::table('banner')->where('banner_id',$request->input('banner_id'))->update($values);

        echo '<script>
                    alert("บันทึกข้อมูลเรียบร้อย");
                    window.location.href = "'.url('manageslide').'" ;
            </script>';
    }
    public function change_sortbanner(Request $request){
        $data['banner_sort'] = $request->input('banner_sort');
        $data['banner_update'] = date('Y-m-d H-i-s');

        DB::table('banner')->where('banner_id',$request->input('banner_id'))->update($data);

    }
    
}
