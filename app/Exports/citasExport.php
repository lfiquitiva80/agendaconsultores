<?php

namespace App\Exports;

use App\citas;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class citasExport implements FromView
{
    public function view(): View
    {


    	$citas = \DB::table('citas')
            ->join('lugar', 'citas.lugar_citas', '=', 'lugar.id')
            ->join('cliente', 'citas.empresa_citas', '=', 'cliente.id')
            ->join('jornada', 'citas.jornada_citas', '=', 'jornada.id')
            ->join('users', 'citas.usuario_citas', '=', 'users.id')
            ->join('estado_cita', 'citas.estado_citas', '=', 'estado_cita.id')
            ->select('citas.*','lugar.descripcion_lugar', 'cliente.*', 'users.*', 'jornada.descripcion_jornada', 'estado_cita.Estado')
            //->where('citas.id',39)
            ->get();
    //dd($citas);
        return view('excel.citas', [
            'citas' => $citas
        ]);
    }
}
