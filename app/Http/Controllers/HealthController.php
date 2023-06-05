<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Card;

class HealthController extends Controller
{
    public function index()
    {
        $card = new Card;
        // dd($card->all());
        return view('welcome', ['data' => $card->all()]);
        // return view('welcome');
    }



//     public function cards(Request $request){
//     $id='';
//     $header='';
//     $body='';
//     $text='';
//     $price='';

//     DB::table('card')->get([
//         'id' => $id,
//         'header' => $header,
//         'body' => $body,
//         'text' => $text,
//         'price' => $price,
//         'created_at' => now(),
//         'updated_at' => now(),
//     ]);
//     return view($body);
// }
}
