<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Carbon\Carbon;
use Hash;
use Image;
use PHPExcel;
use PHPExcel_IOFactory;
use App\News;
use Datatables;
use PHPExcel_Cell;
use DB;
use File;

class ManagenewsController extends Controller
{
    public function index($name)
    {
        if($name == 'meeting'){
            $news_type=1;
            $menu = 'Meetings Minutes';
        }elseif($name == 'announcement'){
            $news_type=2;
            $menu = 'Announcement & Updates';
        }elseif($name == 'subcommittees'){  
            $news_type=3;
            $menu = 'Sub-Committees';
        }elseif($name =='rules'){
            $news_type=4;
            $menu = 'Rules & Regulations';
        }elseif($name == 'accreditations'){
            $news_type=5;
            $menu = 'Accreditations';
        }elseif($name == 'newsevents'){
            $news_type=6;
            $menu = 'News & Events';
        }else{
            $news_type='';
            $menu='';
        }

        if(!empty($news_type)){
            $news = news::where('news_type',$news_type)->get();
        }else{
            $news = news::all();
        }
        $data = array(
            'news' => $news,
            'menu' => $menu
        );
        return view('Backend.news.news_list', $data);
    }
    public function create()
    {
        
        return view('Backend.news.news_add');
    }
    public function delete($id)
    {
        $news = DB::table('news')->where('news_id',$id)->first();
        if(file_exists(public_path('/news/').$news->news_index)){
    
            @unlink(public_path('/news/').$news->news_index);
            @unlink(public_path('/news_files/').$news->news_file);
            DB::table('news')->where('news_id',$id)->delete();
            echo '<script>
                    alert("ลบข้อมูลเรียบร้อย");
                    window.location.href = "'.url('managenews').'" ;
            </script>';
        }else{
            echo '<script>
                    alert("ไม่สามารถลบข้อมูลได้");
                    window.location.href = "'.url('managenews').'" ;
            </script>';           
        }      
    }
   
    public function show($id)
    {
        $news_list = DB::table('news')->where('news_id',$id)->first();
        $data = array(
            'news_list' => $news_list,
        );
        return view('Backend.news.news_add', $data);
    }
    
    public function store_news(Request $request){
        
        $file_ref = rand();
        $values = array(
            'news_title_th'           => $request->input('news_title_th'),
            'news_title_en'           => $request->input('news_title_en'),
            'news_detail_th'          => $request->input('news_detail_th'),
            'news_detail_en'          => $request->input('news_detail_en'),
            'news_date'               => $request->input('news_date'),
            'news_member'             => $request->input('news_member'),
            'news_type'               => $request->input('news_type'),
            'news_ref'                => $file_ref,
            'news_create'             => date('Y-m-d H-i-s'),
            'news_update'             => date('Y-m-d H-i-s')
        );           

        if(!empty($request->file('news_index'))){
            $file = $request->file('news_index');
    
                $imagename = '';
                $imagename = date('Y-m-d-H-i-s').rand().'.jpg';

                $destinationPath_origi = public_path('/news/');            
                $thumb_img_origi = Image::make($file->getRealPath());
                $thumb_img_origi->save($destinationPath_origi.$imagename);

                $values['news_index'] = $imagename;
         
        }
       if(!empty($request->file('news_file'))){
            $file = $request->file('news_file');
            $i=0;
            foreach ($file as $_file) {
                $ext = $_file->getClientOriginalExtension();

                $file_upload = '';
                $file_upload = date('Y-m-d-H-i-s').rand().'.'.$ext;
                $destinationPath_origi = public_path('/news_files/');           
                File::move( $_FILES['news_file']['tmp_name'][$i] , $destinationPath_origi.$file_upload);

                $values_file['file_sort']   = $i;
                $values_file['file_name']   = $file_upload;
                $values_file['file_ref']    = $file_ref;
                $values_file['file_create'] = date('Y-m-d H-i-s');
                $values_file['file_update'] = date('Y-m-d H-i-s');
                
                DB::table('news_files')->insert($values_file);
                $i++;
            }
        }
 
        DB::table('news')->insert($values);

            if($request->input('news_type') == 1){
                $menu = 'managenews_sub/meeting';
            }elseif($request->input('news_type') == 2){
                $menu = 'managenews_sub/announcement';
            }elseif($request->input('news_type') == 3){  
                $menu = 'managenews_sub/subcommittees';
            }elseif($request->input('news_type') == 4){
                $menu = 'managenews_sub/rules';
            }elseif($request->input('news_type') == 5){
                $menu = 'managenews_sub/accreditations';
            }elseif($request->input('news_type') == 6){
                $menu = 'managenews_sub/newsevents';
            }else{
                $menu='';
            }

            echo '<script>
                        alert("บันทึกข้อมูลเรียบร้อย");
                        window.location.href = "'.url($menu).'" ;
                </script>';
    }

    public function update_news(Request $request){

        $values = array(
            'news_title_th'           => $request->input('news_title_th'),
            'news_title_en'           => $request->input('news_title_en'),
            'news_detail_th'          => $request->input('news_detail_th'),
            'news_detail_en'          => $request->input('news_detail_en'),
            'news_date'               => $request->input('news_date'),
            'news_member'             => $request->input('news_member'),
            'news_type'               => $request->input('news_type'),
            'news_update'             => date('Y-m-d H-i-s')
        );   

            if(!empty($request->file('news_index'))){
                $file = $request->file('news_index');
                    
                        $imagename = '';
                        $imagename = date('Y-m-d-H-i-s').rand().'.jpg';

                        $destinationPath_origi = public_path('/news/');            
                        $thumb_img_origi = Image::make($file->getRealPath());
                        $thumb_img_origi->save($destinationPath_origi.$imagename);

                $values['news_index'] = $imagename;
        }
        
        $file_old = DB::table('news')->where('news_id',$request->input('news_id'))->first();
        $file_ref = $file_old->news_ref;

                if(!empty($request->file('news_file'))){
                    $file = $request->file('news_file');
                    $i=0;
                    foreach ($file as $_file) {
                        $ext = $_file->getClientOriginalExtension();

                        $file_upload = '';
                        $file_upload = date('Y-m-d-H-i-s').rand().'.'.$ext;
                        $destinationPath_origi = public_path('/news_files/');           
                        File::move( $_FILES['news_file']['tmp_name'][$i] , $destinationPath_origi.$file_upload);

                        $values_file['file_sort']   = $i;
                        $values_file['file_name']   = $file_upload;
                        $values_file['file_ref']    = $file_ref;
                        $values_file['file_create'] = date('Y-m-d H-i-s');
                        $values_file['file_update'] = date('Y-m-d H-i-s');
                        
                        DB::table('news_files')->insert($values_file);
                        $i++;
                    }

                }

                    if($request->input('news_type') == 1){
                        $menu = 'managenews_sub/meeting';
                    }elseif($request->input('news_type') == 2){
                        $menu = 'managenews_sub/announcement';
                    }elseif($request->input('news_type') == 3){  
                        $menu = 'managenews_sub/subcommittees';
                    }elseif($request->input('news_type') == 4){
                        $menu = 'managenews_sub/rules';
                    }elseif($request->input('news_type') == 5){
                        $menu = 'managenews_sub/accreditations';
                    }elseif($request->input('news_type') == 6){
                        $menu = 'managenews_sub/newsevents';
                    }else{
                        $menu='';
                    }

        DB::table('news')->where('news_id',$request->input('news_id'))->update($values);

        echo '<script>
                    alert("บันทึกข้อมูลเรียบร้อย");
                    window.location.href = "'.url($menu).'" ;
            </script>';
    }
    public function delete_file($id,$main)
    {
        // dd($id);
        $file = DB::table('news_files')->where('file_id',$id)->first();
        if(file_exists(public_path('/news_files/').$file->file_name)){
            
            unlink(public_path('/news_files/').$file->file_name);
            DB::table('news_files')->where('file_id',$id)->delete();
            echo '<script>
                    alert("ลบข้อมูลเรียบร้อย");
                    window.location.href = "'.url('managenews/show/').'/'.$main.'" ;
            </script>';
        }else{
            echo '<script>
                    alert("ไม่สามารถลบข้อมูลได้");
                    window.location.href = "'.url('managenews/show/').'/'.$main.'" ;
            </script>';
         }
    }
}
