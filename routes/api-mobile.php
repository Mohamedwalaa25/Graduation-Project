<?php

use Illuminate\Http\Request;
use Twilio\TwiML\Video\Room;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\ApiMobile\AuthController;
use App\Http\Controllers\ApiMobile\HomeController;
use App\Http\Controllers\ApiMobile\PlantController;
use App\Http\Controllers\ApiMobile\HistoryController;
use App\Http\Controllers\ApiMobile\PackageController;
use App\Http\Controllers\ApiMobile\PaymentController;
use App\Http\Controllers\ApiMobile\ProfileController;
use App\Http\Controllers\ApiMobile\PlantDiseaseController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

/*********************************** AUTHENTICATION ******************************/

Route::post('/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/password-recovery', [AuthController::class, 'passwordRecovery'])->name('auth.passwordRecovery');
Route::post('/verify', [AuthController::class, 'verify'])->name('auth.veryfy');
Route::post('/reset-password', [AuthController::class, 'resetPassword'])->name('auth.resetPassword');
Route::get('/activate/{token}', [AuthController::class, 'verifyActivation'])->name('activation.verify');
Route::post('/login/google', [AuthController::class, 'loginWithGoogle'])->name('auth.login.google');

Route::get('login/google', [GoogleController::class, 'redirect']);
Route::get('/callback/google', [GoogleController::class, 'callback']);

Route::get('/unauthorized', function () {
    return response()->json([
        'message' => 'Unauthorized'
    ], 401);
})->name('login');

Route::middleware('auth:users')->group(function () {

    /*********************************** PROFILE ******************************/

    Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
    Route::post('/delete-account', [AuthController::class, 'deleteAccount'])->name('home.deleteAccount');
    Route::get('/get-points', [ProfileController::class, 'points'])->name('profile.points');
    Route::get('/profile', [ProfileController::class, 'profile'])->name('home.profile');
    Route::post('/profile/update', [ProfileController::class, 'updateProfile'])->name('home.updateProfile');


    /*********************************** HISTORY ********************************/

    Route::get('/history', [HistoryController::class, 'index'])->name('history.index');
    Route::post('/save-disease', [HistoryController::class, 'saveHistory'])->name('history.save');

    /*********************************** DISEASE ********************************/

    Route::get('/diseases', [PlantDiseaseController::class, 'result'])->name('diseases.result');
    Route::post('/predict', [PlantDiseaseController::class, 'predict']);  //mshghal
});
/*********************************** PLANTS ********************************/

Route::get('/plant/{id}', [PlantController::class, 'show'])->name('plant.show');
Route::get('/search', [PlantController::class, 'index'])->name('plant.index');
Route::get('/packages', [PackageController::class, 'packages'])->name('package.index');


/*********************************** PAYMENTS ********************************/

Route::post('/payment/process', [PaymentController::class, 'paymentProcess'])->middleware('auth:users');
Route::post('/myfatoorah/payment/process', [PaymentController::class, 'processMyFatoorah'])->middleware('auth:users');

Route::match(['GET', 'POST'], '/payment/callback', [PaymentController::class, 'callBack'])->name('payment.callback');
Route::get('/payment/success', [PaymentController::class, 'success'])->name('payment.success');
Route::get('/payment/failed', [PaymentController::class, 'failed'])->name('payment.failed');

Route::match(['GET', 'POST'], '/myfatoorah/payment/callback', [PaymentController::class, 'handleMyFatoorahCallback'])
    ->name('payment.myfatoorah.callback');

/*********************************** Home Page  ********************************/


Route::prefix('home')->middleware('auth:users')->controller(HomeController::class)->group(function () {
    Route::get('/index', 'index');
});
