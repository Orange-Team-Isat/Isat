<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    protected $table = 'users';
    protected $fillable = ['user_no','user_hn','user_id','user_name','user_surname','user_year','user_emsex','user_company','user_department'
                            ,'user_position','user_type','user_date','user_time','user_group','user_1','user_2','user_3','user_4','user_5'
                        ,'user_6','user_7','user_8','user_9','user_10','user_11','user_12','user_13','user_14','user_15','user_16','user_17','user_18'
                        ,'user_19','user_20','user_21','user_22','user_23','user_24','user_25','user_26','user_27','user_28','user_29','user_30'
                        ,'user_31','user_32','user_33','user_34','user_35','user_36','user_37','user_38','user_39','user_40','user_position','user_checkout'];

    public function company_show(){
        return $this->hasOne('App\Company','id','user_company');
    }
    public function check_station(){
        return $this->hasMany('App\Check_station','station_user_ref','id')->orderby('station_list','desc');
    }
    public function check_station_fornt(){
        return $this->hasMany('App\Check_station','station_user_ref','id')->where('station_active',1)->orderby('station_list','desc');
    }
}
