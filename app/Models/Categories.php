<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    protected $table = 'categories_tbl';
    public $timestamps = false;
    protected $fillable = [
        'category_id',
        'type_of_need',
        'category_name',
        'category_link_name',
        'category_image'
    ];
}
