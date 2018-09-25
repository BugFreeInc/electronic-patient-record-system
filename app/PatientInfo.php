<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PatientInfo extends Model
{
    public $table = 'PatientInfos';
    protected $fillable = [
        'name', 'nid','email','password',
    ];
}
