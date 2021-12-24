<?php

use App\Http\Livewire\IptvUsers\IptvUsers;
use App\Http\Livewire\IptvUsers\Categoryposts;
use App\Http\Livewire\Hosts\Hosts;
use App\Http\Livewire\Hosts\Host as p;
use App\Http\Livewire\Contacts\Tagposts;
use App\Http\Livewire\Contacts\Contacts;
use Illuminate\Support\Facades\Route;



// Route::get('test', function () {
//     $category = App\Models\IptvUser::find(3);
//     // return $category->hosts;

//     $comment = App\Models\Comment::find(152);
//     // return $comment->author;
//     // return $comment->post;

//     $post = App\Models\Host::find(152);
//     // return $post->category;
//     // return $post->author;
//     // return $post->images;
//     // return $post->comments;
//     // return $post->contacts;

//     $tag = App\Models\Contact::find(5);
//     // return $tag->hosts;

//     $author = App\Models\User::find(88);
//     // return $author->hosts;
//     return $author->comments;
// });
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::middleware(['auth:sanctum', 'verified'])->get('/',IptvUsers::class)->name('dashboard');




Route::middleware(['auth:sanctum', 'verified'])->get('users', IptvUsers::class)->name('users');
//Route::get('dashboard/users/{id}/hosts', Categoryposts::class);

Route::middleware(['auth:sanctum', 'verified'])->get('hosts', Hosts::class)->name('hosts');
//Route::get('dashboard/hosts/{id}', p::class);

Route::middleware(['auth:sanctum', 'verified'])->get('contacts', Contacts::class)->name('contacts');
//Route::get('dashboard/contacts/{id}/hosts', Tagposts::class);
