<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\citas;
use Illuminate\Support\Facades\DB;

class dashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $total=citas::all()->count();
      $cumplio=citas::where('estado_citas','1')->count();
      $nocumplio=citas::where('estado_citas','2')->count();
      $pendiente=citas::where('estado_citas','3')->count();

      $Enero = DB::table('citas')->whereYear('fecha_citas', '2018')->whereMonth('fecha_citas', '01')->where('estado_citas','1')->count();
      $Enero2 = DB::table('citas')->whereYear('fecha_citas', '2018')->whereMonth('fecha_citas', '01')->where('estado_citas','!=','1')->count();

      $Febrero = DB::table('citas')->whereYear('fecha_citas', '2018')->whereMonth('fecha_citas', '02')->where('estado_citas','1')->count();
      $Febrero2 = DB::table('citas')->whereYear('fecha_citas', '2018')->whereMonth('fecha_citas', '02')->where('estado_citas','!=','1')->count();

      $Marzo = DB::table('citas')->whereYear('fecha_citas', '2018')->whereMonth('fecha_citas', '03')->where('estado_citas','1')->count();
      $Marzo2 = DB::table('citas')->whereYear('fecha_citas', '2018')->whereMonth('fecha_citas', '03')->where('estado_citas','!=','1')->count();

      $Abril = DB::table('citas')->whereYear('fecha_citas', '2018')->whereMonth('fecha_citas', '04')->where('estado_citas','1')->count();
      $Abril2 = DB::table('citas')->whereYear('fecha_citas', '2018')->whereMonth('fecha_citas', '04')->where('estado_citas','!=','1')->count();

      $Mayo = DB::table('citas')->whereYear('fecha_citas', '2018')->whereMonth('fecha_citas', '05')->where('estado_citas','1')->count();
      $Mayo2 = DB::table('citas')->whereYear('fecha_citas', '2018')->whereMonth('fecha_citas', '05')->where('estado_citas','!=','1')->count();
      $Junio = DB::table('citas')->whereYear('fecha_citas', '2018')->whereMonth('fecha_citas', '06')->where('estado_citas','1')->count();
      $Junio2 = DB::table('citas')->whereYear('fecha_citas', '2018')->whereMonth('fecha_citas', '06')->where('estado_citas','!=','1')->count();

      $Julio = DB::table('citas')->whereYear('fecha_citas', '2018')->whereMonth('fecha_citas', '07')->where('estado_citas','1')->count();
      $Julio2 = DB::table('citas')->whereYear('fecha_citas', '2018')->whereMonth('fecha_citas', '07')->where('estado_citas','!=','1')->count();

      $Agosto = DB::table('citas')->whereYear('fecha_citas', '2018')->whereMonth('fecha_citas', '08')->where('estado_citas','1')->count();
      $Agosto2 = DB::table('citas')->whereYear('fecha_citas', '2018')->whereMonth('fecha_citas', '08')->where('estado_citas','!=','1')->count();

      $Septiembre = DB::table('citas')->whereYear('fecha_citas', '2018')->whereMonth('fecha_citas', '09')->where('estado_citas','1')->count();
      $Septiembre2 = DB::table('citas')->whereYear('fecha_citas', '2018')->whereMonth('fecha_citas', '09')->where('estado_citas','!=','1')->count();

      $Octubre = DB::table('citas')->whereYear('fecha_citas', '2018')->whereMonth('fecha_citas', '10')->where('estado_citas','1')->count();
      $Octubre2 = DB::table('citas')->whereYear('fecha_citas', '2018')->whereMonth('fecha_citas', '10')->where('estado_citas','!=','1')->count();

      $Noviembre = DB::table('citas')->whereYear('fecha_citas', '2018')->whereMonth('fecha_citas', '11')->where('estado_citas','1')->count();
      $Noviembre2 = DB::table('citas')->whereYear('fecha_citas', '2018')->whereMonth('fecha_citas', '11')->where('estado_citas','!=','1')->count();

      $Diciembre = DB::table('citas')->whereYear('fecha_citas', '2018')->whereMonth('fecha_citas', '11')->where('estado_citas','1')->count();
      $Diciembre2 = DB::table('citas')->whereYear('fecha_citas', '2018')->whereMonth('fecha_citas', '11')->where('estado_citas','!=','1')->count();

        $chartjs = app()->chartjs
        ->name('lineChartTest')
        ->type('line')
        ->size(['width' => 400, 'height' => 200])
        ->labels(['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'])
        ->datasets([
            [
                "label" => "Cumplio",
                'backgroundColor' => "rgba(0, 0, 255, 0.3)",
                'borderColor' => "rgba(38, 185, 154, 0.7)",
                "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                "pointHoverBackgroundColor" => "#fff",
                "pointHoverBorderColor" => "rgba(220,220,220,1)",
                'data' => [$Enero, $Febrero, $Marzo, $Abril, $Mayo, $Junio, $Julio,$Agosto,$Septiembre,$Octubre,$Noviembre,$Diciembre],
            ],
            [
                "label" => "No Cumplio y Pendiente",
                'backgroundColor' => "rgba(0, 255, 0, 0.3)",
                'borderColor' => "rgba(38, 185, 154, 0.7)",
                "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                "pointHoverBackgroundColor" => "#fff",
                "pointHoverBorderColor" => "rgba(220,220,220,1)",
                'data' => [$Enero2, $Febrero2, $Marzo2, $Abril2, $Mayo2, $Junio2, $Julio2,$Agosto2,$Septiembre2,$Octubre2,$Noviembre2,$Diciembre2],
            ]
        ])
        ->options([]);

        $chartjs2 = app()->chartjs
         ->name('barChartTest')
         ->type('bar')
         ->size(['width' => 400, 'height' => 200])
         ->labels(['Cumplio', 'NoCumplio', 'Pendiente'])
         ->datasets([
             [
                 "label" => "Cumplio",
                 'backgroundColor' => ['#008080'],
                 'data' => [$cumplio]
             ],
             [
                 "label" => "No Cumplio",
                 'backgroundColor' => ['#ff0000'],
                 'data' => [$nocumplio]
             ],
             [
                 "label" => "Pendiente",
                 'backgroundColor' => ['#ff8000'],
                 'data' => [$pendiente]
             ]
         ])
         ->options([]);

         $chartjs3 = app()->chartjs
        ->name('pieChartTest')
        ->type('pie')
        ->size(['width' => 400, 'height' => 200])
        ->labels(['Cumplio', 'No_cumplio', 'Pendiente'])
        ->datasets([
            [
                'backgroundColor' => ['#008080', '#ff0000', '#ff8000'],
                'hoverBackgroundColor' => ['#008080', '#ff0000', '#ff8000'],
                'data' => [$cumplio, $nocumplio, $pendiente]
            ]
        ])
        ->options([]);

         $chartjs4 = app()->chartjs
        ->name('pieChartTest')
        ->type('pie')
        ->size(['width' => 400, 'height' => 200])
        ->labels(['Cumplio', 'No_cumplio', 'Pendiente'])
        ->datasets([
            [
                'backgroundColor' => ['#FF6384', '#36A2EB', '#36eb5d'],
                'hoverBackgroundColor' => ['#FF6384', '#36A2EB', '#36eb5d'],
                'data' => [$cumplio, $nocumplio, $pendiente]
            ]
        ])
        ->options([]);




        return view('dashboard', compact('chartjs','chartjs2','chartjs3','chartjs4','total','cumplio','nocumplio','pendiente'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
