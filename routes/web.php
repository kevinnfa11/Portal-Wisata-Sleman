<?php

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
    return view('index');
});


Route::get('/sejarah', 'PortalController@sejarah');
Route::get('/sejarahedit', 'PortalController@sejarahubah');
Route::get('/admin/sejarah/edit/{id}', 'PortalController@edit');
Route::post('/admin/sejarah/update','PortalController@update');
Route::get('/admin/sejarah/hapus/{id}', 'PortalController@hapus');
Route::get('/admin/sejarah', 'PortalController@upload');
Route::post('/admin/sejarah/proses', 'PortalController@proses_upload');

Route::get('/rekreasi', 'PortalController@rekreasi');
Route::get('/admin/rekreasi/edit/{id}', 'PortalController@edit2');
Route::post('/admin/rekreasi/update','PortalController@update2');
Route::get('/admin/rekreasi/hapus/{id}', 'PortalController@hapus2');
Route::get('/admin/rekreasi', 'PortalController@upload2');
Route::post('/admin/rekreasi/proses', 'PortalController@proses_upload2');


Route::get('/kuliner', 'PortalController@kuliner');
Route::get('/admin/kuliner/edit/{id}', 'PortalController@edit3');
Route::post('/admin/kuliner/update','PortalController@update3');
Route::get('/admin/kuliner/hapus/{id}', 'PortalController@hapus3');
Route::get('/admin/kuliner', 'PortalController@upload3');
Route::post('/admin/kuliner/proses', 'PortalController@proses_upload3');



Route::get('/jogjabay', 'PortalController@jogjabay');
Route::get('/admin/jogjabay/edit/{id}', 'PortalController@edit4');
Route::post('/admin/jogjabay/update','PortalController@update4');
Route::get('/admin/jogjabay/hapus/{id}', 'PortalController@hapus4');
Route::get('/admin/jogjabay', 'PortalController@upload4');
Route::post('/admin/jogjabay/proses', 'PortalController@proses_upload4');


Route::get('/kembang', 'PortalController@kembang');
Route::get('/admin/kembang/edit/{id}', 'PortalController@edit5');
Route::post('/admin/kembang/update','PortalController@update5');
Route::get('/admin/kembang/hapus/{id}', 'PortalController@hapus5');
Route::get('/admin/kembang', 'PortalController@upload5');
Route::post('/admin/kembang/proses', 'PortalController@proses_upload5');


Route::get('/sindukusuma', 'PortalController@sindukusuma');
Route::get('/admin/sindukusuma/edit/{id}', 'PortalController@edit6');
Route::post('/admin/sindukusuma/update','PortalController@update6');
Route::get('/admin/sindukusuma/hapus/{id}', 'PortalController@hapus6');
Route::get('/admin/sindukusuma', 'PortalController@upload6');
Route::post('/admin/sindukusuma/proses', 'PortalController@proses_upload6');

Route::get('/bluelagoon', 'PortalController@bluelagoon');
Route::get('/admin/bluelagoon/edit/{id}', 'PortalController@edit7');
Route::post('/admin/bluelagoon/update','PortalController@update7');
Route::get('/admin/bluelagoon/hapus/{id}', 'PortalController@hapus7');
Route::get('/admin/bluelagoon', 'PortalController@upload7');
Route::post('/admin/bluelagoon/proses', 'PortalController@proses_upload7');


Route::get('/ratuboko', 'PortalController@ratuboko');
Route::get('/admin/ratuboko/edit/{id}', 'PortalController@edit8');
Route::post('/admin/ratuboko/update','PortalController@update8');
Route::get('/admin/ratuboko/hapus/{id}', 'PortalController@hapus8');
Route::get('/admin/ratuboko', 'PortalController@upload8');
Route::post('/admin/ratuboko/proses', 'PortalController@proses_upload8');


Route::get('/prambanan', 'PortalController@prambanan');
Route::get('/admin/prambanan/edit/{id}', 'PortalController@edit9');
Route::post('/admin/prambanan/update','PortalController@update9');
Route::get('/admin/prambanan/hapus/{id}', 'PortalController@hapus9');
Route::get('/admin/prambanan', 'PortalController@upload9');
Route::post('/admin/prambanan/proses', 'PortalController@proses_upload9');


Route::get('/monjali', 'PortalController@monjali');
Route::get('/admin/monjali/edit/{id}', 'PortalController@edit10');
Route::post('/admin/monjali/update','PortalController@update10');
Route::get('/admin/monjali/hapus/{id}', 'PortalController@hapus10');
Route::get('/admin/monjali', 'PortalController@upload10');
Route::post('/admin/monjali/proses', 'PortalController@proses_upload10');




Route::get('/contact', 'PortalController@create');
Route::post('/contact/post', 'PortalController@post');

Route::get('/rekreasiedit', function () {
    return view('rekreasiubah');
});

Route::get('/museum', function () {
    return view('museum');
});

Route::get('/jejamuran', function () {
    return view('jejamuran');
});

Route::get('/rosella', function () {
    return view('rosella');
});

Route::get('/admin/konten', function () {
    return view('ubahkonten');
});


Route::get('/upsidedown', function () {
    return view('upsidedown');
});

Route::get('/sate', function () {
    return view('sate');
});

Route::get('/sijeckex', function () {
    return view('sijeckex');
});

Route::get('/tengkleng', function () {
    return view('tengkleng');
});

Route::get('/bakmi', function () {
    return view('bakmi');
});

Route::get('/klotok', function () {
    return view('klotok');
});

Route::get('/sateratu', function () {
    return view('sateratu');
});

Route::get('/satebathok', function () {
    return view('satebathok');
});

Route::get('/entok', function () {
    return view('entok');
});

Route::get('/angkringan', function () {
    return view('angkringan');
});

Route::get('/sejarah/{id}/show','PortalController@show');

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin');
