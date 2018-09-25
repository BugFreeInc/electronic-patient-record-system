<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DoctorInfo extends Model
{
    public $table = 'DoctorInfos';
    protected $fillable = [
        'name', 'RegID','Qualification','Specialist','email','password',
    ];
    
}
