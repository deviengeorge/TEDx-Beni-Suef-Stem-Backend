<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\LeadersExportController;
use Illuminate\Support\Facades\Route;

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

Route::view('/', 'welcome');


Route::get("/form", [FormController::class, 'index'])->name("form.index");
Route::post("/submitform", [FormController::class, 'store'])->name("form.submit");

// Route For Exporting The Data Inside CSV, XLSX, XLS File
Route::get("/export/leaders/{id}/xlsx", [LeadersExportController::class, 'exportXLSX'])->name('export.xlsx');
Route::get("/export/leaders/{id}/csv", [LeadersExportController::class, 'exportCSV'])->name('export.csv');
Route::get("/export/leaders/{id}/xls", [LeadersExportController::class, 'exportXLS'])->name('export.xls');
Route::get("/export/leaders/pdf", [LeadersExportController::class, 'exportPDF'])->name('export.pdf');
