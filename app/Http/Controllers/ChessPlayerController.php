<?php

namespace App\Http\Controllers;

use App\Models\ChessPlayer;
use Illuminate\Http\Request;

class ChessPlayerController extends AdminController
{

    public function index()
    {
        $players = ChessPlayer::orderBy('created_at', 'desc')->get();

        return view('chess_players.index', compact('players'));
    }

    public function createUpdatePlayer(Request $request, $id = null)
    {
        $player = null;
        $case = "create";
        if($id){
            $player = ChessPlayer::find($id);
            $case = "update";
        }

        if ($request->isMethod('post')) {
            if($case == "update" ){
                $player->update([
                    'name' => $request->input('name'),
                    'surname' => $request->input('surname'),
                    'gender' => $request->input('gender'),
                    'picture' => '1234.png',
                ]);
            }else{
                $player = new ChessPlayer([
                    'name' => $request->input('name'),
                    'surname' => $request->input('surname'),
                    // 'picture' => $request->input('picture'),
                    'picture' => '1234.png',
                    'gender' => $request->input('gender'),
                ]);
                $player->save();
            }

            return redirect()->route('chess.players')->with('success', 'Player created successfully!');
        }
        
        return view('chess_players.new_player', compact('case', 'player'));
    }


    public function deletePlayer($id)
    {
        $player = ChessPlayer::find($id); 

        if ($player) {
            $player->delete(); 
        }

        return redirect()->back();
    }
}
