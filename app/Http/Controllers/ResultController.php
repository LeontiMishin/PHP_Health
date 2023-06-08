<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Calculator;

class ResultController extends Controller{

    public function index(){
        $user = DB::table('users')->get();
        return view('result', ['user' => $user->all()]);
    }

}
