<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table="orders";
protected $primaryKey = 'id';
public $incrementing = false;
const CREATED_AT = 'created_at';
const UPDATED_AT = 'updated_at';
protected $fillable = ['title','id','description','price'];
}
