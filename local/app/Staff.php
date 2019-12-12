<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = 'staff';
    protected $fillable = ['staff_username','staff_name','staff_password'];
    protected $hidden = [
        'staff_password', 'remember_token',
    ];
}
