<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bank extends Model
{
    protected $fillable = ['bank_id', 'bank_name']; 

    public function branch(){
        return $this->hasMany(App\bank_branch::class);
    }
}
