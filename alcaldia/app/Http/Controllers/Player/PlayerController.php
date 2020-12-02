<?php

namespace App\Http\Controllers\Player;

use App\Http\Controllers\Controller;
use App\Models\team;
use Illuminate\Http\Request;
use App\Models\Player;

class PlayerController extends Controller
{
    public function index(){
        $players=Player::paginate('30');
        return view('player.index',compact('players'));


    }
    public function create(){
        $teams=Team::all();
        return view('player.create',compact('teams'));
    }
    public function store(Request $request){

        $players=Player::create($request->all());
        return redirect()->route('player.index');
    }
    public function show($id){
        $teams=Team::all();
        $player=Player::find($id);
        return view('player.show',compact('player'),compact('teams'))->with([
            'message'=> 'se ha creado el jugador',
            'type'=> 'success'
        ]);
    }
    public function edit($id){
        $teams=Team::all();
        $player=Player::find($id);
        return view('player.edit',compact('player'),compact('teams'));
    }
    public function update(Request $request,$id){
        $player=Player::find($id)->update($request->all());
        return redirect()->route('player.index')->with([
            'message'=> 'se ha actualizado el jugador',
            'type'=> 'primary'
        ]);
    }
    public function destroy($id){
        $player=Player::find($id)->delete();
        return redirect()->route('player.index')->with([
            'message'=> 'se ha eliminado el jugador',
            'type'=> 'danger'
        ]);
    }
}
