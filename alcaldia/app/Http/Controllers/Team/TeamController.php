<?php

namespace App\Http\Controllers\Team;

use App\Http\Controllers\Controller;
use App\Models\locality;
use App\Models\team;
use Illuminate\Http\Request;


class TeamController extends Controller
{
    public function index(){
        $teams=Team::paginate('30');
        return view('team.index',compact('teams'));

    }
    public function create(){
        $localities=Locality::all();
        return view('team.create',compact('localities'));
    }
    public function store(Request $request){

        $teams=Team::create($request->all());
        return redirect()->route('team.index');
    }
    public function show($id){
        $localities=Locality::all();
        $team=Team::find($id);
        return view('team.show',compact('team'),compact('localities'))->with([
            'message'=> 'se ha creado el equipo',
            'type'=> 'success'
        ]);
    }
    public function edit($id){
        $localities=Locality::all();
        $team=Team::find($id);
        return view('team.edit',compact('team'),compact('localities'));
    }
    public function update(Request $request,$id){
        $team=Team::find($id)->update($request->all());
        return redirect()->route('team.index')->with([
            'message'=> 'se ha actualizado el equipo',
            'type'=> 'primary'
        ]);
    }
    public function destroy($id){
        $teams=team::find($id)->delete();
        return redirect()->route('team.index')->with([
            'message'=> 'se ha eliminado el equipo',
            'type'=> 'danger'
        ]);
    }
}
