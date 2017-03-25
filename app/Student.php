<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable=['name','fb','school','gender','birth','identity','blood','email','cellphone','phone','address','parentname','parentphone','relation','size','group','groupname','food','illness','selfintro','motivation','getnewsfrom'];
}
