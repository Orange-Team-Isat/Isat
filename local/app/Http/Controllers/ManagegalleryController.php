<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Carbon\Carbon;
use Hash;
use Image;
use PHPExcel;
use PHPExcel_IOFactory;
use App\Gallery;
use Datatables;
use PHPExcel_Cell;
use DB;

class ManagegalleryController extends Controller
{
    public function index()
    {
        $gallery = gallery::all();
        $data = array(
            'gallery' => $gallery
    );
        return view('Backend.gallery.gallery_list', $data);
    }
   
    public function create()
    {
        
        return view('Backend.gallery.gallery_add');
    }
    public function delete($id)
    {
        $gallery = DB::table('gallery')->where('gallery_id',$id)->first();
        $image = DB::table('image')->where('image_ref',$gallery->gallery_ref)->get();
        if(!empty($image)){
            foreach($image as $_image){
            unlink(public_path('/gallery/').$_image->image_file);
            DB::table('image')->where('image_id',$_image->image_id)->delete();
            }
        }
        if(file_exists(public_path('/gallery/').$gallery->gallery_index)){
    
            unlink(public_path('/gallery/').$gallery->gallery_index);
            DB::table('gallery')->where('gallery_id',$id)->delete();
            echo '<script>
                    alert("ลบข้อมูลเรียบร้อย");
                    window.location.href = "'.url('managegallery').'" ;
            </script>';
        }else{
            echo '<script>
                    alert("ไม่สามารถลบข้อมูลได้");
                    window.location.href = "'.url('managegallery').'" ;
            </script>';
        }
    }
    public function delete_image($id,$main)
    {
        // dd($id);
        $image = DB::table('image')->where('image_id',$id)->first();
        if(file_exists(public_path('/gallery/').$image->image_file)){
            
            unlink(public_path('/gallery/').$image->image_file);
            DB::table('image')->where('image_id',$id)->delete();
            echo '<script>
                    alert("ลบข้อมูลเรียบร้อย");
                    window.location.href = "'.url('managegallery/show/').'/'.$main.'" ;
            </script>';
        }else{
            echo '<script>
                    alert("ไม่สามารถลบข้อมูลได้");
                    window.location.href = "'.url('managegallery/show/').'/'.$main.'" ;
            </script>';
         }
    }
    public function show($id)
    {
        $gallery_list = DB::table('gallery')->where('gallery_id',$id)->first();
        $data = array(
            'gallery_list' => $gallery_list,
        );
        return view('Backend.gallery.gallery_add', $data);
    }
    public function store_gallery(Request $request){
        // dd($request->input(),$request->file());
        $gallery_ref = rand();
        $values = array(
            'gallery_ref'               => $gallery_ref,
            'gallery_title_th'             => $request->input('gallery_title_th'),
            'gallery_title_en'             => $request->input('gallery_title_en'),
            'gallery_detail_th'            => $request->input('gallery_detail_th'),
            'gallery_detail_en'            => $request->input('gallery_detail_en'),
            'gallery_date'              => $request->input('gallery_date'),
            'gallery_create'            => date('Y-m-d H-i-s'),
            'gallery_update'            => date('Y-m-d H-i-s')
        );           
        if(!empty($request->file('gallery_index'))){
            $file = $request->file('gallery_index');
            // foreach ($file as $_file) {
                $imagename = '';
                $imagename = date('Y-m-d-H-i-s').rand().'.jpg';

                $destinationPath_origi = public_path('/gallery/');            
                $thumb_img_origi = Image::make($file->getRealPath());
                $thumb_img_origi->save($destinationPath_origi.$imagename);

                $values['gallery_index'] = $imagename;
            // }
        }

        if(!empty($request->file('gallery_image'))){
            $file = $request->file('gallery_image');
            $i = 1;
            foreach ($file as $_file) {
                $imagename = '';
                $imagename = date('Y-m-d-H-i-s').rand().'.jpg';

                $destinationPath_origi = public_path('/gallery/');            
                $thumb_img_origi = Image::make($_file->getRealPath());
                $thumb_img_origi->save($destinationPath_origi.$imagename);

                $values_image['image_sort']     = $i;
                $values_image['image_file']     = $imagename;
                $values_image['image_ref']      = $gallery_ref;
                $values_image['image_create']   = date('Y-m-d H-i-s');
                $values_image['image_update']   = date('Y-m-d H-i-s');
                
                DB::table('image')->insert($values_image);
                $i++;
            }
        }

        DB::table('gallery')->insert($values);

        echo '<script>
                    alert("บันทึกข้อมูลเรียบร้อย");
                    window.location.href = "'.url('managegallery').'" ;
            </script>';
    }

    public function update_gallery(Request $request){
        // dd($request->input(),$request->file());

        $values = array(
            'gallery_title_th'             => $request->input('gallery_title_th'),
            'gallery_title_en'             => $request->input('gallery_title_en'),
            'gallery_detail_th'            => $request->input('gallery_detail_th'),
            'gallery_detail_en'            => $request->input('gallery_detail_en'),
            'gallery_date'              => $request->input('gallery_date'),
            'gallery_update'            => date('Y-m-d H-i-s')
        );           
        if(!empty($request->file('gallery_index'))){
            $file = $request->file('gallery_index');
            // foreach ($file as $_file) {
                $imagename = '';
                $imagename = date('Y-m-d-H-i-s').rand().'.jpg';

                $destinationPath_origi = public_path('/gallery/');            
                $thumb_img_origi = Image::make($file->getRealPath());
                $thumb_img_origi->save($destinationPath_origi.$imagename);

                $values['gallery_index'] = $imagename;
            // }
        }

        $gallery_old = DB::table('gallery')->where('gallery_id',$request->input('gallery_id'))->first();
        $gallery_ref = $gallery_old->gallery_ref;

        if(!empty($request->file('gallery_image'))){
            $file = $request->file('gallery_image');
            $i = 1;
            foreach ($file as $_file) {
                $imagename = '';
                $imagename = date('Y-m-d-H-i-s').rand().'.jpg';

                $destinationPath_origi = public_path('/gallery/');            
                $thumb_img_origi = Image::make($_file->getRealPath());
                $thumb_img_origi->save($destinationPath_origi.$imagename);

                $values_image['image_sort']     = $i;
                $values_image['image_file']     = $imagename;
                $values_image['image_ref']      = $gallery_ref;
                $values_image['image_create']   = date('Y-m-d H-i-s');
                $values_image['image_update']   = date('Y-m-d H-i-s');
                
                DB::table('image')->insert($values_image);
                $i++;
            }
        }

        DB::table('gallery')->where('gallery_id',$request->input('gallery_id'))->update($values);

        echo '<script>
                    alert("บันทึกข้อมูลเรียบร้อย");
                    window.location.href = "'.url('managegallery').'" ;
            </script>';
    }
    
}
