<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Countries extends Model
{
    use HasFactory;

    protected $table = 'countries';
    public $timestamps = false;
    // Define the fillable fields for mass assignment
    protected $fillable = [
        'country_code',
        'country_name'
    ];
}
