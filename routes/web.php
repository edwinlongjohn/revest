<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InvestmentController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\PackagesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use App\Models\Investments;
use App\Models\Wallet;
use Illuminate\Support\Facades\Route;

use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', [WelcomeController::class, 'welcome'])->name('welcome');


Auth::routes(['verify' => true]);

Route::middleware('auth')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('user')->group(function(){
    Route::get('/',[UserController::class, 'userDashboard'])->name('user.dashboard');
    Route::get('/investment-page', [InvestmentController::class, 'investPage'])->name('investment.page');
    Route::get('/wallet', [WalletController::class, 'wallet'])->name('wallet');


});

Route::prefix('admin')->group(function(){

    Route::get('/admin-panel',[AdminController::class, 'adminPanel'])->name('admin.panel');
    Route::get('/upload-investment-package',[PackageController::class, 'UploadPackage'])->name('upload.investment.package');
    Route::post('/add-investment-package',[PackageController::class, 'addPackage'])->name('add.investment.package');
    Route::get('/update-user-account',[InvestmentController::class, 'updateUserAccount'])->name('update.user.account');

});

require __DIR__.'/auth.php';

Auth::routes();



