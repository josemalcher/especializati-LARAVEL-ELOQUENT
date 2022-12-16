<?php

use App\Models\User;
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

Route::get('/select', function () {
    //$users = User::all();
    // $users = User::where('id', '>=', 10)->get();
    // $user = User::where('id', 10)->first();
    // $user = User::first();
    // $user = User::find(10);

    //$user = User::findOrFail(request('id')); // comum em uso em API
    // $user = User::where('name', request('name'))->firstOrFail(); // comum em uso em API
    $user = User::firstWhere('name', request('name')); // comum em uso em API



    dd($user);
});

Route::get('/', function () {
    return view('welcome');
});
