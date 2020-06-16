<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function dsDivision(){
        return $this->belongsTo(DsDivision::class );
    }
}
