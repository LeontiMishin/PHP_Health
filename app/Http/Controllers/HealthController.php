<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HealthController extends Controller
{
    public function index()
    {
        return view('welcome');
    }


    public function cards(Request $request){

    // Генерируем случайный ход для компьютера
    // $computerChoice = rand(1, 3);
    // if ($computerChoice == 1) {
    //     $computerChoice = 'rock';
    // } elseif ($computerChoice == 2) {
    //     $computerChoice = 'paper';
    // } else {
    //     $computerChoice = 'scissors';
    // }

    // Получаем результат игры
    // if ($playerChoice == $computerChoice) {
    //     $result = 'tie';
    // } elseif (($playerChoice == 'rock' && $computerChoice == 'scissors') || ($playerChoice == 'paper' && $computerChoice == 'rock') || ($playerChoice == 'scissors' && $computerChoice == 'paper')) {
    //     $result = 'win';
    // } else {
    //     $result = 'lose';
    // }

    // Сохраняем статистику в базу данных
    $id='';
    $header='';
    $body='';
    $text='';
    $price='';

    DB::table('card')->get([
        'id' => $id,
        'header' => $header,
        'body' => $body,
        'text' => $text,
        'price' => $price,
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    // Возвращаем результат игры в представление
    return view($body);
}
}
