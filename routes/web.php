<?php

use Illuminate\Support\Facades\Route;
use Monolog\Handler\RotatingFileHandler;

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

Route::get('/nama', function () {
    return view('nama');
});
Route::get('/tanggal', function () {
    return view('tanggal');
});
Route::get('/alamat', function () {
    return view('alamat');
});
Route::get('/hobi', function () {
    return view('hobi');
});
Route::get('/teman', function () {
    return view('teman');
});

Route::get('/yayasan', function () {
    return view('firman');
});

Route::get('page/{page?}', function ($hal = 2){
    return "Halaman <b>$hal</b>";
});

Route::get('user/{name?}', function ($nama = "Hello Word"){
    return "<b> $nama </b>";
});

Route::get('pesan/{makanan?}/{minuman?}/{cemilan?}', function ($makanan = null,$minuman = null,$cemilan = null) {
    if ($makanan == null && $minuman == null && $cemilan == null) {
        $sa = "Anda Tidak Pesan, Silahkan Pulang";
    }
            if ($makanan != null ) {
            $sa = "Pesanan <br>"
            . "Makanan : $makanan <br>";
        }
        if ($makanan != null && $minuman != null ) {
            $sa = "Pesanan <br>"
            . "Makanan : $makanan <br>"
            . "Minuman : $minuman <br>";
        }

        if ($makanan != null && $minuman != null && $cemilan != null) {
            $sa = "Pesanan <br>"
            . "Makanan : $makanan <br>"
            . "Minuman : $minuman <br>"
            . "Cemilan : $cemilan";
}

    return "$sa";
});


Route::get('profile', function() {
    $nama = "abdul";
    return view('profile', compact('nama'));
});

Route::get('biodata', function() {
    $nama = "Firman Romansyah";
    $umur = "17 Tahun";
    $alamat = "Kp.Cilebak";
    $sekolah = "SMK ASSALAAM";
    $kelas = "XII RPL 2";
    $hobi = "Bermain game, nonton";
    return view('biodata', compact('nama', 'umur', 'alamat', 'sekolah', 'kelas', 'hobi'));
});


route::get('blog', function () {
    $posts = [
        ['id' => 1, 'title' => 'Loren Ipsun 1', 'content' => 'Content Pertama'],
        ['id' => 2, 'title' => 'Loren Ipsun 2', 'content' => 'Content Kedua'],
        ['id' => 3, 'title' => 'Loren Ipsun 3', 'content' => 'Content Ketiga'],
    ];

    return view('blog', compact('posts'));
});

route::get('data', function() {
    $post = [
        ['id' => 1, 'nama' => 'Firman Romansyah', 'username' => 'Demon', 'email' => 'fromansyah206@gmail.com', 'alamat' => 'Bandung', 'mapel' => [
            'mapel1' => 'Bahasa Indonesia',
            'mapel2' => 'Bahasa Inggris',
            'mapel3' => 'Bahasa Indonesia',
        ] ],
        ['id' => 2, 'nama' => 'Firman Romansyah', 'username' => 'Demon', 'email' => 'fromansyah206@gmail.com', 'alamat' => 'Bandung', 'mapel' => [
            'mapel1' => 'Bahasa Indonesia',
            'mapel2' => 'Bahasa Inggris',
            'mapel3' => 'Bahasa Indonesia',
        ] ],
        ['id' => 3, 'nama' => 'Firman Romansyah', 'username' => 'Demon', 'email' => 'fromansyah206@gmail.com', 'alamat' => 'Bandung', 'mapel' => [
            'mapel1' => 'Bahasa Indonesia',
            'mapel2' => 'Bahasa Inggris',
            'mapel3' => 'Bahasa Indonesia',
        ] ],
        ['id' => 4, 'nama' => 'Firman Romansyah', 'username' => 'Demon', 'email' => 'fromansyah206@gmail.com', 'alamat' => 'Bandung', 'mapel' => [
            'mapel1' => 'Bahasa Indonesia',
            'mapel2' => 'Bahasa Inggris',
            'mapel3' => 'Bahasa Indonesia',
        ] ],
        ['id' => 5, 'nama' => 'Firman Romansyah', 'username' => 'Demon', 'email' => 'fromansyah206@gmail.com', 'alamat' => 'Bandung', 'mapel' => [
            'mapel1' => 'Bahasa Indonesia',
            'mapel2' => 'Bahasa Inggris',
            'mapel3' => 'Bahasa Indonesia',
        ] ]

    ];

   return view('data', compact('post'));
});


Route::get('/testmodel', function() {
$query = App\Models\biodatas::all();
return $query;
});

Route::get('/modelpost', function() {
$query = App\Models\post::all();
return view ('test-post', compact('query'));
});


Route::get('/modelbioadatas', function() {
$query = App\Models\biodatas::all();
return view ('bioadatas', compact('query'));
});
