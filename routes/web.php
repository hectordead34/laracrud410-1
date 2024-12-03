<?php



use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

// Ruta principal que carga la vista de inicio
Route::get('/', function () {
    return view('index');
})->name('index');

// Rutas RESTful para productos
Route::resource('/products', ProductController::class);

// Ruta adicional para la acción de eliminar productos con confirmación
Route::get('/products/{product}/delete', [ProductController::class, 'delete'])->name('products.delete');

// Rutas RESTful para marcas
Route::resource('/brands', BrandController::class);

// Rutas RESTful para clientes
Route::resource('/clients', ClientController::class);

Route::resource('/sales',App\Http\Controllers\SaleController::class);

Route::get('/sales/{sale}', [SaleController::class, 'show'])->name('sales.show');
Route::get('/sales/{sale}/edit', [SaleController::class, 'edit'])->name('sales.edit');
Route::delete('/sales/{sale}', [SaleController::class, 'destroy'])->name('sales.delete');

Route::resource('/addresses',App\Http\Controllers\AddressController::class);

Route::get('/addresses/{address}/delete',[App\Http\Controllers\AddressController::class, 'delete'])->name('addresses.delete');