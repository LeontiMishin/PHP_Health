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
        $card = DB::table('cards')->get();
        $user = DB::table('users')->get();
        $description = DB::table('carddescription')->get();

        return view('card', ['description' => $description->all()], ['data' => $card->all()]);
    }
}
