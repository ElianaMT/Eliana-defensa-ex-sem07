<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductRequierement extends Model
{
    use HasFactory;

    protected $table ='products_requierements';
    protected $fillable =[
        'product_id',
        'operational_system',
        'memory',
        'storage',
        'observations',
        'type'
    ];
}
