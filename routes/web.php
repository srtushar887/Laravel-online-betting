<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

//Route::get('/', function () {
//    return Inertia::render('Welcome', [
//        'canLogin' => Route::has('login'),
//        'canRegister' => Route::has('register'),
//        'laravelVersion' => Application::VERSION,
//        'phpVersion' => PHP_VERSION,
//    ]);
//});


Route::get('/',[\App\Http\Controllers\CustomLoginController::class,'user_login'])->name('user.login');
Route::post('/user-login-submit',[\App\Http\Controllers\CustomLoginController::class,'user_login_submit'])->name('user.login.submit');
Route::post('/user-data-store',[\App\Http\Controllers\CustomLoginController::class,'user_data_store'])->name('user.data.save');





//user section


//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return Inertia::render('Dashboard');
//})->name('dashboard');





Route::group(['middleware' => ['auth:sanctum']], function() {
    Route::prefix('dashboard')->group(function() {

        Route::get('/',[\App\Http\Controllers\User\UserController::class,'index'])->name('dashboard');
    });
});



//admin section


Route::prefix('admin')->group(function (){
    Route::get('/login', [\App\Http\Controllers\Auth\AdminLoginController::class,'showLoginform'])->name('admin.login');
    Route::post('/login', [\App\Http\Controllers\Auth\AdminLoginController::class,'login'])->name('admin.login.submit');
    Route::get('/logout', [\App\Http\Controllers\Auth\AdminLoginController::class,'logout'])->name('admin.logout');
});


Route::group(['middleware' => ['auth:admin']], function() {
    Route::prefix('admin')->group(function() {
        Route::get('/', [\App\Http\Controllers\Admin\AdminController::class,'index'])->name('admin.dashboard');


        //game team
        Route::get('create-game-team',[\App\Http\Controllers\Admin\MasterDataController::class,'game_team'])->name('admin.create.team');
        Route::post('create-game-team',[\App\Http\Controllers\Admin\MasterDataController::class,'game_team_save'])->name('admin.team.save');
        Route::get('get-game-team',[\App\Http\Controllers\Admin\MasterDataController::class,'game_team_get'])->name('admin.get.team');
        Route::post('edit-game-team',[\App\Http\Controllers\Admin\MasterDataController::class,'game_team_edit'])->name('admin.get.single.team');
        Route::post('update-game-team',[\App\Http\Controllers\Admin\MasterDataController::class,'game_team_update'])->name('admin.team.update');
        Route::post('delete-game-team',[\App\Http\Controllers\Admin\MasterDataController::class,'game_team_delete'])->name('admin.team.delete');

        //game match
        Route::get('create-game-match',[\App\Http\Controllers\Admin\MasterDataController::class,'game_match'])->name('admin.create.match');
        Route::post('game-match-save',[\App\Http\Controllers\Admin\MasterDataController::class,'game_match_save'])->name('admin.match.save');
        Route::get('game-match-get',[\App\Http\Controllers\Admin\MasterDataController::class,'game_match_get'])->name('admin.get.match');
        Route::post('game-match-single',[\App\Http\Controllers\Admin\MasterDataController::class,'game_match_single'])->name('get.single.match');
        Route::post('game-match-update',[\App\Http\Controllers\Admin\MasterDataController::class,'game_match_update'])->name('admin.match.update');
        Route::post('game-match-delete',[\App\Http\Controllers\Admin\MasterDataController::class,'game_match_delete'])->name('admin.match.delete');

        //game serise
        Route::get('create-game-serise',[\App\Http\Controllers\Admin\MasterDataController::class,'game_serise'])->name('admin.create.gameseries');
        Route::post('create-game-serise',[\App\Http\Controllers\Admin\MasterDataController::class,'game_serise_save'])->name('admin.gameseries.save');
        Route::get('get-game-serise',[\App\Http\Controllers\Admin\MasterDataController::class,'game_serise_get'])->name('admin.get.gameseries');
        Route::post('get-game-single',[\App\Http\Controllers\Admin\MasterDataController::class,'game_serise_single'])->name('admin.get.single.gameseries');
        Route::post('get-game-update',[\App\Http\Controllers\Admin\MasterDataController::class,'game_serise_update'])->name('admin.gameseries.update');
        Route::post('get-game-delete',[\App\Http\Controllers\Admin\MasterDataController::class,'game_serise_delete'])->name('admin.gameseries.delete');


        //craete game
        Route::get('create-game',[\App\Http\Controllers\Admin\MasterDataController::class,'create_game'])->name('admin.game');
        Route::post('create-game',[\App\Http\Controllers\Admin\MasterDataController::class,'create_game_save'])->name('admin.game.save');
        Route::get('get-game',[\App\Http\Controllers\Admin\MasterDataController::class,'create_game_get'])->name('admin.get.game');
        Route::get('start-game/{id}',[\App\Http\Controllers\Admin\MasterDataController::class,'game_start'])->name('admin.game.start');
        Route::post('delete-game',[\App\Http\Controllers\Admin\MasterDataController::class,'game_delete'])->name('admin.game.delete');


    });
});
