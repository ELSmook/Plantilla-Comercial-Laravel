<?php

namespace App\Http\Controllers;

use Illuminate\Console\Scheduling\Event;
use Illuminate\Http\Request;
use App\Models\Fotos;

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
        //$todos_los_eventos= Event::all();
        
        //$eventos= [];
        
        //foreach($todos_los_eventos as $evento){
            
        //    $eventos[]= [
        //        'title' => $evento->event,
        //        'start' => $evento->start_date,
        //        'end' => $evento->end_date,
        //    ];

        //}
        //, compact('eventos')
        //return view('panel.index');
        return view('home');
    }

    public function WelcomeIndex(){

        $fotosCabecera = Fotos::where('seccion',"=","Cabecera")->inRandomOrder()->take(3)->get();
        $fotosQuince = Fotos::where('seccion',"=","Quince")->inRandomOrder()->take(3)->get();
        $fotosCasamiento = Fotos::where('seccion',"=","Casamiento")->inRandomOrder()->take(3)->get();
        $fotosFiestas = Fotos::where('seccion',"=","Otro tipo de evento")->inRandomOrder()->take(3)->get();
    

    return view('welcome', compact('fotosCabecera','fotosQuince','fotosCasamiento','fotosFiestas'));
    }

}
