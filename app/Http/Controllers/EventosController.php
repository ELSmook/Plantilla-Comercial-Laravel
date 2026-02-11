<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use App\Models\Categoria;
//use Barryvdh\DomPDF\Facade\PDF;
//use Maatwebsite\Excel\Facades\Excel;
//use App\Exports\ProductosExport;

class EventosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        
        //$productos = Producto::where('vendedor_id', auth()->user()->id) // Filtra los productos del VENDEDOR LOGUEADO
        //->latest() // Ordena de manera DESC por el campo "created_at"
        //->get(); // Convierte los datos extraidos de la BD en un Array    
        
        //return $productos;

    // Retornamos una vista y enviamos la variable "productos"
    //return view('panel.vendedor.lista_productos.index', compact('productos'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        //$producto = new Producto();
        // Recuperamos todas las categorias de la BD
        //$categorias = Categoria::get(); // Recordar importar el modelo Categoria!!
    
        // Retornamos la vista de creacion de productos, enviamos el producto y las categorias
        return view('panel.vendedor.lista_productos.create', compact('producto', 'categorias'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    request()->validate(Evento::$rules);

    $evento = new Evento();

    $evento = Evento::create($request->all());

    $evento->titulo = $request->get('titulo');
    $evento->descripcion = $request->get('descripcion');
    $evento->inicio = $request->get('inicio');
    $evento->fin = $request->get('fin');
    
    

    $evento->save();

    return response()->json(['mensaje' => 'Evento guardado correctamente']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Evento $evento)
    {
        //
        $evento = Evento::all();

        $eventosCalendario= $evento->map( function($evento){

            return [
            'id' => $evento->id,
            'descripcion'=> $evento->descripcion,
            'title' => $evento->titulo,
            'start' => Carbon::parse($evento->inicio)->format('Y-m-d\TH:i:s'),
            'end' => $evento->fin ? Carbon::parse($evento->fin)->format('Y-m-d\TH:i:s') : null,
            ];

        });

        return response()->json($eventosCalendario);
        //return view('panel.vendedor.lista_productos.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
    $evento = Evento::find($id);


    return response()->json($evento);
    //return view('panel.vendedor.lista_productos.edit', compact('producto', 'categorias'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Evento $evento, Request $request)
    {
        //
        request()->validate(Evento::$rules);

        $evento->update($request->all());

        return response()->json($evento);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
            //
        //$producto->Habilitado = $request->get('Habilitado');
        //$producto->delete();
        // $productos = Producto::where('vendedor_id', auth()->user()->id)
        //$producto->Habilitado = $request->get('Habilitado');
        
        $evento = Evento::find($id)->delete();
        

        return response()->json($evento);
    }

    
}
