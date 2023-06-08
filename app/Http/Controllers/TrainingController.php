<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Card;

class TrainingController extends Controller
{
    public function index()
    {
        $card = new Card;
        $user = DB::table('users')->get();
        return view('training', ['data' => $card->all()], ['user' => $user->all()]);
        // return view('welcome');
    }
}
