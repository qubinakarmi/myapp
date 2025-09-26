<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    function getNameAttribute($val)
  {
   return ucfirst($val);
 
  }


      function getCityAttribute($val)
  {
   return "+977-".$val;
 
  }


    function setCityAttribute($val)
  {

 
  }

}
