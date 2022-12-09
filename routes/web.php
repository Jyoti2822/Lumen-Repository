<?php
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
// use App\Models\Product;
// use Illuminate\Support\Facades\DB;
// use App\Events\Event;
// use App\Mail\NewMail;
// use Illuminate\Support\Facades\Mail;
// use App\Http\Controllers\PostController;
// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\TestController2;
/** @var \Laravel\Lumen\Routing\Router $router */

use App\Http\Controllers\TestController;

//------------------- Application Routes-----------------------------

//-----Route-1----------
$router->get('/',function() use ($router){
    return $router->app->version();
});
//Output- Returns the lumen version 

//-----Route-2-------------
// $router->get('/test-2','TestController@index');
// Output- Test Activated

//------Route-3-------------
// $router->get('/test-3',function() use ($router){
//     return 'test-3';

// });
//Output-test-3

//------Route-4--------------
//with parameters
// $router->get('/{id}',function ($id) use ($router){
//     return "params:{$id}";
// });
//Output-params:2 or can be params:abcd

//------Route-5---------------
//using regular expression
// $router->get('/{id:[0-9]+}/detail',function ($id) use ($router){
//     return "params:{$id}";
// });

//Output-params:22

//------Route-6---------------
//Optional Path
// $router->get('/test-6[/{id}/details]',function()use ($router){
//     return "optional path";
// });
//Output- (with and without  URI as- http://localhost:8000/test-6/2/details)- optional Path

//------Route-7---------------
//using middleware
// $router->get('/',['middleware'=>'auth',function(){
//     return "optional path";
// }]);
//Output-Unauthorized




// // // ----Database Route------------------------------------------------------
// $router->get('/students','StudentController@index');
// $router->get('/students/{id}','StudentController@show');
// $router->post('/students/create','StudentController@store');
// $router->post('/students/update/{id}','StudentController@update');
// $router->delete('/students/delete/{id}','StudentController@destroy');
// $router->get('/', function () use ($router) {
//     return $router->app->version();
//     });

// $router->get('/all','BookController@index');

























// $app->routeMiddleware([
//    'auth' => App\Http\Middleware\Authenticate::class,
// ]);

//  $router->get('/', ['middleware'=>['auth'] ,function () use ($router) {
//     return $router->app->version();
// //  }]);
// $router->get('/', function () use ($router) {
//     return $router->app->version();
//     });

//  $router->get('/exm-test', 'ExampleController@index'); //some test

//  $router->get('/test', ' ExampleController@index');
 
//BASIC ROUTING 
// $router->get('func', function () {
//     return 'Hello World';
// }); 
// Output - Hello World
 
//ROUTE PARAMETERS

// $router ->get('Name/{name}/Age/{age}/Place/{place}',function($name,$age,$place){
//     return 'Student Name:' .$name. 'Student Age: '.$age. 'Student Place: '.$place;

// });
//Output - Student Name:JyotiStudent Age: 20Student Place: Shimla


//OPTIONAL PARAMETERS
// $router->get('user[/{age}]',function ($age=null){
//     return 'UserAge: '.$age;
// });

//Output- UserAge: 20


//REGULAR EXPRESSION CONSTRAINTS
// $router->get('user/{name: [A-Za-z]+}', function($name){
//     return $name;
// });
//oUTPUT- jyoti


//NAMED ROUTES

// $router->get('user/{id}/profile', ['as'=>'profile',function($id){

// }]);
// $url=route('profile',['id'=>1]);
// return redirect()->route('profile');

// $router->get('user/{id}/profile', ['as' => 'profile', function ($id) {
//     echo "<br>";
//    return $id;
// }]);
// $url = route('profile', ['id' => 400]);
// echo $url;

//OUTPUT- 
//http://:/user/400/profile
//1133


// $router->group(['prefix' => 'admin'], function () use ($router) {
//     $router->get('users', function () {
//         return "HELLO";
//     });
// });

//OUTPUT- HELLO


// $router->get('hello', ['middleware'=>'hello:22',function(){
    
//     echo "hello<br>";
// }]);
  
// $router ->get('/', function() use ($router){
//     return $router->app->version();
// });
// $router->get('/test','TestController@index');

// $router ->get('/', function() use ($router){
//     return $router->app->version();

// });

// $router->get('/test/{id}/details', ['middleware' =>'auth', 'uses' =>
// 'Admin\TestAdminController@index']); //Unauthorized.

// $router->get('/test/{id}/details', ['uses' =>
// 'Admin\TestAdminController@index', 'as'=>'testAdmin']); //Test Admin Controller Activated- GET 45

// $router ->get('/',function()use($router){ 

//     return $router->app->version();

// });
//$router->get('/ex-test','ExampleController@index');
// $router->get('/ex-test/{id}/details','ExampleController@index');
// $router->get('/ex-test','ExampleController@index');
//$router->get('/ex-test','ExampleController@index');//^ "http://localhost:8000/ex-test"


//$router->get('/post/{id}', ['middleware' => 'auth', function (Request $request, $id) {
    // $user = Auth::user();
    // $user = $request->user();

    // return $id;

    //
// }]);

// $router->get('/products','ProductController@index');
// $router->get('/products/{id}','ProductController@show');
//  $router->post('/products/update/{id}','ProductController@update');
// $router->delete('/products/delete/{id}','ProductController@destroy');
// $router->post('/products/create','ProductController@store');

// $router->get('/products', 'ProductController@index');
// $router->get('/products/{title}', 'ProductController@show');
// $router->post('/products/create', 'ProductController@store');
// $router->post('/products/update/{id}', 'ProductController@update');
// $router->delete('/products/delete/{id}', 'ProductController@destroy');
// $router->get('search/{title}','ProductController@search');




// use illuminate\Support\Facades\DB;//database   with facades

// $router->get('/item', function () use ($router) {
//     $products=DB::select('select*from products where id=?',[4]);
//     dd($products);
//     return $router->app->version();
// });

// $router->get('/item2', function () use ($router) {
//     $products=DB::update('update products set description = "it is a new item" where title = ?',['title2']);
//     dd($products);
//     return $router->app->version();


// });

// $router->get('/item3', function () use ($router) {
//     $products=DB::delete('delete from products where description=?',['nice']);
//     dd($products);
//     return $router->app->version();

    
// });


// $router->get('/item4', function () use ($router) {
//     $products=DB::insert('insert into products (id, title,price,description) values (?, ?,?,?)', [2, 'tile4',200,'this is an inserted item']);
//     dd($products);
//     return $router->app->version();

    
// });

// $router->get('/item', function () use ($router) {
//     $products=DB::insert('insert into products (id, title,price,description) values (?, ?,?,?)', [2, 'tile4',200,'this is an inserted item']);
//     dd($products);
//     return $router->app->version();

   
// });


// $router->get('/item11', function () use ($router) {
//     $products=DB::table('products')->get();
//     dd($products);
//    foreach ($products as $product){
//     echo $product ->title;
//    }
//     return $router->app->version();
    
   
// });


// $router->get('/item12', function () use ($router) {
//     $products=DB::table('products')->where('title', 'tile4')->first();
//
    //  dd($products);
//     foreach ($products as $product){
//         echo $product ->description;
//        }
//         return $router->app->version();
//     });


// $router->get('/item13', function () use ($router) {
//         $products=DB::table('products')->where('title', 'tile4')->value('id');
//          dd($products);
        
//         return $router->app->version();  
       
//     });

//     $router->get('/item14', function () use ($router) {
//         $products=DB::table('products')->find(1);
//          dd($products);
        
//         return $router->app->version();  
       
//     });


//     $router->get('/item15', function () use ($router) {
//         $products=DB::table('products')->pluck('id');
 
//         foreach ($products as $id) {
//             dd($products);
//             echo $id;
//         }
//             return $router->app->version();
//         });

// // $router->get('/item16', function () use ($router) {
// //     $products=DB::table('products')->where('active',false)
// //     ->chunkById(100, function ($products) {
// //        foreach ($products as $product) {
// //         DB::table('products')
// //         ->where('id', $product->id)
// //         ->update(['active' => true]);
// // }
// // });
// //             return $router->app->version();
// //             });

// $router->get('/item17', function () use ($router) {
//     $products=DB::table('products')->count();
//      dd($products);
    
//     return $router->app->version();  
   
// });

// $router->get('/item18', function () use ($router) {
//     $products=DB::table('products')->max('price');
//      dd($products);
    
//     return $router->app->version();  
   
// });

// $router->get('/item19', function () use ($router) {
//     $products=DB::table('products')
//     ->where('title', "title1")
//     ->avg('price');
//      dd($products);
    
//     return $router->app->version();  
   
// });

// $router->get('/item20', function () use ($router) {
//     $products=DB::table('products')
//     ->select('title', 'price as price_amt')
//     ->get();
//     dd($products);
    
//     return $router->app->version();  
   
// });


// $router->get('/item21', function () use ($router) {
//     return DB::table('products')
//     ->select('title', 'price as price_amt')
//     ->get();
    
    
//     return $router->app->version();  
   
// });


// $router->get('/item21', function () use ($router) {
//     $products=DB::table('products')->distinct()->get();
//     dd($products);
//     return $router->app->version();  
   
// });

// $router->get('/item22', function () use ($router) {
//     $products=DB::table('products')
//     ->select(DB::raw('count(*) as product_count'))
//     ->groupBy('description')
//     ->get();
//     dd($products);
//     return $router->app->version();  
   
// });


// $router->get('/item23', function () use ($router) {
//     $products=DB::table('products')
//     ->selectRaw('price * ? as price_with_tax', [1.0825])
//     ->get();
//     dd($products);
//     return $router->app->version();  
   
// });


// $router->get('/item24', function () use ($router) {
//     $products=DB::table('products')
//     ->orderByRaw('updated_at - created_at DESC')
//     ->get();
//     dd($products);
//     return $router->app->version();  
   
// });

// $router->get('/item25', function () use ($router) {
//     $products=DB::table('products')
//     ->select('id', 'price')
//     ->groupByRaw('id, price')
//     ->get();
//     dd($products);
//     return $router->app->version();  
   
// });


// $router->get('/item26', function () use ($router) {
//     $products=DB::table('products')
//     ->where('id', '=', 1)
//     ->where('price', '>', 20)
//     ->get();
//     dd($products);
//     return $router->app->version();  
   
// });


// $router->get('/item27', function () use ($router) {
//     $products=DB::table('products')->where([
//         ['price', '=', '100'],
        
//     ])->get();
//     dd($products);
//     return $router->app->version();  
   
// });



// $router->get('/item28', function () use ($router) {
//     $products=DB::table('products')
//     ->where('is', '>', 1)
//     ->orWhere(function($query) {
//         $query->where('title','title2');
              
//     })
//     ->get();
//     dd($products);
//     return $router->app->version();  
   
// });

// $router->get('/item29', function () use ($router) {
//     $products=DB::table('products')
//     ->orderBy('id', 'desc')
//     ->orderBy('title', 'asc')
//     ->get();
//     dd($products);
//     return $router->app->version();  
   
// });

// $router->get('/item30', function () use ($router) {
//     $products=DB::table('products')
//     ->inRandomOrder()
//     ->first();
//     dd($products);
//     return $router->app->version();  
   
// });

// $router->get('/item31', function () use ($router) {
//     $products=DB::table('products')->insertOrIgnore([
//         ['id' => 5, 'title'=>"title5"],
       
//     ]);
//     dd($products);
//     return $router->app->version();  




// });

// $router->get('get_data','ProfileController@index_profile');


//-----------------Encryption------------------------------------

// $router->get('/self', function () use ($router) {

//     $name= Crypt::encrypt('Riya');

//     dd($name);

//     return $router->app->version();

// });


   
//Decryption


// $router->get('/self1', function () use ($router) {

//     $name= Crypt::encrypt('Riya');
//     $name_dec=Crypt::decrypt($name);
//     dd($name_dec);
//     return $router->app->version();

// });



// $app->get('/demo-events', function() use($app){
//     Event::dispatch(new App\Events\ExampleEvent());
// });

// $router->get('event','UsersAuth@index');

// $router->get('/mail', function() {
//     Mail::to(['ypg696@gmail.com'])->send(new newMail);

//     return new newMail;
// });

// $router->get('/', function() {
//     // return view('welcome');
//  });
// //  Route::get('/posts/{post}',[PostController::class,'show']);
// $router->get('/posts/{post}','PostController@show');

// $router->get('pay','PayOrderController@store');
//$router->get('/serve', 'TestController2@doAwsome');


// $router->get('/', function() use ($router){
//     return $router->app->version();

// });
// $router->group(['prefix'=> 'api/v1/'], function() use($router){
//     $router->get('customers', 'CustomerController$all');
//     $router->post('customer', 'CustomerController@createCustomer');
//     $router->get('customer/{id}', 'CustomerController@getById');
//     $router->put('customer/{id}', 'CustomerController@updateCustomer');
//     $router->delete('customer/{id}', 'CustomerController@deleteCustomer');
// });





// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });

// //----------To check with /test URI for a local ROute--------

// $router->get('/test', ['middleware'=>['example'], function () use ($router) {
//     return $router->app->version();
// }]);

// // $router->get('/test', ['middleware'=>['example:param1, param2'], function () use ($router) {
// //     return $router->app->version();
// // }]);





//---------------------------------------------------------------------------------------------------------------------------------------------------------


// // Middleware Route-1

//     $router->get('/', function () use ($router) {

//     return "example 1 is working";

// });


// /************************************* */

// //  Middleware Route-2
//     $router->get('/', function () use ($router) {
//     return "example 2 is working";

// });



// // Middleware Route-3
// $router->get('/new',['middleware'=>['example:parameter1,parameter2'] ,function () use ($router) {

//     return "example 3 is working";

// }]);

// //******************************** */

// // Middleware Route-4

//     $router->get('/new',['middleware'=>['example:parameter1,parameter2'] ,function () use ($router) {

//         return "example 4 is working";

//     }]);

// //****************************** */



// // Middleware Route-5

//     $router->get('/new',['middleware'=>['example:parameter1,parameter2'] ,function () use ($router) {

//         return "example 5 is working";

//     }]);


//-------------------------------Request Route-------------------------------
// -------Request1, 2,3,4 route-----------------------
// $router->get('/test','ExampleController@index');

// //Request 5 route
// $router->get('/test/{id}/details','ExampleController@index');

// //Request6 route
// $router->get('/test','ExampleController@index');


//Request7 route
// $router->post('/test','ExampleController@index');

//-------------------------------Response Route---------------------------------------------------

//Response-1

// $router->get('/main','ExampleController@index');
// $router->get('/redirecting','ExampleController@redirect1');


// //Response 2

// $router->get('/main','ExampleController@index');
// $router->get('/redirecting',['as'=>'resp','uses'=>'ExampleController@redirect1']);

// Response3
// // $router->get('/main/{id}','ExampleController@index');
// // $router->get('/redirecting',['as'=>'resp','uses'=>'ExampleController@redirect1']);


// // $router->get('/data','ExampleController@index');


// // $router->get('/key', function() {
// //     return \Illuminate\Support\Str::random(32);
// // });

// $router->get('/mongo','MongoTest@mongoConnect');
$router->get('/user','UserController@index');


