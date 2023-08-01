<?php

use App\Livewire\Pages\About;
use App\Livewire\Pages\Contact;
use App\Livewire\Pages\Welcome;
use Illuminate\Support\Facades\Route;



Route::get('/', Welcome::class);
Route::get('/about', About::class);
Route::get('/contact', Contact::class);
