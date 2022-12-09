<?php

namespace App\Http\Controllers;
use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){
        $user=new UserModel();
// $user->_id="557afc91c0b20703009f7ed";
// $user->year="2021";
// $book->save();
   $user=UserModel::all();
    return response()->json($user);

    }}
  