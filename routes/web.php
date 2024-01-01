<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PropertieController;
use App\Http\Controllers\backend\BienController;
use App\Http\Controllers\backend\RoleController;
use App\Http\Controllers\backend\ContactController;


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

//bien
Route::get('/bien/{type?}', [BienController::class, 'index'])->name('bien.index');
Route::get('/bien/view/{id}', [BienController::class, 'show'])->name('bien.show');
Route::get('pagination/fetch_data', [BienController::class, 'getwithajax'])->name('ajax.pagination.fetch');

Route::get('/list-bien', [BienController::class, 'allbien'])->name('all.bien.index');
Route::get('list-bien/fetch_data', [BienController::class, 'getallwithajax'])->name('all.bien.pagination.fetch');


Route::get('/search-bien', [BienController::class, 'listfromacceuil'])->name('all.bien.acceuil');
Route::get('list-bien/search', [BienController::class, 'filter'])->name('all.bien.acceuil.fetch');

//contact
Route::get('/contact', [ContactController::class, 'contact'])->name('contact.send');
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');
Route::get('/contact/list', [ContactController::class, 'index'])->name('contact.index');
Route::get('/contact/view/{id}', [ContactController::class, 'show'])->name('contact.show');

//userinfo
Route::get('/update-profile', [ProfileController::class, 'infoperso'])->name('infoperso');
Route::put('/save-profile', [ProfileController::class, 'updateProfile'])->name('update-profile');


Route::get('/', [Controller::class, 'home'])->name('home');
/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/user/logout', [UserController::class, 'UserLogout'])->name('user.logout');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Permission All Route
Route::controller(RoleController::class)->group(function(){

    Route::get('/all/permission' , 'AllPermission')->name('all.permission');
    Route::get('/add/permission' , 'AddPermission')->name('add.permission');
    Route::post('/store/permission' , 'StorePermission')->name('store.permission');
    Route::get('/edit/permission/{id}' , 'EditPermission')->name('edit.permission');

    Route::post('/update/permission' , 'UpdatePermission')->name('update.permission');

    Route::get('/delete/permission/{id}' , 'DeletePermission')->name('delete.permission');
   });

   // Roles All Route
Route::controller(RoleController::class)->group(function(){

    Route::get('/all/roles' , 'AllRoles')->name('all.roles');
    Route::get('/add/roles' , 'AddRoles')->name('add.roles');
    Route::post('/store/roles' , 'StoreRoles')->name('store.roles');
    Route::get('/edit/roles/{id}' , 'EditRoles')->name('edit.roles');
    Route::post('/update/roles' , 'UpdateRoles')->name('update.roles');
    Route::get('/delete/roles/{id}' , 'DeleteRoles')->name('delete.roles');

 // add role permission

 Route::get('/add/roles/permission' , 'AddRolesPermission')->name('add.roles.permission');
 Route::post('/role/permission/store' , 'RolePermissionStore')->name('role.permission.store');

 Route::get('/all/roles/permission' , 'AllRolesPermission')->name('all.roles.permission');

 Route::get('/admin/edit/roles/{id}' , 'AdminRolesEdit')->name('admin.edit.roles');
 Route::post('/admin/roles/update/{id}' , 'AdminRolesUpdate')->name('admin.roles.update');
 Route::get('/admin/delete/roles/{id}' , 'AdminRolesDelete')->name('admin.delete.roles');
   });


    Route::get('/properties', [PropertieController::class, 'index'])->name('properties.index');
    Route::get('/properties/list', [PropertieController::class, 'indexAjax'])->name('ajax.propertieback.fetch');
    Route::get('/properties/create', [PropertieController::class, 'create'])->name('properties.create');
    Route::post('/properties', [PropertieController::class, 'store'])->name('properties.store');
  
    Route::delete('/properties/delete', [PropertieController::class, 'deleteProperty'])->name('property.delete');


require __DIR__.'/auth.php';
