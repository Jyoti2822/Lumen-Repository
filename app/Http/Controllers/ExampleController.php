<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


// use Psr\Http\Message\ServerRequestInterface;


// class ExampleController extends Controller
// {
//     public function index(){
//         // $results = DB::select("SELECT * FROM demotab");
//         // return response()->json($results);

        
//         $users = DB::table('demotab')->get();
         
//         foreach ($users as $user)
//         {
//             var_dump($user->name);
//         }
//         // return response()->json($users);
    
    // }
    // }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     //
    // }
    //  public function index(){
    //     return "Some test!"; //Some test!
    //  }
    //public function index(Request $request){
        
        //dd($request);//get attributes of request objects
        //dd($request->path());//^ "ex-test"
        // dd($request->fullUrl());//^ "http://localhost:8000/ex-test"
        //dd($request->fullUrl());
        // return "Some test! {$id}"; //Some test!
     //dd($request->method());//^ "GET"
 
    // dd($request->isMethod('get'));//^ true
    //  dd($request->isMethod('post'));//^ false
    // dd($request ->only('name'));

    // dd($request ->file());
    
// public function index(){
//     return "some test";

//return response(["name"=> "some test"],201,['Content-Type'=>'Application/Json','header-1'=>"some header value"]);//{"name":"some test"}
// return response(["name"=>"some content"])
//          ->withHeaders(['Content-Type'=>'Application/Json']);//{"name":"some content

//    }
// public function index(){
    

//--------------------------------------Request---------------------------------------------
//-----Request1 (Simple form of request)-----------------------
// class ExampleController extends Controller
// {
// public function __construct(){
// }
// public function index(){
    // return "Some test!";
// }
//----Request2 (Request dependency injection)-------------------
// public function __construct(){
// }
// public function index(Request $request){

//     dd($request);
//     return "Some test!";
// }

//------Request3 (Request to get the URI of the request)----------------
// public function __construct(){
// }
// public function index(Request $request){

//     dd($request->path());
//     return "Some test!";
// }
// }

//--------Request4 (Request to get full URl for the request)---------------
// public function __construct(){
// }
// public function index(Request $request){

//     dd($request->fullUrl());
//     return "Some test!";
// }
// }

//---------Request5 (request if we have parameters in the path)----------------
// public function __construct(){
// }
// public function index(Request $request, $id){
//     return "Some test! {$id}";
// }
// }

//----------Request6 ( Request to get the method details)------------------------
// public function __construct(){
// }
// public function index(Request $request){
//         dd($request->isMethod('get'));
  
// }
// }

//---------Request7 (request to pass parameters using API)-------------------------
// public function __construct(){
// }
// public function index(Request $request){
//         // dd($request->all());
//         // dd($request->only('name'));
//         // dd($request->except('name'));
//         dd($request->input('name'));
// }


//------------------------------------------Response--------------------------------------
//Resonse1
class ExampleController extends Controller
{
// public function index(){
//     return redirect('/redirecting');
// }
// public function redirect1(){
//     return "Redirect Successful!";
// }}

//Response2 

public function index(){
    return redirect()->route('resp');
}
public function redirect1(){
    return "Redirect Successful!";
}}

//Response 3
// public function index(){
//     return redirect()->route('resp',['id'=>1]);
// }
// public function redirect1(){
//     return "Redirect Successful!";
// }
// }


//--------------------------------Query Builder---------------------------------------------------------

//1. Selects 
// class ExampleController extends Controller
// {
//     public function index(){
       
//         $users = DB::table('migrations')->get();
//         foreach ($users as $user)
//         {
//             var_dump($user->PessengerName);
//         }
//     }}

//2.Chunking results from a table

// class ExampleController extends Controller
// {
//     public function index(){
       
//    DB::table('demotab')->chunk(100,function($users){

//         foreach ($users as $user)
//         {
//             var_dump($user->name);
//         }
        
//     });
// }}

//3.Returning single row

// class ExampleController extends Controller
// {
//     public function index(){
       
   
//     $user = DB::table('demotab')->where('name', 'Jyoti')->first();
 
//var_dump($user->name);
    
// }}

//4.Reterieving single coloumn from table

// class ExampleController extends Controller
// {
//     public function index(){
       
   
//         $gender = DB::table('demotab')->where('name', 'Jyoti')->pluck('gender');
//         return   $gender;
// }}

//6. Retrieving list of values
// class ExampleController extends Controller{
//     public function index(){
//         $gender = DB::table('demotab')->pluck('gender', 'name');
//     return $gender;
//     }
// }

//7. Specify a single clause

// class ExampleController extends Controller
// {
//     public function index(){
    
//         // $users = DB::table('demotab')->select('name', 'age')->get();      
        
//         // $users = DB::table('demotab')->distinct()->get(); 
//         $users = DB::table('demotab')->select('name as user_name')->get();
//         return $users;
// }}

//8. Adding a select clause to an existing query


// class ExampleController extends Controller
// {
//     public function index(){
            
//         $query = DB::table('demotab')->select('name');  
//         $users = $query->addSelect('age')->get();  
//             return $users;
// }}

// 9. Using Where Operator

// class ExampleController extends Controller
// {
//     public function index(){
            
//      $users = DB::table('demotab')->where('age','>',20)->get();

//             return $users;
// }}

//10. Or Statment

// class ExampleController extends Controller
// {
//     public function index(){
            
//         $users = DB::table('demotab')
//         ->where('age', '<', 21)
//         ->orWhere('name', 'Sanjana')
//         ->get();
//             return $users;
// }}

//11. Use where between
// class ExampleController extends Controller
// {
//     public function index(){
            
//         $users = DB::table('demotab')
//         ->whereBetween('id', [1, 3])->get();
//             return $users;
// }}

//12.User not Between
// class ExampleController extends Controller
// {
//     public function index(){
            
//         $users = DB::table('demotab')
//         ->whereNotBetween('id', [2, 4])->get();

//             return $users;
// }}

//13.Using where in with an array
// class ExampleController extends Controller
// {
//     public function index(){
            
//         $users = DB::table('demotab')
//         ->whereIn('id', [1, 2, 3])->get();

// $users = DB::table('migrations')
//         ->whereNotIn('id', [1,3])->get();

//             return $users;
// }}