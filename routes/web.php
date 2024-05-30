<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;
// use Illuminate\Http\Request;

Route::get('/', function () {
    return view('mainpage');
});
Route::get('/add-student', function () {
    return view('add-student');
});



 Route::get('/student' , [StudentsController::class,'index']);

//   Route::get('/newstudent' , [StudentsController::class,'store']);
  Route::resource('addstudent', StudentsController::class);

// Route::get('/student', 'StudentsController@Student');



