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

// auth routes 
Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'handleRegister']);
Route::get('/login', [AuthController::class, 'showleLogin']);
Route::post('/login', [AuthController::class, 'handleLogin']);
Route::get('/logout', [AuthController::class, 'logout']);

// enseignant routers

Route::get('/home',[HomeController::class, 'showHomePage']);
Route::get('/dashboard', [TeacherController::class, 'showDashboard']);

Route::get('/dashboard/student', [StudentController::class, 'showDashboard']);
Route::get('/accounts', [TeacherController::class, 'allAccountStudentsAction']);
Route::get('/dashboard/valideAccount/{id}', [TeacherController::class, 'valideAccountAction']);
Route::get('/dashboard/valideTopic/{id}', [TeacherController::class, 'valideTopicAction']);
Route::get('/dashboard/regeterTopic/{id}', [TeacherController::class, 'regeterTopicAction']);
Route::get('/dashboard/supprimer-topic/{id}', [TeacherController::class, 'deleteTopicAction']);
Route::get('/dashboard/student/supprimer-topic/{id}', [StudentController::class, 'deleteTopicAction']);
Route::get('/dashboard/regeterAccount/{id}', [TeacherController::class, 'regeterAccountAction']);
Route::post('/dashboard/student/addtopic/{id}', [StudentController::class, 'addTopicAction']);
// Route::get('/dashboard/student/edit-topic/{id}', [StudentController::class, 'editTopicAction']);
// Route::post('/dashboard/student/edit-topic/{id}', [StudentController::class, 'editTopicAction']);
// Route::get('/dashboard/assignPresentation{Id}', [TeacherController::class, 'assignTopic']);


// Dispatch the request
$router->dispatch($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);


