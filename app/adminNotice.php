<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class adminNotice extends Model
{
    protected $fillable=['noticeSubject','noticeMassage'];
}
