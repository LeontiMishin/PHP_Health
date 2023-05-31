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
        $weight = $request->input('choice');
        $height = $request->input('choice');
        $age = $request->input('choice');

        $gender = $request->input('choice');
        $activityEasy = $request->input('choice'); // * 1.375
        $activityMedium = $request->input('choice'); // * 1.55
        $activityHard = $request->input('choice'); // * 1.7

        $bpm = $request->input('choice');
        $activity = $request->input('choice');

        if($bpm == 'man' and $activity == 'easy' ){
            $result = ((88.36 + (13.4 * $weight) + (4.8 * $height) - (5.7 * $age)) * 1.375);
        }
        if($bpm == 'man' and $activity == 'medium' ){
            $result = ((88.36 + (13.4 * $weight) + (4.8 * $height) - (5.7 * $age)) * 1.55);
        }
        if($bpm == 'man' and $activity == 'hard' ){
            $result = ((88.36 + (13.4 * $weight) + (4.8 * $height) - (5.7 * $age)) * 1.7);
        }
        if($bpm == 'women' and $activity == 'easy'){
            $result = ((447.6 + (9.2* $weight) + (3.1* $height) - (4.3 * $age)) * 1.375);
        }
        if($bpm == 'women' and $activity == 'medium'){
            $result = ((447.6 + (9.2* $weight) + (3.1* $height) - (4.3 * $age)) * 1.55);
        }
        if($bpm == 'women' and $activity == 'easy'){
            $result = ((447.6 + (9.2* $weight) + (3.1* $height) - (4.3 * $age)) * 1.7);
        }


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
    //     return view('game', ['result' => $result]);
    }
}
