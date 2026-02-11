<?php

namespace App\Exports;

use App\Models\Producto;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
class ProductosExport implements FromCollection , WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array
        {
        return [
        'nombre', 'descripcion', 'precio', 'categoria'
        ];
        }
        public function collection()
        {
        return Producto::select('productos.nombre', 'descripcion', 'precio', 'categorias.nombre as categoria')
        ->join('categorias', 'categorias.id', 'productos.categoria_id')
        ->get();
        }
    
}
