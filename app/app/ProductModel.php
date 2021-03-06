<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    protected $table = "Products";

    protected $fillable = ['ProductID','TypeOfShirt','Size','PricePerItem'];
}
