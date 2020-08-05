<?php //kegunaannya adalah untuk pembuka dalam bahasa pemograman PHP

use Illuminate\Support\Facades\Route;  //kegunaannya adalah untuk

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

Route::get('/', function () {   //kegunaannya (route) adalah untuk menangani request kita di Url kemudian mengarahkan aplikasi untuk memanggil halaman/									resouce tertentu || kegunaannya (get) adalah untuk menampilkan resource bisa berupa Fungsi atau Controller          
	return view('welcome');     //kegunaanya adalah untuk memanggil kembali function yang akan dijalankan ketika suatu URL diakses dengan method yang 								sesuai
});

Auth::routes(); //kegunaannya adalah untuk class helper yang nge generate semua route untuk authentikasi

Route::get('/home', 'HomeController@index')->name('home'); //kegunaannya (route) adalah untuk menangani request kita di Url kemudian mengarahkan																	aplikasi untuk memanggil halaman/resouce tertentu ('home') || kegunaannya (get) adalah untuk															 menampilkan resource bisa berupa Fungsi atau Controller('HomeController@index')
Route::get('/cek_role', 'AuthController@roles');  //kegunaannya (route) adalah untuk menangani request kita di Url kemudian mengarahkan aplikasi untuk m													memanggil halaman/resouce tertentu ('cek_role') || kegunaannya (get) adalah untuk menampilkan															resource bisa berupa Fungsi atau Controller('AuthController@roles')


Route::group(['middleware' => ['role:admin']], function () { //kegunaannya adalah untuk
	Route::get('/admin/dashboard', 'AdminController@index'); //kegunaannya adalah untuk
	Route::get('admin/daftar-upacara', 'AdminController@DaftarUpacara'); //kegunaannya adalah untuk
	Route::get('admin/tambah-petugas-upacara', 'AdminController@TambahPetugasUpacara'); //kegunaannya adalah untuk
	Route::post('admin/tambah-petugas-upacara', 'AdminController@SaveSchedule'); //kegunaannya adalah untuk
	



});

Route::group(['middleware' => ['role:guru']], function () { //kegunaannya adalah untuk
	Route::get('/guru', function (){ return 'ini guru'; }); //kegunaannya adalah untuk
	Route::get('/guru/daftar-honor', function (){ return 'ini GAJI guru'; }); //kegunaannya adalah untuk

});

Route::group(['middleware' => ['role:siswa']], function () { //kegunaannya adalah untuk
	Route::get('/siswa', function (){ return 'ini siswa'; }); //kegunaannya adalah untuk

});

Route::get('/index', 'HomeController@pageblank'); //kegunaannya adalah untuk
