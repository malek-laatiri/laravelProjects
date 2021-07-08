<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
   protected $fillable=[
       'user_id',
       'brand_id',
       'file_id',
       'category_id',
       'name',
       'description',
       'price'
   ];
}
