<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PharmacyInfo extends Model
{
    public $table = 'PharmacyInfos';
    protected $fillable = [
         'RegID','PharmacyName','OwnerName','email','password',
    ];
}
