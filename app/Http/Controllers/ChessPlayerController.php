<?php

namespace App\Http\Controllers;

use App\Models\ChessPlayer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ChessPlayerController extends AdminController
{

    public function index()
    {
        $players = ChessPlayer::orderBy('created_at', 'asc')->get();

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

            if($request->picture){
                $imageName = time().'.'.$request->picture->extension();  
                $request->picture->move(public_path('images/uploads'), $imageName);
            }

            $message = $case == "update" ? 'Player updated successfully!' : 'Player created successfully!';

            if($case == "update" ){

                $updatedValues = [
                    'name' => $request->input('name'),
                    'surname' => $request->input('surname'),
                    'gender' => $request->input('gender'),
                ];

                if($request->picture){
                    $updatedValues['picture'] = $imageName;
                }

                $player->update($updatedValues);
                $message = 'Player updated successfully!';
            }else{

                $player = new ChessPlayer([
                    'name' => $request->input('name'),
                    'surname' => $request->input('surname'),
                    'picture' => $imageName,
                    'gender' => $request->input('gender'),
                ]);

                $message = 'Player created successfully!';

                $player->save();
            }

            return redirect()->route('chess.players')->with('success', $message );
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
