<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Host extends Authenticatable
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
    	'name',
    	'email',
    	'phone',
    	'password',
        'google_id',
    	'profile_image',
        'gender',
        'dob',
    	'otp',
    	'status'
    ];
}
