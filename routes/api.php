<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('products', function () {
    // DB::table('products')->insert([
    //     [
    //         'name'=> 'laptop',
    //         'description'=>'jhhh',
    //         'price'=>'1000',
    //         'quantity'=>'12',
    //     ],
    //     [
    //         'name'=> 'IPhone',
    //         'description'=>'ddd',
    //         'price'=>'4500',
    //         'quantity'=>'5',
    //     ]

    // ]);
    return DB::table('products')->get();

});
Route::get('products/{id}', function ($id) {

    return DB::table('products')->where('id',$id)->get();

});
Route::post('products', function () {

    DB::table('products')->insert([
        [
            'name'=> 'nokia',
            'description'=>'jhhh',
            'price'=>'1000',
            'quantity'=>'15',
        ],

    ]);
    return "sorted";
});
Route::put('products/{id}', function ($id) {

    DB::table('products')->where('id',$id)->update(
        [
            'name'=> 'lamp',
            'description'=>'',
            'price'=>'20',
            'quantity'=>'50'
        ]

    );
    return 'updated';
});
Route::delete('products/{id}', function ($id) {
    DB::table('products')->where('id',$id)->delete();
    return 'deleted';
});

