<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChessPlayer;

class HomeController extends Controller
{
    
    public function index()
    {
        $male = 1;
        $feMale = 0;
        $chessPlayersMale =  ChessPlayer::where('gender', $male)->limit(4)->get();
        $chessPlayersFemale =  ChessPlayer::where('gender', $feMale)->limit(4)->get();

        return view('home.index', compact('chessPlayersMale', 'chessPlayersFemale'));
    }

    public function switchLocale($locale)
    {

        return redirect()->to('/'.$locale);

    }
}
