<?php

use App\Livewire\Blogs;
use App\Livewire\Contact;
use App\Livewire\Home;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class);
Route::get('our-blogs', Blogs::class)->name('blogs');
Route::get('contact-us', Contact::class)->name('contact');
