<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerCompelteOrderParts extends Model
{
    use HasFactory;
    protected $table = 'customer_compelte_order_parts_tbl';
    public $timestamps = false;
    // Define the fillable fields for mass assignment
    protected $fillable = [
        'ordered_code',
        'customer_code',
        'customer_request_code',
        'vendor_estimate_code',
        'main_cat_url',
        'vendor_code',
        'item_name',
        'unit_measurement',
        'no_of_unit',
        'cus_image',
        'unit_price',
        'cus_description',
        'total_price',
        'vat',
        'net_total',
        'stock_available',
        'vendor_comment',
        'status',
        'notifications',
        'ordered_date'
    ];
}
