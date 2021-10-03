<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminController;


Route::get('', [AdminController::class, 'index'])->name('admin.index');

Route::get('pages', function (){
    return view('admin.pages');
});
