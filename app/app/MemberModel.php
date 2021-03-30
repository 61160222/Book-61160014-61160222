<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MemberModel extends Model
{
    protected $table="Member";
    protected $fillable=[
    'Mem_ID','Username','Name','Address','BirthDate','Telphephon','Email','IDCard'
    ];
}
