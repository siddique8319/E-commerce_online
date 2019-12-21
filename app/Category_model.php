<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category_model extends Model
{
   protected $table='Categories';
   protected $primaryKey='id';
   protected $fillable=['name'];

}
