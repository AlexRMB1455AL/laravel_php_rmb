<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'welcome';
});



Route::get('/about', function () {
    return 'this is my page';
});
Route::get('/contact', function () {
    return 'this is my contact page';
});
Route::get('/services', function () {
    return 'this is my services page';
});
Route::get('/blog', function () {
    return 'this is my blog page';
});
Route::get('/hobby/remo', function (){
    return 'this is my hobby page';
});
Route::get('home/kasan/test', function () {
    return 'this is my home page';
});
Route::get('torjok/store/alekseevskaya', function () {
    return 'this is my store page';
});
Route::get('boost/basket/ball/basketball', function () {
    return 'this is my boost page';
});
