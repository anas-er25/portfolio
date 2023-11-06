<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ContactFormController;
use App\Mail\HelloMail;
use App\Models\Project;
use App\Models\Resume;
use App\Models\Skill;


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

// routes/web.php


Auth::routes();

// la page de portfolio
Route::get('/', [StaticController::class, 'index'])->name('home.index');
Route::get('/portfolio', [StaticController::class, 'index'])->name('home.index');
Route::get('/register', [StaticController::class, 'index'])->name('home.index');




// Project
Route::get('/admin/project/create', [ProjectController::class, 'create'])->name('admin.project.create');
Route::post('/admin/project/create', [ProjectController::class, 'store'])->name('admin.project.store');
Route::put('/admin/projects/{id}/update', [ProjectController::class, 'update'])->name('admin.project.update');
Route::get('/admin/projects/{id}/edit', [ProjectController::class, 'edit'])->name('admin.project.edit');
Route::get('/admin/projects/{id}/destroy', [ProjectController::class, 'destroy'])->name('admin.project.destroy');



//resume
Route::get('/admin/resume/create', [ResumeController::class, 'create'])->name('admin.resume.create');
Route::post('/admin/resume/create', [ResumeController::class, 'store'])->name('admin.resume.store');
Route::put('/admin/resume/{id}/update', [ResumeController::class, 'update'])->name('admin.resume.update');
Route::get('/admin/resume/{id}/edit', [ResumeController::class, 'edit'])->name('admin.resume.edit');
Route::get('/admin/resume/{id}/destroy', [ResumeController::class, 'destroy'])->name('admin.resume.destroy');

//skill
Route::get('/admin/skill/create', [SkillController::class, 'create'])->name('admin.skill.create');
Route::post('/admin/skill/create', [SkillController::class, 'store'])->name('admin.skill.store');
Route::put('/admin/skill/{id}/update', [SkillController::class, 'update'])->name('admin.skill.update');
Route::get('/admin/skill/{id}/edit', [SkillController::class, 'edit'])->name('admin.skill.edit');
Route::get('/admin/skill/{id}/destroy', [SkillController::class, 'destroy'])->name('admin.skill.destroy');


// les pages login et register et admin
Route::get('/anas', [StaticController::class, 'register'])->name('home.register');
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


Route::get('/login', function () {
    if (Auth::check()) {
        return redirect()->route('pages.home');
    }

    return view('auth.login');
})->name('home.login');



// la page pour envoyer l'email
Route::post('/contact_mail',[StaticController::class,'contact_mail_send']);