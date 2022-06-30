<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomersModel extends Model
{
    protected $table = "Customers";

    protected $fillable = ['customerID','customerFirstname','customerLastname','phone','address'];

    
}
