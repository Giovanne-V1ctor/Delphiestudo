<?php

use Illuminate\Support\Facades\Route;

// Rotas públicas da API
Route::get('/health', function () {
    return response()->json(['status' => 'ok']);
});
// Suas rotas de API vão aqui
Route::get('/teste', function () {
    return response()->json(['message' => 'CORS está funcionando!']);
});

// Se quiser rotas protegidas por autenticação, descomente abaixo
// Route::middleware('auth:sanctum')->group(function () {
//     Route::get('/user', function () {
//         return request()->user();
//     });
// });