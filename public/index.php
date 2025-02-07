<?php
session_start();



require_once '../core/BaseController.php';
require_once '../core/Router.php';
require_once '../core/Route.php';
require_once '../app/controllers/HomeController.php';
require_once '../app/controllers/AuthController.php';
require_once '../app/controllers/TeacherController.php';
require_once '../app/controllers/StudentController.php';
require_once '../app/config/db.php';

$router = new Router();
Route::setRouter($router);


// Define routes
// auth routes 
Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'handleRegister']);
Route::get('/login', [AuthController::class, 'showleLogin']);
Route::post('/login', [AuthController::class, 'handleLogin']);
Route::get('/logout', [AuthController::class, 'logout']);

// enseignant routers

Route::get('/dashboard', [TeacherController::class, 'showDashboard']);
Route::get('/dashboard/student', [StudentController::class, 'showDashboard']);
Route::get('/accounts', [TeacherController::class, 'allAccountStudentsAction']);
Route::get('/dashboard/valideAccount/{id}', [TeacherController::class, 'valideAccountAction']);
Route::get('/dashboard/regeterAccount/{id}', [TeacherController::class, 'regeterAccountAction']);
// Route::get('/teacher/users', [AdminController::class, 'handleUsers']);

Route::get('/home',[HomeController::class, 'showHomePage']);


// Dispatch the request
$router->dispatch($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);


