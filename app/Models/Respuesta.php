<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    use HasFactory;
    public function solicitud(){
        return $this->belongsTo(SolicitudParqueo::class,'solicitud_id');
    }
    public function parqueo(){
        return $this->belongsTo(parqueo::class,'parqueo_id');
    }
}