<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ResultController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('all', [MemberController::class, 'index']);
Route::get('getTopTen', [MemberController::class, 'getTopTen']);
Route::get('details/{memberId}', [MemberController::class, 'details']);
Route::get('addMemberForm', [MemberController::class, 'addForm']);
Route::post('addMember', [MemberController::class, 'addMember']);
Route::post('removeMember', [MemberController::class, 'removeMember']);
Route::get('updateMemberForm/{memberId}', [MemberController::class, 'updateForm']);
Route::post('updateMember/{memberId}', [MemberController::class, 'updateMember']);

Route::get('leader-list', [ResultController::class, 'index']);
Route::get('addResultForm', [ResultController::class, 'addResultForm']);
Route::post('addResult', [ResultController::class, 'addResult']);
