<?php

use App\Livewire\Counter;
use Illuminate\Support\Facades\Route;
use App\Livewire\Todos;

Route::get('/', Todos::class);
Route::get('/counter',Counter::class);