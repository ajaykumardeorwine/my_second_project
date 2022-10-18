<?php



use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductDatatableController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RSSFeedController;





Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');






Route::get('/base', function () {
    return view('dashboard');
});


// use resource route
// Route::resource('products', ProductController::class);





//relation base




//use laravel DataTable
Route::get('datatables', [ProductDatatableController::class, 'index']);
Route::get('datatables/list', [ProductDatatableController::class, 'getData'])->name('datatables.list');
// Route::get('user-signin', function () {
//     return view('layouts.partilas.user_signin');
// });

// Route::get('user-signup', function () {
//     return view('layouts.partilas.user_signup');
// });




//user login register
Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');


//use middleware
Route::get('/test-user', [HomeController::class, 'index2'])->middleware(['auth', 'is-active']);
//

Route::middleware(['auth', 'is-active'])->group(function () {
    Route::get('/admin', function () {
      return view('dashboard');
    })->name('dashboard');

    Route::get('/categories', 'ProductDatatableController@categories')->name('categories');
    Route::get('category/mobile',[CategoryController::class,'mobile'])->name('mobile');
    Route::get('category/leptop',[CategoryController::class,'leptop'])->name('leptop');
    Route::get('category/computer',[CategoryController::class,'computer'])->name('computer');
    Route::get('category/teblet',[CategoryController::class,'teblet'])->name('teblet');
    
    
});



// use roles and permissions
  

  
Route::group(['middleware' => ['auth']], function() {
    Route::get('/house', [HomeController::class, 'index'])->name('home');
Route::resource('roles', RoleController::class);
Route::resource('users', UserController::class);
Route::resource('products', ProductController::class);
});
