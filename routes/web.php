<?php

use Illuminate\Support\Facades\Route;

// Подключение контрроллеров
use App\Http\Controllers\mainController;

// Отслеживание главной страницы
Route::get("/", [mainController::class, "showPage"])->name("main");
// Обработка формы обратной связи
Route::post("/", [mainController::class, "contactForm"])->name("contactForm");