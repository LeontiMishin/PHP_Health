<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CalculatorController extends Controller
{
    public function index(){
        return view('calculator');
    }

    public function calculator(Request $request){
        $weight = $request->input('weight');
        $height = $request->input('height');
        $age = $request->input('age');

        $gender = $request->input('gender');
        $activity = $request->input('activity');

        if ($gender == 'man' && $activity == 'easy' ){
            $result = ((88.36 + (13.4 * $weight) + (4.8 * $height) - (5.7 * $age)) * 1.375);
        }
        if ($gender == 'man' && $activity == 'medium' ){
            $result = ((88.36 + (13.4 * $weight) + (4.8 * $height) - (5.7 * $age)) * 1.55);
        }
        if ($gender == 'man' && $activity == 'hard' ){
            $result = ((88.36 + (13.4 * $weight) + (4.8 * $height) - (5.7 * $age)) * 1.7);
        }
        if ($gender == 'women' && $activity == 'easy'){
            $result = ((447.6 + (9.2* $weight) + (3.1* $height) - (4.3 * $age)) * 1.375);
        }
        if ($gender == 'women' && $activity == 'medium'){
            $result = ((447.6 + (9.2* $weight) + (3.1* $height) - (4.3 * $age)) * 1.55);
        }
        if ($gender == 'women' && $activity == 'easy'){
            $result = ((447.6 + (9.2* $weight) + (3.1* $height) - (4.3 * $age)) * 1.7);
        }
        // return view('health', ['result' => $result]);
        $validation = $request->validate([
            'weight'=>'required|min:2|max:3',
            'height'=>'required|min:3|max:3',
            'age'=>'required|min:1|max:2',
            'gender'=>'required',
            'activity'=>'required'
        ]);
        return $result;


        // Генерируем случайный ход для компьютера
    //     $computerChoice = rand(1, 3);
    //     if ($computerChoice == 1) {
    //         $computerChoice = 'rock';
    //     } elseif ($computerChoice == 2) {
    //         $computerChoice = 'paper';
    //     } else {
    //         $computerChoice = 'scissors';
    //     }

    //     // Получаем результат игры
    //     if ($playerChoice == $computerChoice) {
    //         $result = 'tie';
    //     } elseif (($playerChoice == 'rock' && $computerChoice == 'scissors') || ($playerChoice == 'paper' && $computerChoice == 'rock') || ($playerChoice == 'scissors' && $computerChoice == 'paper')) {
    //         $result = 'win';
    //     } else {
    //         $result = 'lose';
    //     }

    //     // Сохраняем статистику в базу данных
    //     DB::table('game_statistics')->insert([
    //         'player_name' => 'Player 1',
    //         'computer_choice' => $computerChoice,
    //         'player_choice' => $playerChoice,
    //         'result' => $result,
    //         'created_at' => now(),
    //         'updated_at' => now(),
    //     ]);

    //     // Возвращаем результат игры в представление
        // return view('game', ['result' => $result]);
    }
}
