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

Route::get('/', function () {  
	return view('welcome'); 
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home'); 
Route::get('/cek_role', 'AuthController@roles'); 


Route::group(['middleware' => ['role:admin']], function () {
	Route::get('/admin/dashboard', 'AdminController@index'); 

	Route::get('/admin/daftar-upacara', 'AdminController@DaftarUpacara');

	Route::get('/admin/tambah-petugas-upacara', 'AdminController@TambahPetugasUpacara');
	Route::post('/admin/tambah-petugas-upacara', 'AdminController@SaveSchedule'); 
	Route::get('/admin/{id}/edit','AdminController@edit');

	Route::get('/admin/tambah-pembina', 'AdminController@TambahPembina'); 
	Route::post('/admin/tambah-pembina', 'AdminController@SaveTeacher');
	Route::get('/admin/{id}/edit','AdminController@editPembina');
 
	
	Route::get('/admin/tambah-kelas', 'AdminController@TambahKelas');
	Route::post('/admin/tambah-kelas', 'AdminController@SaveClass'); 

});

Route::group(['middleware' => ['role:guru']], function () { 

	Route::get('/guru', function (){ return 'ini guru'; }); 
	Route::get('/guru/daftar-honor', function (){ return 'ini GAJI guru'; }); 

});

Route::group(['middleware' => ['role:siswa']], function () { 
	Route::get('/siswa', function (){ return 'ini siswa'; }); 

});

Route::get('/index', 'HomeController@pageblank'); 