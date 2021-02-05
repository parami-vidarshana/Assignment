<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bank_branch extends Model
{
    protected $fillable = ['branch_id','bank_id', 'branch_name'.'branch_address']; 

    public function branch(){
        return $this->hasMany(App\employee::class);
    }
}
