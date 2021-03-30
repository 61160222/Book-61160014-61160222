<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookModel extends Model
{
    protected $table="Book";
    protected $fillable=[
    'BookCode','BookName','BookTypeCode','BookPrice','BookStock','BooktDetails','BookNote'
    ];
}
