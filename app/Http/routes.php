<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

Route::get("test_route", function(){
    $students = [
        [
            "id"      => 1,
            "name"    => 'Aung Aung',
            "address" => 'Hledan'
        ],
        [
            'id'    => 2,
            'name'  => 'Hla Hla',
            "address"   => 'Pazuntaung'
        ]
    ];
    return response()->json($students);
});


Route::get("test_view", function(){
    $students = [
        [
          "id"      => 1,
          "name"    => 'Aung Aung',
          "address" => 'Hledan'
        ],
        [
            'id'    => 2,
            'name'  => 'Hla Hla',
            "address"   => 'Pazuntaung'
        ]
    ];

    return view("test")->with("students", $students);
});

Route::get("route_db", function(){
    $students = DB::table("students")->get();

    return view("another")->with("students", $students);
});


Route::get("test_controller", "TestController@index");

Route::get("test_con_view", "TestController@getView");