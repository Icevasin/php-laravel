<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TheSellerModel extends Model
{
    protected $table = "TheSeller";

    protected $fillable = ['SellerID','SellerFirstname','SellerLastname','Email','Phone','Address'];
}
