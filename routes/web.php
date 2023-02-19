<?php

use App\Http\Controllers\admin\CompanyController;
use App\Http\Controllers\admin\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompanyController as ControllersCompanyController;

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
Route::prefix("admin")->name("admin.")->group(function () {
    Route::middleware("guest:admin")->group(function () {
        Route::get("/login", [AdminController::class, "login"])->name("login");
        Route::post("/login/check-admin", [AdminController::class, "loginAdmin"])->name("check-admin");
    });
    Route::middleware("auth:admin")->group(function () {
        Route::post("logout", [AdminController::class, "logout"])->name("logout");
        Route::get("", [AdminController::class, "index"])->name("dashboard");
        Route::prefix("user")->name("user.")->group(function (){
            Route::get('', [UserController::class, "index"])->name("index");
            Route::get('create', [UserController::class, "create"])->name("create");
            Route::post('store', [UserController::class, "store"])->name("store");
            Route::get('edit/{id?}', [UserController::class, "edit"])->name("edit");
            Route::patch('update/{id?}', [UserController::class, "update"])->name("update");
            Route::delete('delete/{id?}', [UserController::class, "destroy"])->name("delete");
        });
    });
    Route::middleware("auth:admin")->group(function () {
        Route::get("", [AdminController::class, "index"])->name("dashboard");
        Route::prefix("company")->name("company.")->group(function (){
            Route::get('', [CompanyController::class, "index"])->name("index");
            Route::get('create', [CompanyController::class, "create"])->name("create");
            Route::post('store', [CompanyController::class, "store"])->name("store");
            Route::get('edit/{id?}', [CompanyController::class, "edit"])->name("edit");
            Route::patch('update/{id?}', [CompanyController::class, "update"])->name("update");
            Route::delete('delete/{id?}', [CompanyController::class, "destroy"])->name("delete");
        });
    });
});
Route::get("/Administrator", [AdminController::class, "index"])->name("Administrator.dashboard");

Route::get('/', function () {
    return view('welcome');
})->name("welcome");
/*
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
*/
Route::prefix('job')->group(function () {
    Route::get("/", [JobController::class, "index"])->name("job.list");
    Route::get("/{id}", [JobController::class, "show"])->name("job.details");
    Route::post("apply-job", [JobController::class, "apply_job"])->name("job.application");
});
Route::middleware(['auth', 'company'])->group(function () {
    Route::post("company/logout", [CompanyController::class, "logout"])->name("company.logout");
});
Route::middleware(['auth', 'web'])->group(function () {
    Route::post("/user/logout", [UserController::class, "logout"])->name("user.logout");
});
Route::prefix('Pages')->group(function () {

    Route::get("/", [PagesController::class, "index"])->name("category");
    Route::get("/{id}", [PagesController::class, "show"])->name("testimonial");
});

Route::get('/profile', [ProfileController::class, "index"])->name("profile");
Route::get('/profile/create', [ProfileController::class, "create"])->name("profile.create");
Route::get('/profile/store', [ProfileController::class, "store"])->name("profile.create");

Route::put('/profile/update', [ProfileController::class, "update"])->name("profile.update");
Route::get('/register', [UserAuthController::class, "registerUser"])->name("user.register-form");
Route::post('/register/store', [UserAuthController::class, "register"])->name("user.register");
Route::get("user/login", [UserAuthController::class, "loginForm"])->name("user.loginForm");
Route::post("user/login", [UserAuthController::class, "login"])->name("user.login");
Route::get("company/login", [ControllersCompanyController::class, "loginForm"])->name("company.loginForm");
Route::post("company/login", [ControllersCompanyController::class, "login"])->name("company.login");



