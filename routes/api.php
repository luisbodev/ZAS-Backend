<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('hello-world', function () {

    return response()->json([
        'message' => 'Hello World',
    ]);
});
