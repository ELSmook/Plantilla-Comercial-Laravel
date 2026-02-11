<?php

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\FotosController;
use App\Models\Fotos;
use Illuminate\Support\Facades\Route;

Route::get("/", function (){
    return view( "panel.index");
    
});
Route::resource('/productos', ProductoController::class)->names('producto');

Route::get('exportar-productos-pdf', [ProductoController::class, 'exportarProductosPDF'])->name('exportar-productos-pdf');

Route::get('exportar-productos-excel', [ProductoController::class, 'exportarProductosExcel'])->name('exportar-productos-excel');

Route::get('graficos-productos',[ProductoController::class,'graficosProductosxCategoria'])->name('graficos-productos');

Route::post('exportar-graficos-pdf',[ProductoController::class,'exportarGraficosPDF'])->name('exportar-graficos-pdf');


//Route::get('/fotos', FotosController::class)->names('fotos.index');
Route::resource("/fotos", FotosController::class)->names("fotos");
// subirfotos y eliminarFoto
//Route::put('/fotos/{foto}', [FotosController::class , 'store'])->name('fotos.store');
//Route::get('/departamentos', [DepartamentosController::class, 'indexSecundario'])->name('departamento.alt-index');
Route::delete("/fotos/foto/{foto}", [FotosController::class, "destroy"])->name("fotos.destroy");

?>