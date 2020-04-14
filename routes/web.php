<?php

use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return 'Hola desde Inicioss';
// });

// Route::get('/contacto', function () {
//     return 'Hola desde contacto';
// });
// Route::get('/saludo/{nombre?}', function ($nombre ) {
//     return 'Saludo ' . $nombre;
// });

// Route::get('/saludo/{nombre?}', function ($nombre = 'Invitado') {
//     return 'Saludo ' . $nombre;
// });

//Rutas con nombre


// Route::get('contacto', function () {
//     return 'Sección de Contacto';
// })->name('contacto');

// Route::get('/', function () {
    
//     echo "<a href='" .route('contacto')."'>Contacto1</a><br>" ;
//     echo "<a href='" .route('contacto')."'>Contacto2</a><br>" ;
//     echo "<a href='" .route('contacto')."'>Contacto3</a><br>" ;
//     echo "<a href='" .route('contacto')."'>Contacto4</a><br>" ;
    
// });






// Route::view('/', 'home', ['nombre'=> 'Vicente']);

// Route::get('/about' , function(){   

//     return view('about');

// })->name('about');



Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');

// Route::get('/portafolio' , 'ProjectController@index')->name('projects.index');

// Route::get('/portafolio/crear' , 'ProjectController@create')->name('projects.create');

// Route::get('/portafolio/{project}/editar' , 'ProjectController@edit')->name('projects.edit');

// Route::patch('/portafolio/{project}' , 'ProjectController@update')->name('projects.update');

// Route::post('/portafolio' , 'ProjectController@store')->name('projects.store');


// Route::get('/portafolio/{project}' , 'ProjectController@show')->name('projects.show');


// Route::delete('/portafolio/{project}', 'ProjectController@destroy')->name('projects.destroy');

Route::resource('portafolio', 'ProjectController')->names('projects')->parameters(['portafolio' =>'project']);


Route::view('/contacto', 'contacto')->name('contacto');
Route::post('contacto','MessageController@store')->name('messages.store');


// Route::get('/home', 'HomeController@index')->name('home');



Auth::routes();

// Route::get('/', 'HomeController@index')->name('home');
