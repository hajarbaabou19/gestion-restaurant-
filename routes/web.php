<?php


use App\Http\Controllers\RestaurantController;

Route::get('/afficher-reponses', [RestaurantController::class, 'afficherReponses']);

