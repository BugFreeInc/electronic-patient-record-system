<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prescribtion extends Model
{
    public $table = 'Prescribtions';
    protected $fillable = [
        'nid', 'Diseaseinfo','Medicine','Date',
    ];
}
