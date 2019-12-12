<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\users;
use App\Company;
use Carbon\Carbon;

class SiteController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }
    public function search(Request $request)
    {
        $company = Company::where('company_code', $request->code)->get();
        if (count($company) != 0) {
            $data = array(
                'code' => $request->code
            );
            return view('frontend.search', $data);
        } else {
            $error = 1;
            $data = array(
                'error' => $error
            );
            return view('frontend.index', $data);
        }
    }
    public function zero_fill($vget, $vnum = "4")
    {
        $vpost = str_pad($vget, $vnum, "0", STR_PAD_LEFT);
        return $vpost;
    }
    public function search_show($id)
    {
        $new_id = explode("&", $id);
        $user = users::leftjoin('company', 'company.id', '=', 'users.user_company')
            ->where('company.company_code', $new_id[1])
            ->where('users.user_id', $new_id[0])
            ->where('company.company_active', 1)
            ->selectRaw('users.*,users.id as user_id,users.user_id as user_id_show,company.*')
            ->first();
        $send_id = $user->user_id_show . '&' . $new_id[1];
        $register = 0;
        $user_update = users::find($user->user_id);
        if ($user_update->user_hn != null) {
            $register = 1;
        }
        $group_station = count($user_update->check_station_fornt);
        $group = $user_update->check_station_fornt;
        $list_show = null;
        $i = 0;
        foreach ($group as $key => $value) {
            foreach ($value->call_list as $key => $value_call) {
                $list_show .= $value_call->stl_name . ', ';
                ++$i;
            }
        }
        $data = array(
            'user' => $user,
            'register' => $register,
            'show_list' => $list_show,
            'new_count' => $i,
            'id' => $send_id,
            'total' => $group_station,
        );
        return $data;
    }
    public function search_show_name($id)
    {
        $new_id = explode("&", $id);
        $user = users::leftjoin('company', 'company.id', '=', 'users.user_company')
            ->where('company.company_code', $new_id[1])
            ->where('users.user_name', 'like', '%' . $new_id[0] . '%')
            ->where('company.company_active', 1)
            ->selectRaw('users.*,users.id as user_id,users.user_id as user_id_show,company.*')
            ->first();
        $send_id = $user->user_id_show . '&' . $new_id[1];
        $register = 0;
        $user_update = users::find($user->user_id);
        if ($user_update->user_hn != null) {
            $register = 1;
        }
        $group_station = count($user_update->check_station_fornt);
        $group = $user_update->check_station_fornt;
        $list_show = null;
        $i = 0;
        foreach ($group as $key => $value) {
            foreach ($value->call_list as $key => $value_call) {
                $list_show .= $value_call->stl_name . ', ';
                ++$i;
            }
        }
        $data = array(
            'user' => $user,
            'register' => $register,
            'show_list' => $list_show,
            'new_count' => $i,
            'id' => $send_id,
            'total' => $group_station,
        );
        return $data;
    }
    public function printlabel($id)
    {
        \DB::beginTransaction();
        $new_id = explode("&", $id);
        $user_get = users::leftjoin('company', 'company.id', '=', 'users.user_company')
            ->where('company.company_code', $new_id[1])
            ->where('users.user_id', $new_id[0])
            ->selectRaw('users.*,users.id as user_id,users.user_id as user_id_show,company.*')
            ->first();
        $user_count = users::leftjoin('company', 'company.id', '=', 'users.user_company')
            ->where('company.company_code', $new_id[1])
            ->whereNotNull('users.user_hn')
            ->where('company.company_active', 1)
            ->get();
        if (!empty($user_count)) {
            $new_hn = count($user_count) + 1;
        } else {
            $new_hn = 1;
        }
        // $gen_ran = rand(10,99);
        $new_number = $this->zero_fill($new_hn);
        $company_number = $user_get->company_show->company_code;
        $user_update = users::find($user_get->user_id);
        if ($user_update->user_hn == null) {
            $user_update->user_hn = $company_number . $new_number;
            $user_update->user_date = Carbon::now()->format('Y-m-d');
            $user_update->user_time = Carbon::now()->format('H:i:s');
            $user_update->update();
        }
        if (!$user_update) {
            \DB::rollback();
            return back();
        }
        \DB::commit();
        $user = users::find($user_update->id);
        $data = array(
            'user' => $user_update,
        );
        return view('frontend.printlable', $data);
    }
}
