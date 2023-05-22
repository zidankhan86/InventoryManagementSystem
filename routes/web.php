<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloWorldController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello/wold',[HelloWorldController::class,'firstCode']);


//Assignment Started 1-7

Route::post('/hello/name',[HelloWorldController::class,'hello']);


Route::get('/user-agent', function (Request $request) {
    $userAgent = $request->header('User-Agent');



    return response()->json(['userAgent' => $userAgent]);
})->name('user.agent');


Route::get('/api/endpoint', function (Request $request) {
    $page = $request->query('page', null);


    return response()->json(['page' => $page]);
})->name('api.endpoint');



Route::get('/api/response', function () {
    $data = [
        'name' => 'John Doe',
        'age' => 25,
    ];

    $response = [
        'message' => 'Success',
        'data' => $data,
    ];

    return response()->json($response);
})->name('api.response');



Route::post('/upload', function (Request $request) {
    if ($request->hasFile('image') && $request->file('avatar')->isValid()) {
        $file = $request->file('image');
        $filename = $file->getClientOriginalName();

        $file->storeAs('public/uploads', $filename);


        return response()->json(['message' => 'File uploaded successfully']);
    }

    return response()->json(['message' => 'Invalid file or no file provided'], 400);
})->name('file.upload');



Route::get('/retrieve-cookie', function (Request $request) {
    $rememberToken = $request->cookie('remember_token', null);



    return response()->json(['rememberToken' => $rememberToken]);
})->name('retrieve.cookie');




Route::post('/submit', function (Request $request) {
    $email = $request->input('email');

    $response = [
        'success' => true,
        'message' => 'Form submitted successfully.',
    ];

    return response()->json($response);
})->name('form.submit');



