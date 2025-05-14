<?php

use App\Http\Controllers\PostController;
// the first route for posting and analyzing the post
Route::resource('posts', PostController::class);
