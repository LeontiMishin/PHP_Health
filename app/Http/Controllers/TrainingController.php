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
        return view('training', ['data' => $card->all()]);
        // return view('welcome');
    }
}
