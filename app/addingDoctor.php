<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class addingDoctor extends Model
{
    public $table = 'addingDoctors';
    protected $fillable = [
        'RegID', 'name', 'email',
    ];
}
