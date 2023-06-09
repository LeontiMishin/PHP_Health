<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// Route::post('/calculator/post', function (Request $request) {
//     return $input = $request->all();
// })->name('contact-form');

Route::post('/calculator/post', [CalculatorResultController::class, 'calculator'])->name('contact-form');
Route::get('/calculatorResult', [ResultController::class,'index'])->name('result.index');

Route::get('/calculatorAll', [CalculatorResultController::class,'allData'])->name('resultdata.index');

Route::get('/card', [CardController::class,'index'])->name('card.index');
Route::get('/cardAll', [CardController::class,'allCard'])->name('resultcard');




// Route::get('/calculator', [CalculatorController::class,'index'
// ])->name('health.index');
Route::get('/registration', [RegistrationController::class,'index'
])->name('health.index');
Route::get('/', [HealthController::class,'index'
])->name('health.index');
Route::get('/training', [TrainingController::class,'index'
])->name('training.index');
Route::get('/buyForm', [BuyController::class,'index'
])->name('buyForm');
