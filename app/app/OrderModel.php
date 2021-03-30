<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderModel extends Model
{
    protected $table="Order";
    protected $fillable=[
    'Mem_ID','OrderNumber','BookCodeO','BookName''BookPrice',
    'OrderUint','Total','Totall'
    ];
}
