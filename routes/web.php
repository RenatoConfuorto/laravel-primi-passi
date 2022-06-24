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
    $data = [
        'name' => 'Renato',
        'lastname' => 'Confuorto',
        'links' => [
            [
              'url' => 'home',
              'text' => 'Home'
            ],
            [
              'url' => 'contact',
              'text' => 'Contacts'
            ]
            
          ]
    ];
    return view('home', $data);
})->name('home');

Route::get('/contact-us', function(){
    $data = [
        'links' => [
            [
                'url' => 'home',
                'text' => 'Home'
            ],
            [
                'url' => 'contact',
                'text' => 'Contacts'
                ]
                
                ]
            ];
    return view('contact_us', $data);
})->name('contact');
