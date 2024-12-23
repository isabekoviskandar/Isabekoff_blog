<?php

use App\Livewire\BlogComponent;
use App\Livewire\CategoryComponent;
use App\Livewire\PostComponent;
use App\Livewire\UserPageComponent;
use Illuminate\Support\Facades\Route;

Route::get('/' , CategoryComponent::class);

Route::get('/post' , PostComponent::class);


Route::get('/userPage' , UserPageComponent::class);

Route::get('/blog' , BlogComponent::class);