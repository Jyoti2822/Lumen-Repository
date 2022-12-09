<?php

namespace App\Models;
use Jenssegers\Mongodb\Eloquent\Model;
// use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $collection='users';
}
