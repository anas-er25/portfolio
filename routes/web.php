<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\SkillController;
use App\Models\Project;
use App\Models\Resume;
use App\Models\Skill;

// routes/web.php


Auth::routes();

// la page de portfolio
Route::get('/', [StaticController::class, 'index'])->name('home.index');
Route::get('/portfolio', [StaticController::class, 'index'])->name('home.index');
Route::get('/register', [StaticController::class, 'index'])->name('home.index');




// Project
Route::prefix('/admin/project')->name('admin.project.')->group(function(){
    Route::get('/create', [ProjectController::class, 'create'])->name('create');
    Route::post('/create', [ProjectController::class, 'store'])->name('store');
    Route::put('/{id}/update', [ProjectController::class, 'update'])->name('update');
    Route::get('/{id}/edit', [ProjectController::class, 'edit'])->name('edit');
    Route::get('/{id}/destroy', [ProjectController::class, 'destroy'])->name('destroy');
});

//resume
Route::prefix('/admin/resume')->name('admin.resume.')->group(function(){
    Route::get('/create', [ResumeController::class, 'create'])->name('create');
    Route::post('/create', [ResumeController::class, 'store'])->name('store');
    Route::put('/{id}/update', [ResumeController::class, 'update'])->name('update');
    Route::get('/{id}/edit', [ResumeController::class, 'edit'])->name('edit');
    Route::get('/{id}/destroy', [ResumeController::class, 'destroy'])->name('destroy');
});

//skill
Route::prefix('/admin/skill')->name('admin.skill.')->group(function(){
    Route::get('/create', [SkillController::class, 'create'])->name('create');
    Route::post('/create', [SkillController::class, 'store'])->name('store');
    Route::put('/{id}/update', [SkillController::class, 'update'])->name('update');
    Route::get('/{id}/edit', [SkillController::class, 'edit'])->name('edit');
    Route::get('/{id}/destroy', [SkillController::class, 'destroy'])->name('destroy');
});


// les pages login et register et admin
// Route::get('/anas', [StaticController::class, 'register'])->name('home.register');
// Route::get('/login', [StaticController::class, 'login'])->name('home.login');
// Route::get('/password/reset',[StaticController::class,'reset'])->name('password.request');
// Route::post('/password/reset', [StaticController::class, 'resetPost'])->name('password.request.post');


Route::get('/home', function () {
    $projects = Project::all();
    $resumes = Resume::all();
    $skills = Skill::all();

    return view('pages.home', compact('projects', 'resumes', 'skills'));
})->middleware(['auth', 'verified'])->name('pages.home');


Route::get('/admin/dashboard', function () {
    $projects = Project::all();
    $resumes = Resume::all();
    $skills = Skill::all();

    return view('pages.home', compact('projects', 'resumes', 'skills'));
})->middleware(['auth', 'verified'])->name('admin.dashboard');

Route::redirect('/login', 'portfolio', 301);
Route::get('/anasfolio/admin/login', function () {
    if (Auth::check()) {
        return redirect()->route('pages.home');
    }

    return view('auth.login');
})->name('home.login');



// la page pour envoyer l'email
Route::post('/contact_mail',[StaticController::class,'contact_mail_send']);