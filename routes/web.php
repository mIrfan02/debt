<?php

use App\Http\Controllers\AdvancedCostController;
use App\Http\Controllers\AgreementController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LegalController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DebtorController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RemarkController;
use App\Http\Controllers\TicklerController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PlacementController;
use App\Http\Controllers\ClaimController;
use App\Http\Controllers\FinancialCostController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
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

Route::get('/clear', function () {
    Artisan::call('config:cache');
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    Artisan::call('optimize:clear');
    return "Cleared";
});

Route::get('/', function () {
    return redirect()->route('login');
})->name('welcome');

Auth::routes(['verify' => true, 'login' => false, 'register' => false]);

Route::get('/logout', [HomeController::class, 'logout'])->name('logout');

Route::get('/user/signin', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/user/signin', [LoginController::class, 'login']);

// Route::get('/user/signup', [RegisterController::class, 'showRegistrationForm'])->name('register');
// Route::post('/user/signup', [RegisterController::class, 'register']);

Route::group(
    ['prefix' => "/dashboard/", "middleware" => ["auth", 'verified']],
    function () {
        Route::get('', [HomeController::class, 'index'])->name('auth');

        Route::get('my-profile', [UserController::class, 'editProfile'])->name('myProfile');
        Route::put('edit-my-profile', [UserController::class, 'updateMyProfile'])->name('updateMyProfile');

        // change password
        Route::get('/settings', [HomeController::class, 'changePassword'])->name('change_password');
        Route::post('/change-password/update', [HomeController::class, 'updatePassword'])->name('update_password');

        Route::group(['middleware' => 'role:admin'], function () {
            Route::controller(TicklerController::class)
                ->prefix('debtors/ticklers')
                ->as('debtors.ticklers.')
                ->group(function () {
                    Route::get('', 'index')->name('index');
                    Route::post('send/{id}', 'store')->name('send');
                    Route::get('show/{id}', 'show')->name('show');
                    Route::delete('destroy/{id}', 'destroy')->name('destroy');
                    Route::get('edit/{id}', 'edit')->name('edit');
                    Route::put('update/{id}', 'update')->name('update');
                    Route::get('types', 'ticklerType')->name('type');
                    Route::post('save-type', 'saveTicklerType')->name('save.type');
                    Route::get('show-type/{id}', 'showTicklerType')->name('show.type');
                    Route::delete('destroy-type/{id}', 'destroyTicklerType')->name('destroy.type');
                    Route::get('edit-type/{id}', 'editTicklerType')->name('edit.type');
                    Route::put('update-type/{id}', 'updateTicklerType')->name('update.type');
                });

            Route::controller(RemarkController::class)
                ->prefix('debtors/remarks')
                ->as('debtors.remarks.')
                ->group(function () {
                    Route::get('', 'index')->name('index');
                    Route::get('create/{debtor}', 'create')->name('create');
                    Route::post('store', 'store')->name('store');
                    Route::get('show/{id}', 'show')->name('show');
                    Route::get('edit/{id}', 'edit')->name('edit');
                    Route::put('update/{id}', 'update')->name('update');
                    Route::delete('destroy/{id}', 'destroy')->name('destroy');
                });



            Route::controller(ContactController::class)
                ->prefix('claim/contacts')
                ->as('claim.contacts.')
                ->group(function () {
                    Route::post('/bulkupdate', 'bulkUpdate')->name('update');
                });
            Route::resource('users', UserController::class)->middleware('isAdmin');
            Route::resource('debtors', DebtorController::class);

            Route::resource('claims', ClaimController::class);


            Route::resource('notes', NoteController::class);
            Route::resource('contacts', ContactController::class);
            Route::resource('agreements', AgreementController::class);
            Route::resource('clients', ClientController::class);
            Route::resource('placements', PlacementController::class);

            Route::resource('payments', PaymentController::class);
            Route::resource('costs', CostController::class);
            Route::resource('legals', LegalController::class);
            Route::resource('advancedcosts', AdvancedCostController::class);


            // Route::resource('financial-costs', FinancialCostController::class);
        });
    }
);
