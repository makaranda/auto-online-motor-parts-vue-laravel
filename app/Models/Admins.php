<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admins extends Model
{
    use HasFactory;
    protected $table = 'admins_tbl';
    public $timestamps = false;
    // Define the fillable fields for mass assignment
    protected $fillable = [
        'admin_name',
        'admin_address',
        'admin_phone',
        'user_name',
        'password',
        'password_re',
        'date_time'
    ];

}
