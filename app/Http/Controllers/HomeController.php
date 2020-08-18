<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        return view('home');
    }

    
    /*-----------------------------
        Modulo de Control de Islas
      -----------------------------*/

    public function registro_islas() 
    {
        return view('control_isla.registro_islas');
    }

    public function carga_islas() 
    {
        return view('control_isla.carga_islas');
    }

    public function reporte_islas() 
    {
        return view('control-isla.reporte');
    }



    /*Controlador Home*/

   //Controlador del Modulo Buscador 
   public function search($searchq = "resultado")  
   {
        return view('search',compact('searchq'));
   }

   //Controlador del Modulo BuscadorQ
   public function searchq(Request $resquest)  
   {
        $this->validate($resquest,[
            'search' => 'required'
        ]);
        if($resquest->has("search")){
            return view('searchq',compact('resquest'));
        }
   }

    public function form() //Controlador del Modulo Formulario
    {
        return view('form');
    }

    public function ansers(Request $resquest)
    {
        // Para saber si tiene respuesta /*return $resquest->all();
        $this->validate($resquest,[
            'nombre' => 'required',
            'email' => 'required|email'
        ]);
    }

    
}
