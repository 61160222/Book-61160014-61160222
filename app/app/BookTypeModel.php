<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookTypeModel extends Model
{
    protected $table="BookType";
    protected $fillable=[
    'BookTypeCode','BookTypeName','Rate'
    ];
}
