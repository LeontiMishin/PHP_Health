<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Calculator;

class CalculatorResultController extends Controller{

    public function index(){
        return view('calculator');
    }

    public function calculator(Request $request){

        $weight = $request->input('weight');
        $height = $request->input('height');
        $age = $request->input('age');
        $gender = $request->input('gender');
        $activity = $request->input('activity');
        $idUser=1;

        if ($gender == 'man' && $activity == 'easy'){
            $result = ((88.36 + (13.4 * $weight) + (4.8 * $height) - (5.7 * $age)) * 1.375);
        }
        if ($gender == 'man' && $activity == 'medium'){
            $result = ((88.36 + (13.4 * $weight) + (4.8 * $height) - (5.7 * $age)) * 1.55);
        }
        if ($gender == 'man' && $activity == 'hard'){
            $result = ((88.36 + (13.4 * $weight) + (4.8 * $height) - (5.7 * $age)) * 1.7);
        }
        if ($gender == 'women' && $activity == 'easy'){
            $result = ((447.6 + (9.2 * $weight) + (3.1 * $height) - (4.3 * $age)) * 1.375);
        }
        if ($gender == 'women' && $activity == 'medium'){
            $result = ((447.6 + (9.2 * $weight) + (3.1 * $height) - (4.3 * $age)) * 1.55);
        }
        if ($gender == 'women' && $activity == 'hard'){
            $result = ((447.6 + (9.2 * $weight) + (3.1 * $height) - (4.3 * $age)) * 1.7);
        }

        $validation = $request->validate([
            'weight'=>'required|min:2|max:3',
            'height'=>'required|min:3|max:3',
            'age'=>'required|min:1|max:2',
            'gender'=>'required',
            'activity'=>'required'
        ]);

        $calculator = new Calculator();
        $calculator->idUser=$idUser;
        $calculator->weight=$request->input('weight');
        $calculator->height=$request->input('height');
        $calculator->age=$request->input('age');
        $calculator->gender=$request->input('gender');
        $calculator->activity=$request->input('activity');
        $calculator->result=$result;

        $calculator->save();

        return redirect()->route('result.index');
    }
    public function allData(){
        $user = DB::table('users')->get();
        $calculator = new Calculator;
        return view('calculator', ['data' => $calculator->all()], ['user' => $user->all()]);
    }
}
