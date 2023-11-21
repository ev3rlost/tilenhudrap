<?php

use App\Livewire\Home;
use App\Livewire\Contact;
use App\Livewire\Biography;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
Route::get('/biography', Biography::class)->name('biography');
Route::get('/contact', Contact::class)->name('contact');
