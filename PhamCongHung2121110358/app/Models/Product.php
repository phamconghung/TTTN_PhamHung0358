<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Product_images;
class Product extends Model
{
    use HasFactory;
    protected $table = 'product';
    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    //////////////////////////////////////////////////////
    public function orderdetail(): HasMany
    {
        return $this->hasMany(OrderDetail::class);
    }
    public function images(): HasMany
    {
        return $this->hasMany(Product_images::class,'product_id','id');
    }
    public function sale()
    {
        return $this->hasOne(Product_sale::class);
    }
    public function store()
    {
        return $this->hasOne(Product_store::class);
    }
}
