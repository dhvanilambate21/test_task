<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $table = "products";
    protected $fillable = [
        'product_name', 'product_price', 'product_stock', 'product_video'];

    public function shop()
    {
        return $this->belongsTo(Shop::Class);
    }
}
