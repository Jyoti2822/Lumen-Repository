<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;

use Illuminate\Http\Request;
use App\Models\Profile;


class ProfileController extends Controller
{
  
 
    //
   function index_profile(){
//         //return Profile::all();
//         // return Profile::where("id",2)->get();
//         // return Profile::find(3);
//         // return Profile::first();
//         // return Profile::max('id');
//         // return Profile::count('id');
//         // return Profile::avg('id');
//         // $res=Profile::find(2);
//         // $res->delete();
//         // Profile::destroy(array(4,5));
        
//         // $res=new Profile;
//         // $res->title='title7';
//         // $res->price=200;https://vitux.com/ubuntu-xampp/ 
//         // $res->description="it is new";
//         // $res->save();
//         // return Profile::all();
//         // return Profile::where('id', 1)
//         // ->orderBy('title')
//         // ->get();
//         // foreach (Profile::all() as $profile) {
//         //     echo $profile->id;
//         // }

//         // $pro=Profile::where('title', 'title7')->first();
//         // //return $pro->fresh();
        
//         // $pro->title = 'title8';
//         // $pro->refresh();
//         // return $pro;
         
//     //     $profile = Profile::where('id', '1')->get();
//     //     $profile = $profile->reject(function ($profile) {
//     //    return $profile->cancelled;
// // });


// // Profile::chunk(200, function ($profiles) {
// //     foreach ($profiles as $pro) {

// //         echo $profiles;
// //         //
// //     }
// //});

// // Profile::where('title', 'title7')
// //     ->chunkById(2, function ($profile) {
// //         $profile->each->update(['title'=>'title8']);
// //     }, $column = 'id');



//     // $profile = Profile::where('title', true)
//     // ->chunkById(6, function ($profile) {
//     // $profile->each->update(['title' => false]);
//     // }, $column = 'id');
//     // return $profile;
//     // }
 

//     // $profile = Profile::where('title', true)
//     // ->lazyById(6, $coloumn='id') 
//     //  ->each->update(['title' => false]);
   
//     // return $profile;
//     // }
 
// //  $profile=Profile::find(1);
// //  return $profile;

// // $profile=Profile::where('title','title7')->first();

// // return $profile;


// // $profile=Profile::firstWhere('id',2);
// // return $profile;

// // $profile = Profile ::firstOrCreate([
// //     'title'=> 'title2'

// // ]);
// // return $profile;

// // $profile=Profile::firstOrCreate(
// //     ['title' =>'title8'],
// //     ['price' =>200]
// // );

// // return $profile;


// $profile=Profile::firstOrNew([
//     'tile'

// ]);





// public function store(Request $request){
//     $profile =new Profile;
//     $profile->title=$request->title;
//     $profile->save();  


// $user=Profile::firstOrNew([

//             'title' => 'tt',

//             'price' => 10,

//             'description' => 'dd',

//         ]);

//         $user->title = 'ptitle';
//         $user->isDirty();
// $user->isDirty('title'); 
// $user->isDirty('first_name'); 
 
// $user->isClean(); 
// $user->isClean('title'); 
 
// $user->save();
 
// $user->isDirty(); 
// $user->isClean(); 
// return $user;


// $profile= Profile::create([
//     'title'=>'title8'
    
// ]);

// return Order::addSelect(['title' => Profile::select('title')
//     ->whereColumn('Order.id', 'Profile.id')
    
//     ->limit(1)
// ])->get();

// $Profiles= destroy(1);

// return $Profiles;

// $Profiles= Profile::find(3);
//  $Profiles->delete();
//  return $Profiles;
}
}
 





