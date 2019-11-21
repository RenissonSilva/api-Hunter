<?php

Route::apiResource('personagems','api\PersonagemController');

Route::post('/register', 'api\AuthController@register');
Route::post('/login', 'api\AuthController@login');