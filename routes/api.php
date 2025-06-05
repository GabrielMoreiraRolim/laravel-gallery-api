<?php
use App\Http\Controllers\Api\ArtworkController;

Route::get('/artworks', [ArtworkController::class, 'index']);
Route::post('/artworks', [ArtworkController::class, 'store']);
//só atualizando 