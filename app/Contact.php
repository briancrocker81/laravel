<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public $fillable = ['title','name','company_name','job_title','email','phone_number','mobile_number','address','notes'];
}
