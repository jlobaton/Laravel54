<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pregunta;
use App\Tienda;
use App\Dato;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        ////valores usando P1
        $valor = \DB::table('datos')
                        ->select(\DB::raw('SUM(p1) as sumatoria'))
                        ->whereBetween('P1', [1, 7])
                        ->first();

        $datos[0]["base"] = $valor->sumatoria; 
        
        $valor = \DB::table('datos')
                        ->select(\DB::raw('SUM(p1) as sumatoria'))
                        ->whereBetween('P1', [6, 7])
                        ->first();

        $datos[0]["satisfaccion"] = $valor->sumatoria; 

        $valor = \DB::table('datos')
                        ->select(\DB::raw('SUM(p1) as sumatoria'))
                        ->whereBetween('P1', [1, 4])
                        ->first();

        $datos[0]["insatisfaccion"] = $valor->sumatoria; 
        $datos[0]["neta"] = $datos[0]["satisfaccion"] - $datos[0]["insatisfaccion"];                             
                           
        $datos[0]["nombre"] = Pregunta::where('id_pregunta', 'P1')->first();


        ////valores usando P2
        $valor = \DB::table('datos')
                        ->select(\DB::raw('SUM(p2) as sumatoria'))
                        ->whereBetween('P2', [1, 7])
                        ->first();

        $datos[1]["base"] = $valor->sumatoria; 
        
        $valor = \DB::table('datos')
                        ->select(\DB::raw('SUM(p2) as sumatoria'))
                        ->whereBetween('P2', [6, 7])
                        ->first();

        $datos[1]["satisfaccion"] = $valor->sumatoria; 

        $valor = \DB::table('datos')
                        ->select(\DB::raw('SUM(p2) as sumatoria'))
                        ->whereBetween('P2', [1, 4])
                        ->first();

        $datos[1]["insatisfaccion"] = $valor->sumatoria; 
        $datos[1]["neta"] = $datos[1]["satisfaccion"] - $datos[1]["insatisfaccion"];                             
                           
        $datos[1]["nombre"] = Pregunta::where('id_pregunta', 'P2')->first();



        ////valores usando P3
        $valor = \DB::table('datos')
                        ->select(\DB::raw('SUM(p3) as sumatoria'))
                        ->whereBetween('P3', [1, 7])
                        ->first();

        $datos[2]["base"] = $valor->sumatoria; 
        
        $valor = \DB::table('datos')
                        ->select(\DB::raw('SUM(p3) as sumatoria'))
                        ->whereBetween('P3', [6, 7])
                        ->first();

        $datos[2]["satisfaccion"] = $valor->sumatoria; 

        $valor = \DB::table('datos')
                        ->select(\DB::raw('SUM(p3) as sumatoria'))
                        ->whereBetween('P3', [1, 4])
                        ->first();

        $datos[2]["insatisfaccion"] = $valor->sumatoria; 
        $datos[2]["neta"] = $datos[2]["satisfaccion"] - $datos[2]["insatisfaccion"];                             
                           
        $datos[2]["nombre"] = Pregunta::where('id_pregunta', 'P3')->first();




        ////valores usando P4
        $valor = \DB::table('datos')
                        ->select(\DB::raw('SUM(p4) as sumatoria'))
                        ->whereBetween('P4', [1, 7])
                        ->first();

        $datos[3]["base"] = $valor->sumatoria; 
        
        $valor = \DB::table('datos')
                        ->select(\DB::raw('SUM(p4) as sumatoria'))
                        ->whereBetween('P4', [6, 7])
                        ->first();

        $datos[3]["satisfaccion"] = $valor->sumatoria; 

        $valor = \DB::table('datos')
                        ->select(\DB::raw('SUM(p4) as sumatoria'))
                        ->whereBetween('P4', [1, 4])
                        ->first();

        $datos[3]["insatisfaccion"] = $valor->sumatoria; 
        $datos[3]["neta"] = $datos[3]["satisfaccion"] - $datos[3]["insatisfaccion"];                             
                           
        $datos[3]["nombre"] = Pregunta::where('id_pregunta', 'P4')->first();

        $tienda = Tienda::all();
        return view('home')->with('datos', $datos)
                           ->with('tiendas', $tienda);
    }
}
