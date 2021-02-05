<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected $fillable = ['emp_id','branch_id', 'emp_name'.'emp_email','emp_photo','emp_address','emp_password']; 
}
