<?php

use App\Http\Controllers\Api\CalculateCommissionController;
use App\Http\Controllers\Api\PaymentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('commissions', [CalculateCommissionController::class, 'index']);
Route::Resource('payments', PaymentController::class);
