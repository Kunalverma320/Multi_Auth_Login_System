<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\SubAdminController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

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

Route::get('/register',[AuthController::class,'loadRegister']);
Route::post('/register',[AuthController::class,'register'])->name('register');
Route::get('/login',function(){
    return redirect('/');
});
Route::get('/',[AuthController::class,'loadLogin']);
Route::post('/login',[AuthController::class,'login'])->name('login');
Route::get('/logout',[AuthController::class,'logout']);

// ********** Super Admin Routes *********
Route::group(['prefix' => 'super-admin','middleware'=>['web','isSuperAdmin']],function(){
    Route::get('/dashboard',[SuperAdminController::class,'dashboard']);

    Route::get('/users',[SuperAdminController::class,'users'])->name('superAdminUsers');
    Route::get('/manage-role',[SuperAdminController::class,'manageRole'])->name('manageRole');
    Route::post('/update-role',[SuperAdminController::class,'updateRole'])->name('updateRole');
});

// ********** Sub Admin Routes *********
Route::group(['prefix' => 'sub-admin','middleware'=>['web','isSubAdmin']],function(){
    Route::get('/dashboard',[SubAdminController::class,'dashboard']);
});

// ********** Admin Routes *********
Route::group(['prefix' => 'admin','middleware'=>['web','isAdmin']],function(){
    Route::get('/dashboard',[AdminController::class,'dashboard']);
});

// ********** User Routes *********
Route::group(['middleware'=>['web','isUser']],function(){

    Route::get('/dashboard',[UserController::class,'dashboard'])->name('user.index');
    


Route::post('/forget-pass', [UserController::class, 'forgetpass'])->name('user.forgetpass');
//mail
Route::get('/resetpass/{reset_id}', [UserController::class, 'resetpass'])->name('resetpass');
//pass reset form
Route::post('/resetpassform', [UserController::class, 'resetpassform'])->name('user.resetpassform');
//testing
Route::get('/test', [UserController::class, 'testpageview'])->name('testpageview');
//blog page
Route::get('/blog', [UserController::class, 'blogpage'])->name('user.blogpage');
Route::get('/blog/{id}', [UserController::class, 'blogDetails'])->name('blog.details');
Route::post('/blog/{id}/like', [UserController::class, 'like'])->name('blog.like');
Route::post('/save-comment', [UserController::class, 'storecomment'])->name('save.comment');
//news page
Route::get('/news', [UserController::class, 'newspage'])->name('user.news');
Route::post('/news/{id}/like', [UserController::class, 'newslike'])->name('news.like');
Route::get('/news/{id}', [UserController::class, 'newsDetails'])->name('news.details');
Route::post('/save-newscomment', [UserController::class, 'storenewscomment'])->name('save.newscomment');
//about as
Route::get('/about_as', [UserController::class, 'about_aspage'])->name('user.about_as');
//contact as
Route::get('/contact_as', [UserController::class, 'contact_aspage'])->name('user.contact_as');
Route::post('/save-contactform', [UserController::class, 'contactform'])->name('save.contactform');
//checkcart
Route::get('/checkout_page', [UserController::class, 'checkout_page'])->name('user.checkout_page');
//ttb vpn-shield
Route::get('/vpn-shield', [UserController::class, 'vpnshield'])->name('user.vpnshield');
//ttb-vpn shild2
Route::get('/vpnshieldnew', [UserController::class, 'vpnshieldnew'])->name('user.vpnshieldnew');
//ttb total internet kulvinder 22-04-2024
Route::get('/totel-internet-security', [UserController::class, 'totalinternet'])->name('user.totalinternet');
//ttb commercial
Route::get('/commercial', [UserController::class, 'commercial_page'])->name('user.commercial');

 Route::get('/mailcheck', function () {
    return view('User.activationkey');
 });


//message Activation key
Route::get('/activate/{activation_key}', [UserController::class, 'activate'])->name('activate');
Route::get('/ttbantivirus', [UserController::class, 'ttbantivirus'])->name('user.ttbantivirus');
Route::get('/ttbantivirusnew', [UserController::class, 'ttbantivirusnew'])->name('user.ttbantivirusnew');
Route::get('/passreset', [UserController::class, 'passreset'])->name('user.passreset');
Route::get('/myprofile', [UserauthController::class, 'myprofile'])->name('user.myprofile');
Route::post('/update/name', [UserController::class, 'updateName'])->name('update.name');


});
