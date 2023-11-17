<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

/*
|--------------------------------------------------------------------------
@@ -13,6 +14,17 @@
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/', function () {
//     return view('main.main');
// });

Route::get('/', [MainController::class, 'index']);

Route::get('contacts', function(){
    $contact = [
        'name'=>'Polytech',
        'adress' => 'B.Semenovskaya 38',
        'phone' => '8(495)232-3232'
    ];
    return view('main.contact', ['data' => $contact]);
});