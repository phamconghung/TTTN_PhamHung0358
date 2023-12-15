<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_store extends Model
{
    use HasFactory;
    protected $table = 'product_store';
    protected $fillable = ['store_name', 'price_store'];
}
