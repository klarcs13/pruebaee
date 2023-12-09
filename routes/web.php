
<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\afiliadoController;

use App\Http\Controllers\depositoController;

use App\Http\Controllers\retiroController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



route::get('/afiliado/{emplead}',[afiliadoController::class,'index']);


route::get('/deposito/{emplead}/{idafi}/{nombre}',[depositoController::class,'index']);
route::get('/deposito/create/{idafi}/{idem}/{nombre}',[depositoController::class,'create']);

route::get('/retiro/{emplead}/{idafi}/{nombre}',[retiroController::class,'index']);

route::get('/retiro/create/{idafi}/{idem}/{nombre}',[retiroController::class,'create']);


route::resource('/empleado','App\Http\Controllers\empleadoController');
route::resource('/afiliado2','App\Http\Controllers\afiliadoController');
route::resource('/deposito','App\Http\Controllers\depositoController');
route::resource('/retiro','App\Http\Controllers\retiroController');

/*
Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
*/