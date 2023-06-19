<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarProduct extends Model
{
    use HasFactory;
    protected $table ='carproducts';
    protected $fillable =[
        'id_user',
        'id_product',
        'quantity',
    ];
}
