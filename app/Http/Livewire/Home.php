<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Route;
use Livewire\Component;

class Home extends Component
{
    public function route()
    {
        return Route::get('/home', static::class)
            ->name('home')
            ->middleware('auth');
    }

    public function render()
    {
        return view('home')
            ->layout('layouts.card');
    }
}
