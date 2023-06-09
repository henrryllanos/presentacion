<?php

namespace App\Http\Controllers;

use App\Http\Requests\convocatoriaRequest;
use App\Models\convocatoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class convocatoriaController extends Controller
{
    public function mostrar(){
        $convocatorias=convocatoria::all();
        return view('convocatorias',['convocatorias'=>$convocatorias]);
    }

    public function registrar(convocatoriaRequest $request){
        $convocatoria=new convocatoria();
        $convocatoria->asunto=$request->asunto;
        $convocatoria->url=Storage::url($request->file('pdf')->store('public/convocatorias'));
        $convocatoria->save();
        return redirect(route('crear_convocatoria'));
    }
}
