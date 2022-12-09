<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profile extends Model
{
public $timestamp=false;
protected $primaryKey='id';
public $incrementing = false;
public $table="profiles";
use SoftDeletes;
protected $fillable = ['title','id','description','price'];}








