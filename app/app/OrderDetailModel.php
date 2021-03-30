<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetailModel extends Model
{
    protected $table="OrderDetail";
    protected $fillable=[
        'Mem_ID','OrderNumber','TUnit','TPrice',
        'BookCode','BookName','BookPrice','Delivered'

    ];
}
