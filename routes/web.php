<?php
namespace app\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutMeController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\HobbiesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/aboutme', [aboutmecontroller::class, 'show']);
Route::get('/skills', [skillscontroller::class, 'show']);
Route::get('/hobbies', [hobbiescontroller::class, 'show']);

?>