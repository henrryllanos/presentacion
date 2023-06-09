<?php

namespace App\Http\Controllers;

use App\Http\Requests\imagenRequest;
use App\Models\imagen;
use App\Models\zona;
use Illuminate\Http\Request;
use App\Models\parqueo;
use Illuminate\Support\Facades\Storage;
class zonaController extends Controller
{
    //
    public function verParqueos(){
        $zonas=zona::all();
        $imagen=imagen::all()->last();
        return view('crearPlazas',['zonas'=>$zonas,'imagen'=>$imagen]);
    }
    public function registrarZona(Request $request){
        $zona= new zona();
        $zona->nombre= $request->nombre;
        $zona->save();
        for( $i=1; $i<= $request->parqueos; $i++){
            $parqueo =  new parqueo();
            $parqueo->numero= $i;
            $parqueo->estado= 'libre';
            $parqueo->zona_id= $zona->id;
            $parqueo->save();
        }
        return redirect('crearPlazas');
    }
    public function editar(Request $request){
        $zona=zona::find($request->zona);
        foreach ($zona->parqueos as $parqueo) {
            $parqueo->delete();
        }
        for( $i=1; $i<= $request->parqueos; $i++){
            $parqueo =  new parqueo();
            $parqueo->numero= $i;
            $parqueo->estado= 'libre';
            $parqueo->zona_id= $zona->id;
            $parqueo->save();
        }
        return redirect('crearPlazas');
    }

    public function subir_imagen(imagenRequest $request){
        $imagen= new imagen();
        $imagen->url=Storage::url($request->file('imagen')->store('public/parqueos'));
        $imagen->save();
        return redirect(route('crearPlazas'));
    }
}
