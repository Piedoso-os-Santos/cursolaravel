<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\SiteController;

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

// Controllers resource
Route::resource('produtos',ProdutoController::class);






// Route::get('/', [ProdutoController::class,'index'])->name('produto.inex');
Route::get('/',[SiteController::class ,'index'])->name('site.index');

Route::get('/produto/{slug}',[SiteController::class,'details'])->name('site.details');

Route::get('/categoria/{id}',[SiteController::class,'categoria'])->name('site.categoria');


// Route::get('/produto/{id}',[ProdutoController::class,'show'])->name('produto.show');
 
// Route::get('/empresa',function(){
//     return view('site/empresa');
// });

// // Aprendendo a routa Any, permite todo tipo de acesso
// Route::any('/any',function(){
//     return 'Permite todo tipo de acesso http  (put,delete,get,post)';
// });

// Route::match(['get','post'],'/match',function(){
//     return 'Permite apenas acessos definidos';
// });

// // Adicionando variaveis a url
// Route::get('/produto/{id}/{categoria}',function($id,$categoria){
//     return 'O id do produto eh '.$id.' Categoria: '.$categoria; 
// });

// // Direcioanmentos
// // Route::redirect('/sobre', '/empresa');
// Route::view('/empresa','site/empresa');


// Route::get('/news',function(){
//     return view('news');
// })->name('noticias');


// Route::get('/novidades',function(){
//     return redirect()->route('noticias');
// });

// Agrupamento com prefixo
// Route::prefix('admin')->group(function(){
//     Route::get('dashboard',function(){
//        return 'dashboard' ;
//     })->;
//     Route::get('users',function(){
//         return 'users' ;
//      });
//      Route::get('clientes',function(){
//         return 'clientes' ;
//      });
// });

// Agrupamento por nomee
// Route::name('admin')->group(function(){
//     Route::get('admin/dashboard',function(){
//        return 'dashboard' ;
//     })->name('dashborard');
//     Route::get('admin/users',function(){
//         return 'users' ;
//      })->name('users');
//      Route::get('admin/clientes',function(){
//         return 'clientes' ;
//      })->name('admin/clientes');
// });

// Agrupamento por prefixos e nomes

// Route::group([
//     'prefix' => 'admin',
//     'as' => 'admin.'
// ],function(){

//     Route::name('dashboar')->group(function(){
//     Route::get('dashboard',function(){
//        return 'dashboard' ;
//     })->name('dashborard');
//     Route::get('users',function(){
//         return 'users' ;
//      })->name('users');
//      Route::get('clientes',function(){
//         return 'clientes' ;
//      })->name('clientes');
//     });
// });

