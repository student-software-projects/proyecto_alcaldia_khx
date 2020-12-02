<?php

namespace App\Http\Controllers\Locality;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Locality;

class LocalityController extends Controller
{
    public function index(){
        $localities=Locality::paginate('30');
        return view('locality.index',compact('localities'));
    }
    public function create(){
        return view('locality.create');
    }
    public function store(Request $request){
        $localities=Locality::create($request->all());
        return redirect()->route('locality.index');
    }
    public function show($id){
        $locality=Locality::find($id);
        return view('locality.show',compact('locality   '))->with([
            'message'=> 'se ha creado la localidad',
            'type'=> 'success'
        ]);
    }
    public function edit($id){
        $locality=Locality::find($id);
        return view('locality.edit',compact('locality'));
    }
    public function update(Request $request,$id){
        $localitY=Locality::find($id)->update($request->all());
        return redirect()->route('locality.index')->with([
            'message'=> 'se ha actualizado la localidad',
            'type'=> 'primary'
        ]);
    }
    public function destroy($id){
        $localities=Locality::find($id)->delete();
        return redirect()->route('locality.index')->with([
            'message'=> 'se ha eliminado la localidad',
            'type'=> 'danger'
        ]);
    }
}
