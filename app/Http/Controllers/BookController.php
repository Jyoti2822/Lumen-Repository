<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\DB;




class BookController extends Controller

{


    public function index(){

//---------------------Insert a record-----------------------------
// $book=new Book();
// $book->name="Book1";
// $book->year="2021";
// $book->save();
//-----------------Reterive all records------------------
$book_report=Book::all();
    return response()->json($book_report);

    }}

// $book_report=Book::all();
// $book_report->delete();
//     }}

// $book=new Book();
// $book->name="Book2";
// $book->year="2019";
// $book->save();
// $book_report=Book::all();
//     return response()->json($book_report);

    // $book=new Book();
    // $book->name="Book3";
    // $book->year="2018";
    // $book->save();
    // $book_report=Book::all();
    //     return response()->json($book_report);


//     $book=new Book();
//     $book->name="Book4";
//     $book->year="2018";
//     $book->save();
//     $book_report=Book::all();
//         return response()->json($book_report);
// }}

//     $book=new Book();
// $book->name="Book5";
// $book->year="2017";
// $book->save();
// $book_report=Book::all();
//     return response()->json($book_report);
// }}


// $book=new Book();
// $book->name="Book6";
// $book->year="2017";
// $book->save();
// $book_report=Book::all();
//     return response()->json($book_report);
// }}
//---------------------Reteriving record by primary key----------------------
// $book_report=Book::find('63848611d33d02e34c63127b');
// return response()->json($book_report);


//--------------------------Where Statement-------------------


//    $book_report= Book::where('name', 'Book1')
//    ->take(1)
//    ->get();
//    return response()->json($book_report);

// }}

//-------------------------OR Statements-------------


//     $book_report=Book::where('year', '>', 2018)
//         ->orWhere('name','Book2')
//         ->get();
//         return response()->json($book_report);
// }}

//-------------------AND Statements----------------------


//     $book_report=Book::where('year', '<', 2021)
//         ->where('name', 'Book1')
//         ->get();
// return response()->json($book_report);
// }}

//----------------------Where Between Statement----------------------------

// $book_report =Book::whereBetween("year", [2017,2019])->get();
// return response()->json($book_report);
// }}

//------------------Order By-----------------------------
// $book_report = Book::orderBy('year', 'desc')->get();
// return response()->json($book_report);
// }}

//--------------------Offset & Limit----------------------------------
// $book_report= Book::skip(3)
//         ->take(4)
//         ->get();
//         return response()->json($book_report);
// }}    

//-------------------------groupBy----------------------------------
// $book_report= Book::groupBy('year')
//         ->get(['title', 'name']);
//         return response()->json($book_report);
// }}

//--------------------Distinct-------------------------------------------
// $book_report = Book::distinct()->get(['name']);
// return response()->json($book_report);
// }}

//Equivalent to -----------------
// $book_report = Book::distinct('name')->get();
// return response()->json($book_report);
// }}

// $book_report=Book::where('year', 2017)
//         ->distinct('name')
//         ->get();
//         return response()->json($book_report);
// }}

//----------------Aggregations-----------------------
// $book_report = Book::count();
// return response()->json($book_report);
// }}

// $book_report = Book::max('year');
// return response()->json($book_report);
// }}

// $book_report = Book::min('year');
// return response()->json($book_report);
// }}

// $book_report = Book::max('suborder.year');
// return response()->json($book_report);
// }}

//-----------------------Incrementing Decrementing----------------------------------

// $book_report=Book::where('name', 'Book4')->increment('year');
// return response()->json($book_report);
// }}


//-----------------------Exists----------------------

// $book_report=Book::where('name', 'exists', true)->get();
// return "true";
// }}
//

//-----------------------ALl-------------------------
// $book_report=Book::where('name', 'all', ['Book2', 'Book5'])->get();
// return  response()->json($book_report);
// }}


// $books = Book::first();

// foreach ($books as $book) {
//     echo $book;
// }

// echo $books;

//-------------- RAW Expressions----------------------
// $book_report= Book::whereRaw([
//     'year' => ['$gt' => 2017, '$lt' => 2019],
// ])->get();
// return response()->json($book_report);
// }}

//------------------------------Update Statement------------------------
//    $book=App\Book::find(2);
//     $book->name="Book3";
//     $book->year="2018";
//     $book->save();
//     $book_report=Book::all();
//         return response()->json($book_report);

// }
//     }


































