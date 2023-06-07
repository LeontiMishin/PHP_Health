<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Card;


class CardController extends Controller{

    public function index(){
        return view('card');
    }
    public function allCard(){
        $card = new Card;
        $description = DB::table('carddescription')->get();
        return view('card', ['data' => $card->all()], ['description' => $description->all()]);
    }
}
