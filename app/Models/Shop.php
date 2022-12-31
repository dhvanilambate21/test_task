<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;
    public $table = "shops";
    protected $fillable = [
        'shop_name', 'shop_address', 'shop_email', 'shop_image'];

    public function products()
    {
        return $this->hasMany(Product::Class,'shop_id','id');
    }

}
