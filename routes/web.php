<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\Calendrier2Controller;
use App\Http\Controllers\CalendrierController;
use App\Http\Controllers\CongeController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\EntrepriseController;
use App\Http\Controllers\GenererQrController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PointageController;
use App\Http\Controllers\UsersController;
use App\Http\Requests\Calendrier2FormRequest;
use Illuminate\Support\Facades\Route;


Route::get('/', [AccueilController::class, 'index'])->name('app_accueil');

// Route::get('/', [UsersController::class, 'index'])->name('app_public');

// Route::prefix('users')->name('users.')->group(function() {
//     Route::resource('public', UsersController::class);
// });

// Route::prefix('auth')->name('auth.')->group(function() {

//     Route::get('login.admin', [LoginController::class, 'loginAdmin'])->name('page_admin');
//     Route::get('login.users', [LoginController::class, 'loginPublic'])->name('page_users');
//     Route::get('formulaire.register', [LoginController::class, 'formUser'])->name('page_formUser');
// });

Route::get('/notifications/count', [PermissionController::class, 'getPermissionCount']);
Route::post('/notifications/reset', [PermissionController::class, 'resetPermissionCount']);
Route::get('/notifications/congeCount', [CongeController::class, 'getCongeCount']);
Route::post('/notifications/congeReset', [CongeController::class, 'resetCongeCount']);
Route::get('/notifications/show', [NotificationController::class, 'shownotification'])->name('shownotification');
Route::get('/permissions/detaille{id}', [PermissionController::class, 'detaillepermission'])->name('detaillepermission');
Route::get('/permission/affiche', [PermissionController::class, 'showpermission'])->name('showpermission');
Route::get('/conge/afficher', [CongeController::class, 'showconge'])->name('showconge');


Route::post('/admin/calendrier/store', [Calendrier2Controller::class, 'store'])->name('calendrier.store');
Route::get('/admin/events', [Calendrier2Controller::class, 'index'])->name('calendrier.index');
Route::delete('/admin/calendrier/destroy/{id}', [Calendrier2Controller::class, 'destroy'])->name('admin.calendrier.destroy');

Route::prefix('admin')->name('admin.')->group(function() {
    Route::resource('employes', EmployeController::class);
    Route::resource('genereqrs', GenererQrController::class);
    Route::resource('parametres', EntrepriseController::class);
    Route::resource('permissions', PermissionController::class);
    Route::resource('calendrier', CalendrierController::class);
    Route::resource('pointage', PointageController::class);
    Route::resource('calendrier2', Calendrier2Controller::class);
    Route::resource('conges', CongeController::class);
    
    Route::get('/admin/employee/pdf', [EmployeController::class, 'generateAllPDF'])->name('employee.pdf');
    Route::get('/admin/badge/pdfBadge', [GenererQrController::class, 'generateBadgePDF'])->name('badge.pdf');
    Route::put('/parametres/{CodeEntreprise}', [EntrepriseController::class, 'update'])->name('admin.parametres.update');

    // Ajout de la route pour la méthode listeProfils
    Route::get('listes.profils', [EmployeController::class, 'indexProfil'])->name('listes_profils');

    // Ajout de la route pour la méthode indexCalendrier
    // Route::get('listes.Calendrier', [EmployeController::class, 'indexCalendrier'])->name('listes_calendrier');

    // Ajout de la route pour la méthode listeEmployeNonCodeQR
    Route::get('listes.mployeNonCodeQR', [EmployeController::class, 'listeEmployeNonCodeQR'])->name('listes_mployeNonCodeQR');

});







// Route::get('/conge', function () {
//     return view('admin.conge.index');
// })->name('app_conge');

// Route::get('/employe', function () {
//     return view('admin.employe.index');
// })->name('app_employe');

// Route::get('/formEmploye', function () {
//     return view('admin.employe.form');
// })->name('app_form_employe');

// Route::get('/profils', function () {
//     return view('admin.employe.toutProfil');
// })->name('app_profil_employe');

// Route::get('/genererqr', function () {
//     return view('admin.genererqr.index');
// })->name('app_genererqr');

// Route::get('/formCodeQR', function () {
//     return view('admin.genererqr.form');
// })->name('app_form_CodeQR');

// Route::get('/pointage', function () {
//     return view('admin.pointage.index');
// })->name('app_pointage');

// Route::get('/permission', function () {
//     return view('admin.permission.index');
// })->name('app_permission');

// Route::get('/badje', function () {
//     return view('admin.badje.index');
// })->name('app_badje');
