<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//1
Route::get('/my-name', function () {
    return 'Shekerbek uulu Osmon';
});
//2
Route::get('/my-friend', function () {
    return 'Петряева Елизавета Дмитриевна';
});
//3
Route::get('/get-friend/Igor', function () {
    return 'Шишов Игорь Ярославович';
});
//4
Route::get('/my-city/{city}', function ($city) {
    return $city;
})->where('city', '[A-Za-z]+');
//5
Route::get('/level/{lvl}', function ($lvl) {
    if ($lvl >= 0 and $lvl<=25)
    {
        return 'Новичок';
    }
    if ($lvl >= 26 and $lvl <= 50)
    {
        return 'Специалист';
    }
    if ($lvl >= 51 and $lvl <= 75)
    {
        return 'Босс';
    }
    if ($lvl >= 76 and $lvl <= 98)
    {
        return 'Старик';
    }
    if ($lvl=99)
    {
        return 'Король';
    }
});
//6
Route::get('/working/{name}/{date}', function ($name, $date) {
    $name = 'Project Fitness';
    $date = $date('Y-m-d H:i:s');
    return $name . ': use time: ' . $date;
});
//7
Route::get('/power/{id}/profile', function ($id) {

})->name('profile');
$url = route('profile', ['id' => 1]);
