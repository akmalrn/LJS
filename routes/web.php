<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\AtraksiWisataController;
use App\Http\Controllers\BenefitController;
use App\Http\Controllers\dashboardkbcController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\KonfigurasiController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\PaketWisataController;
use App\Http\Controllers\ReadMoreController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WhyUsController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect('/dashboardkbc')->with('message', 'Selamat Datang');
});
Route::get('/welcome', function () {
    return view('welcome'); // Sesuaikan dengan tampilan atau controller yang sesuai
})->name('Welcome');
Route::get('welcome',[UserController::class, 'login'])->name('login');

Route::get('welcome', [UserController::class, 'welcome'])->name('login');
Route::get('welcome', [UserController::class, 'welcome'])->name('welcome');
// Route untuk logout
Route::post('loyout/', [UserController::class, 'LogoutUser'])->name('LogoutUser');

//dashboardkbc
Route::get('dashboardkbc',[dashboardkbcController::class, 'dashboardkbc'])->name('dashboardkbc');

//allreadmore
Route::get('readmore',[ReadMoreController::class, 'ReadMore'])->name('ReadMore');
//allatraksiwisata
Route::get('/atraksiwisata', [AtraksiWisataController::class, 'AllAtraksiWisata'])->name('AllAtraksiWisata');
//allpaketwisata
Route::get('/paketwisata', [PaketWisataController::class, 'allPaketWisata'])->name('allPaketWisata');
//allGaleri
Route::get('/galeri', [GaleryController::class, 'allGaleri'])->name('allGaleri');
//allArtikel
Route::get('/artikel', [ArtikelController::class, 'allArtikel'])->name('allArtikel');
//allMitra
Route::get('/mitra', [MitraController::class, 'allmitra'])->name('allmitra');


Route::middleware(['auth'])->group(function () {
//admin
Route::get('index',[AdminController::class, 'admindashboard'])->name('admindashboard');

//slidercontroller
Route::get('view-slider',[SliderController::class, 'viewslider'])->name('viewslider');
Route::get('createslider',[SliderController::class, 'createslider'])->name('createslider');
Route::post('createsslider',[SliderController::class, 'storeSlider'])->name('storeSlider');
Route::get('createslider/edit/{id}', [SliderController::class, 'editSlider'])->name('editSlider');
Route::put('view-slider/update/{id}', [SliderController::class, 'updateSlider'])->name('updateSlider');
Route::delete('view-slider/delete/{id}', [SliderController::class, 'destroySlider'])->name('destroySlider');

//aboutuscontroller
Route::get('view-aboutus',[AboutUsController::class, 'viewaboutus'])->name('viewaboutus');
Route::get('createaboutus',[AboutUsController::class, 'createaboutus'])->name('createaboutus');
Route::post('createaboutus',[AboutUsController::class, 'storeAboutUs'])->name('storeAboutUs');
Route::get('view-aboutus/edit/{id}', [AboutUsController::class, 'editAboutUs'])->name('editAboutUs');
Route::put('view-aboutus/update/{id}', [AboutUsController::class, 'updateAboutUs'])->name('updateAboutUs');
Route::delete('view-aboutus/delete/{id}', [AboutUsController::class, 'destroyAboutUs'])->name('destroyAboutUs');

//paketwisata
Route::get('view-paketwisata',[PaketWisataController::class, 'paketwisata'])->name('paketwisata');
Route::get('createpaketwisata',[PaketWisataController::class, 'createPaketWisata'])->name('createPaketWisata');
Route::post('createpaketwisata',[PaketWisataController::class, 'storePaketWisata'])->name('storePaketWisata');
Route::get('view-paketwisata/edit/{id}', [PaketWisataController::class, 'editPaketWisata'])->name('editPaketWisata');
Route::put('view-paketwisata/update/{id}', [PaketWisataController::class, 'updatePaketWisata'])->name('updatePaketWisata');
Route::delete('view-paketwisata/delete/{id}', [PaketWisataController::class, 'destroyPaketWisata'])->name('destroyPaketWisata');
Route::get('/paketwisata/{id}', [PaketWisataController::class, 'showPaketWisata'])->name('showPaketWisata');


//atraksiwisata
Route::get('view-atraksiwisata',[AtraksiWisataController::class, 'atraksiwisata'])->name('atraksiwisata');
Route::get('createatraksiwisata',[AtraksiWisataController::class, 'createAtraksiWisata'])->name('createAtraksiWisata');
Route::post('createatraksiwisata',[AtraksiWisataController::class, 'storeAtraksiWisata'])->name('storeAtraksiWisata');
Route::get('view-atraksiwisata/edit/{id}', [AtraksiWisataController::class, 'editAtraksiWisata'])->name('editAtraksiWisata');
Route::put('view-atraksiwisata/update/{id}', [AtraksiWisataController::class, 'updateAtraksiWisata'])->name('updateAtraksiWisata');
Route::delete('view-atraksiwisata/delete/{id}', [AtraksiWisataController::class, 'destroyAtraksiWisata'])->name('destroyAtraksiWisata');
Route::get('/atraksiwisata/{id}', [AtraksiWisataController::class, 'showatraksi'])->name('showatraksi');


//galery
Route::get('view-galery',[GaleryController::class, 'Galery'])->name('Galery');
Route::get('creategalery',[GaleryController::class, 'createGalery'])->name('createGalery');
Route::post('creategalery',[GaleryController::class, 'storeGalery'])->name('storeGalery');
Route::get('view-galery/edit/{id}', [GaleryController::class, 'editGalery'])->name('editGalery');
Route::put('view-galery/update/{id}', [GaleryController::class, 'updateGalery'])->name('updateGalery');
Route::delete('view-galery/delete/{id}', [GaleryController::class, 'destroyGalery'])->name('destroyGalery');

//Artikel
Route::get('view-kategoriartikel',[ArtikelController::class, 'kategoriartikel'])->name('kategoriartikel');
Route::get('createkategoriartikel',[ArtikelController::class, 'createkategoriartikel'])->name('createkategoriartikel');
Route::post('createkategoriartikel',[ArtikelController::class, 'storekategoriartikel'])->name('storekategoriartikel');
Route::get('view-kategoriartikel/edit/{id}', [ArtikelController::class, 'editkategoriartikel'])->name('editkategoriartikel');
Route::put('view-kategoriartikel/update/{id}', [ArtikelController::class, 'updatekategoriartikel'])->name('updatekategoriartikel');
Route::delete('view-kategoriartikel/delete/{id}', [ArtikelController::class, 'destroykategoriartikel'])->name('destroykategoriartikel');
Route::get('view-artikels',[ArtikelController::class, 'artikels'])->name('artikels');
Route::get('createartikels',[ArtikelController::class, 'createartikels'])->name('createartikels');
Route::post('createartikels',[ArtikelController::class, 'storeartikels'])->name('storeartikels');
Route::get('view-artikels/edit/{id}', [ArtikelController::class, 'editartikels'])->name('editartikels');
Route::put('view-artikels/update/{id}', [ArtikelController::class, 'updateartikels'])->name('updateartikels');
Route::delete('view-artikels/delete/{id}', [ArtikelController::class, 'destroyartikels'])->name('destroyartikels');
Route::get('/artikel/{id}',[ArtikelController::class, 'showArtikel'])->name('showArtikel');

//Konfigurasi
Route::get('/konfigurasi/create-or-update/{id?}', [KonfigurasiController::class, 'createOrUpdate'])->name('konfigurasi');
Route::post('/konfigurasi/create-or-update', [KonfigurasiController::class, 'store'])->name('storekonfigurasi');

//Why Us
Route::get('/whyus/create-or-update/{id?}', [WhyUsController::class, 'WhyUs'])->name('WhyUs');
Route::post('/whyus/create-or-update', [WhyUsController::class, 'store'])->name('storeWhyUs');


//benefit
Route::get('view-benefit', [BenefitController::class, 'benefit'])->name('benefit');
Route::get('createbenefit', [BenefitController::class, 'createbenefit'])->name('createbenefit');
Route::post('createbenefit',[BenefitController::class, 'storebenefit'])->name('storebenefit');
Route::get('view-benefit/edit/{id}', [BenefitController::class, 'editbenefit'])->name('editbenefit');
Route::put('view-benefit/update/{id}', [BenefitController::class, 'updatebenefit'])->name('updatebenefit');
Route::delete('view-benefit/delete/{id}', [BenefitController::class, 'destroybenefit'])->name('destroybenefit');

//mitra
Route::get('view-mitra', [MitraController::class, 'mitra'])->name('mitra');
Route::get('createmitra', [MitraController::class, 'createmitra'])->name('createmitra');
Route::post('createmitra',[MitraController::class, 'storemitra'])->name('storemitra');
Route::get('view-mitra/edit/{id}', [MitraController::class, 'editmitra'])->name('editmitra');
Route::put('view-mitra/update/{id}', [MitraController::class, 'updatemitra'])->name('updatemitra');
Route::delete('view-mitra/delete/{id}', [MitraController::class, 'destroymitra'])->name('destroymitra');
});

//??????ADMIN????????
// Route untuk memproses data registrasi
Route::get('welcome', [UserController::class, 'welcome'])->name('welcome');
Route::post('/welcome/registrasi', [UserController::class, 'RegistrasiUsers'])->name('RegistrasiUsers');
Route::post('/welcome/login', [UserController::class, 'LoginUser'])->name('LoginUser');
Route::get('error', [UserController::class, 'error'])->name('error');

