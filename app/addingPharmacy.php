<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class addingPharmacy extends Model
{
    public $table = 'addingPharmacys';
    protected $fillable = [
        'RegID', 'name', 'email',
    ];
}
