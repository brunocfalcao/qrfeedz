<?php

use Illuminate\Support\Facades\Route;

Route::get('/tests/{view}', function (string $view) {
    return view('qrfeedz-services::tests.'.$view);
});
