<?php

use App\Http\Controllers\TestimoniController;

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

Route::get('/', 'HomeController@welcome');
Route::post('/loginCoba', 'Auth\LoginController@loginCoba')->name('loginCoba');
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/{id}', 'HomeController@index')->name('home');

//alumni
Route::get('/alumniDash/{id}', 'alumniController@index')->name('alumniDash');
Route::post('/proAlumni', 'alumniController@proAlumni')->name('proAlumni');
Route::get('/formBiodata', function () {
    return view('alumni');
});
Route::get('/showBiodata', 'alumniController@showAlumni');
Route::get('/deleteAlum/{nim}', 'alumniController@delAl')->name('delAl');
Route::get('/editAlum/{nim}', 'alumniController@editAl')->name('editlAl');
Route::POST('/updateAlum', 'alumniController@updateAl')->name('upKat');
Route::get('/editProfile/{nim}', 'alumniController@editProfile')->name('editlProfile');
Route::get('/formDataAlumni', function () {
    return view('formDataAlumni');
});
Route::post('/alumni', 'alumniController@alumni')->name('alumni');
Route::get('/dataAlumni', 'alumniController@showData');
Route::post('/importBio', 'alumniController@importBio');
Route::post('/importAlumni', 'alumniController@importAlumni');

//kabarJurusan
Route::get('/formKabar', function () {
    return view('kabarJurusan');
});
Route::post('/inpKabar', 'kabarController@inpKabar')->name('inpKabar');
Route::get('/showKabar/{id}', 'kabarController@showKabar');
Route::get('/editKabar/{id}', 'kabarController@editKabar');
Route::post('/prosesEdit/{id}', 'kabarController@prosesEdit');
Route::get('/deleteKabar/{id}', 'kabarController@deleteKabar');
Route::get('/filterKab', 'kabarController@filterKab');
Route::get('/kabarKu/{idUser}','kabarController@kabarKu');
Route::post('/persetujuanKabar/{id}', 'kabarController@statusKabar');
Route::get('/kabarr', 'kabarController@kabarr');

//pertanyaan
Route::get('/buatForm', 'pertanyaanController@buatForm');
Route::post('/prosesForm', 'pertanyaanController@prosesForm');
Route::get('/listForm', 'pertanyaanController@listForm');
Route::get('/showPertanyaan/{idForm}', 'pertanyaanController@listPertanyaan');
Route::get('/formPertanyaan/{idForm}', 'pertanyaanController@formPertanyaan');
Route::post('/prosesBuat', 'pertanyaanController@prosesBuat');
Route::get('/pertanyaan/{idForm}', 'pertanyaanController@pertanyaan')->name('pertanyaan');
Route::post('/copyPertanyaan/{idForm}', 'pertanyaanController@copyPertanyaan');
Route::get('/deletePertanyaan/{id}', 'pertanyaanController@delPertanyaan');
Route::get('/editPertanyaan/{id}', 'pertanyaanController@editPertanyaan');
Route::post('/prosesEdit', 'pertanyaanController@prosesEdit');
Route::post('/jawaban', 'pertanyaanController@prosesIsi');
Route::get('/showJawaban/{idForm}', 'pertanyaanController@showJawaban');
Route::get('/exportJawaban/{idForm}', 'pertanyaanController@export_excel');
Route::get('/jawabanPdf/{idForm}', 'pertanyaanController@export_pdf');

//profile
Route::get('/showProfile/{nim}', 'HomeController@showProfile')->name('showProfile');

Route::post('/ktAlumni', 'TestimoniController@ktAlumni')->name('ktAlumni');
Route::get('/formAlumni', function () {
    return view('testimoni');
});
Route::get('/testimoni', 'TestimoniController@index');
Route::get('/listTestii','TestimoniController@show');
Route::get('/listTestii/delete/{id_testimoni}', 'TestimoniController@destroy');
Route::post('/listTestii/update/{id_testimoni}','TestimoniController@update');
Route::post('/listTestii/persetujuanTesti/{id_testimoni}', 'TestimoniController@statusTesti');
Route::get('/about', function () {
    return view('about');
});
Route::get('/pesan','TestimoniController@sukses');

//user
Route::get('/registerU', function () {
    return view('auth.register');
});
Route::post('/registerUser','Auth\RegisterController@create');

//email
Route::get('/formLink','pertanyaanController@formLink');
Route::post('/prosesLink','pertanyaanController@prosesLink');
Route::get('/kirim-email','HomeController@email');
Route::get('/kirim-wa','HomeController@whatsappNotification');