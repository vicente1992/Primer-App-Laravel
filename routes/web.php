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

Route::get('/saludo/{nombre?}', function ($nombre = 'Invitado') {
    return 'Saludo ' . $nombre;
});

//Rutas con nombre


Route::get('contacto', function () {
    return 'Sección de Contacto';
})->name('contacto');

Route::get('/', function () {
    
    echo "<a href='" .route('contacto')."'>Contacto1</a><br>" ;
    echo "<a href='" .route('contacto')."'>Contacto2</a><br>" ;
    echo "<a href='" .route('contacto')."'>Contacto3</a><br>" ;
    echo "<a href='" .route('contacto')."'>Contacto4</a><br>" ;
    
});