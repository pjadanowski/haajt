<?php

use App\Livewire\Pages\About;
use App\Livewire\Pages\Contact;
use App\Livewire\Pages\Welcome;
use App\Livewire\Projects;
use Illuminate\Support\Facades\Route;



Route::get('/', Welcome::class);
Route::get('/o-nas', About::class)->name('about');
Route::get('/kontakt', Contact::class)->name('contact');
Route::get('/nasze-realizacje', Projects::class)->name('projects');
