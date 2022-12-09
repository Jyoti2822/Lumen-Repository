<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\AwsomeServiceInterface;

class TestController2 extends Controller
{
    public function doAwsome(AwsomeServiceInterface $awsome_service){

        $awsome_service->doAwsomeThing();

    }
}
