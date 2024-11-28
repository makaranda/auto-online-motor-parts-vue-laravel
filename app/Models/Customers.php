<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;
    protected $table = 'customers_tbl';
    public $timestamps = false;
    protected $fillable = [
        'customer_code',
        'first_name',
        'last_name',
        'whatsapp_no',
        'mobile_no',
        'nic',
        'user_image',
        'email_address',
        'company_name',
        'province',
        'district',
        'user_password',
        'user_password_re',
        'verification_code',
        'is_verify',
        'joined_date'
    ];
}
