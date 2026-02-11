<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use App\Models\Categoria;
use Barryvdh\DomPDF\Facade\PDF;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ProductosExport;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        
        $productos = Producto::where('vendedor_id', auth()->user()->id) // Filtra los productos del VENDEDOR LOGUEADO
        ->latest() // Ordena de manera DESC por el campo "created_at"
        ->get(); // Convierte los datos extraidos de la BD en un Array    
        
        //return $productos;

    // Retornamos una vista y enviamos la variable "productos"
    return view('panel.vendedor.lista_productos.index', compact('productos'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $producto = new Producto();
        // Recuperamos todas las categorias de la BD
        $categorias = Categoria::get(); // Recordar importar el modelo Categoria!!
    
        // Retornamos la vista de creacion de productos, enviamos el producto y las categorias
        return view('panel.vendedor.lista_productos.create', compact('producto', 'categorias'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    $producto = new Producto();
    $producto->nombre = $request->get('nombre');
    $producto->descripcion = $request->get('descripcion');
    $producto->precio = $request->get('precio');
    $producto->categoria_id = $request->get('categoria_id');
    $producto->vendedor_id = auth()->user()->id;
    if ($request->hasFile('imagen')) {
    // Subida de imagen al servidor (public > storage)
    $image_url = $request->file('imagen')->store('public/producto');
    $producto->imagen = asset(str_replace('public', 'storage', $image_url));
} else {
$producto->imagen = '';
}
// Almacena la info del producto en la BD
$producto->save();
return redirect()
->route('producto.index')
->with('alert', 'Producto "' . $producto->nombre . '" agregado exitosamente.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        //
        return view('panel.vendedor.lista_productos.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto)
    {
        //
    $categorias = Categoria::get();
    return view('panel.vendedor.lista_productos.edit', compact('producto', 'categorias'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        //
    $producto->nombre = $request->get('nombre');
    $producto->descripcion = $request->get('descripcion');
    $producto->precio = $request->get('precio');
    $producto->categoria_id = $request->get('categoria_id');
            
    if ($request->hasFile('imagen')) {
    // Subida de la imagen nueva al servidor
    $image_url = $request->file('imagen')->store('public/producto');
    $producto->imagen = asset(str_replace('public', 'storage', $image_url));
    }
    // Actualiza la info del producto en la BD
        $producto->update();
        
        return redirect()
        ->route('producto.index')
        ->with('alert', 'Producto "' .$producto->nombre. '" actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
            //
        //$producto->Habilitado = $request->get('Habilitado');
        //$producto->delete();
        // $productos = Producto::where('vendedor_id', auth()->user()->id)
        //$producto->Habilitado = $request->get('Habilitado');
        
        switch ($producto) {
            case ($producto->Habilitado==1):
                $producto->Habilitado=0;
                break;
            case ($producto->Habilitado==0):
                $producto->Habilitado=1;
                break;
        }

        $producto->save();
    return redirect()
    ->route('producto.index')
    ->with('alert', 'Producto eliminado exitosamente.');
    }

    public function exportarProductosPDF() {

        // Traemos los productos del vendedor logueado
        // proteger con un permiso
        $productos = Producto::where('vendedor_id', auth()->user()->id)->get();

        //return $productos;

        // capturamos la vista y los datos que enviaremos a la misma
        $pdf = PDF::loadView('panel.vendedor.lista_productos.pdf_productos', compact('productos'));

        // Renderizamos la vista
        $pdf->render();

        // Visualizaremos el PDF en el navegador
        return $pdf->stream('productos.pdf');
        //download
    }
    public function exportarProductosExcel() {
        return Excel::download(new ProductosExport, 'productos.xlsx');
    }
    
    public function graficosProductosxCategoria() {
        // Si se hace una peticion AJAX
        if(request()->ajax()) {
        $labels = [];
        $counts = [];
        $categorias = Categoria::get();
        foreach($categorias as $categoria) {
        $labels[] = $categoria->nombre;
        $counts[] = Producto::where('categoria_id', $categoria->id)->count();
        }
        $response = [
        'success' => true,
        'data' => [$labels, $counts]
        ];
        return json_encode($response);
        }
        return view('panel.vendedor.lista_productos.graficos_productos');
    }
    
    public function exportarGraficosPDF(Request $request) {
            // Traemos los datos enviados desde el formulario
            $data = $request->get('config_grafics');
            // capturamos la vista y los datos que enviaremos a la misma
            $pdf = PDF::loadView('panel.vendedor.lista_productos.pdf_productos_graficos', compact('data'));
            // Renderizamos la vista
            $pdf->render();
            // Visualizaremos el PDF en el navegador
            return $pdf->stream('chartjs_productos.pdf');
    }
}
