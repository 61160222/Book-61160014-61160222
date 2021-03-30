<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingModel extends Model
{
    protected $table="Shopping";
    protected $fillable=[
    'Mem_ID','Name','Address','Telphephon','Email'
    ];
}
