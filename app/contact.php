<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    public $table = 'contacts';
    protected $fillable = [
        'name', 'email','mobile','subject','massage',
    ];
}
