<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB\Client as Mongo;

class MongoTest extends Controller
{
    //
    function mongoConnect(){
        // echo "code will be here";
        $mongo=new Mongo;
        $connection=$mongo->lumen->lumenCollect;
        return $connection->find()->toArray();
    }}

    
