<?php


namespace App\Http\Controllers;

use App\Models\Fotos;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Categoria;
use App\Models\Seccion;
//use Barryvdh\DomPDF\Facade\PDF;
//use Maatwebsite\Excel\Facades\Excel;
//use App\Exports\ProductosExport;

class FotosController extends Controller
{

    public function index() {

    /*if(request()->is('panel/*')) {

    }*/
    // ->take(3)->get()
      $fotos= Fotos::get();
      $secciones= Seccion::get();

    return view('panel.organizador.lista_eventos.index', compact('fotos','secciones'));
    }



    public function store(Request $request){

        

        $request->validate([
        'imagen.*' => 'required|image|mimes:png,jpg,jpeg,webp'
        ]);

        if ($request->hasFile('imagen')) {
            foreach($request->file('imagen') as $image_url){
            $foto = new Fotos();
            $foto->seccion = $request->get('seccion');

            $almacenar = $image_url->store('public/fotos'); // Ejemplo: "public/fotos/abcd123.jpg" 
            $foto->imagen = $almacenar; // este sería el path relativo 
            $foto->save();

        }
        /*} else {
        $foto->imagen = '';*/
        }
        //$foto->save();
        return redirect()
        ->route('fotos.index')
        ->with('alert', 'Se agregaron exitosamente las fotos.');

    }

    public function destroy(Fotos $foto){
        
        //$imagen_url= $foto->imagen;
        
    
        //Fotos::where('imagen',"=",$imagen_url)->delete();

        //$ruta = str_replace('http://127.0.0.1:8000/storage/', '', $imagen_url); 
        //Storage::delete('public/' . $ruta);

        Storage::delete($foto->imagen); // Borrar registro de BD 
        $foto->delete();


        return redirect()
        ->route('fotos.index')
        ->with('alert', 'Foto eliminada exitosamente.');
    }

}

?>