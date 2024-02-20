<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/blogs', function () {
//     return view('blogs');
// });

// Route::get('/blogs/{id}', function (string $id) {
//     // return view('blogs');
//     return "<h2>ID is : ". $id ."</h2>";
// });

// Route::get('/blogs/{id?}', function (string $id = "The Code College") {
//     // if($id){
//         return "<h2>ID is : ". $id ."</h2>";
//     // }else{
//     //     return "<h2>No id</h2>";
//     // }
// });

Route::get('/blogs/{id}/comment/{comment}', function (string $id, string $comment) {
    // if($id){
        return "<h2>ID is : ". $id . " And commment is ". $comment ."</h2>";
    // }else{
    //     return "<h2>No id</h2>";
    // }
});

Route::get('/blogs/singleBLog', function () {
    return view('singleblog');
});

// Route::view('/', 'welcome');

Route::get('/hello', function(){

    return "<h1>hello laravel</h1>";

});