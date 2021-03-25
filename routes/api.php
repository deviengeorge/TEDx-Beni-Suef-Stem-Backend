<?php

use App\Http\Controllers\CommitteeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LeaderController;
use App\Http\Controllers\MailingController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ThanksController;
use Illuminate\Http\Request;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::apiResources([
    "/post" => PostsController::class,
    "/thank" => ThanksController::class,
    "/committee" => CommitteeController::class,
    "/contact" => ContactController::class,
    "/mailing" => MailingController::class,
]);

Route::group(['middleware' => ['CheckPassword']], function () {
    Route::post("/committee/{id}/addleader", [LeaderController::class, 'addLeader']);
    Route::post("/committee/{id}/removeleader", [LeaderController::class, 'removeLeader']);
    Route::post("/committee/{id}/addmember", [MembersController::class, 'addMember']);
    Route::post("/committee/{id}/removemember", [MembersController::class, 'removeMember']);
});
