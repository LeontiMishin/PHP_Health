<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Card;



class BuyController extends Controller{

    public function index(){
        $user = DB::table('users')->get();
        $card = DB::table('cards')->get();

        return view('buy', ['user' => $user->all()], ['card' => $card->all()]);
    }

}
