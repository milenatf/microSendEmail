<?php

use App\Jobs\CompanyCreatedJob;
use Illuminate\Support\Facades\Route;

Route::get('/teste', function() {
    CompanyCreatedJob::dispatch('milena.devweb@gmail.com')->onQueue('queue_email');

    return response()->json(['message' => 'Micro Email success!']);
});

Route::get('/', function() {
    return response()->json(['message' => 'Micro Email success!']);
});
