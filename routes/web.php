<?php


use App\Livewire\Home;
use App\Livewire\Login;
use App\Livewire\Profile;
use App\Livewire\PostEdit;
use App\Livewire\PostShow;
use App\Livewire\PostIndex;
use App\Livewire\CreateUser;
use App\Livewire\PostCreate;
use App\Livewire\DashboardHome;
use App\Livewire\DashboardUser;
use Illuminate\Support\Facades\Route;
use App\Livewire\DashboardCategoryIndex;
use App\Livewire\DashboardCategoryCreate;
use App\Http\Controllers\LogoutController;
use App\Livewire\HomeShow;
use App\Livewire\Log;
use App\Livewire\NoteIndex;

Route::middleware(['auth'])->group(function () {

  Route::get('/admin', DashboardHome::class)->name('dashboard.home')->middleware('userAkses:admin');
  Route::get('/admin/category', DashboardCategoryIndex::class)->name('dashboard.category')->middleware('userAkses:admin');
  Route::get('/admin/category/create', DashboardCategoryCreate::class)->name('dashboard.category.create')->middleware('userAkses:admin');
  Route::get('/admin/note', NoteIndex::class)->name('dashboard.note')->middleware('userAkses:admin');
  Route::get('/admin/user', DashboardUser::class)->name('dashboard.user')->middleware('userAkses:admin');
  Route::get('/log', Log::class)->name('log-user')->middleware('userAkses:admin');
  Route::get('/posts', PostIndex::class)->name('posts');
  Route::get('/posts/create', PostCreate::class)->name('posts.create');

  Route::get('/posts/{slug}', PostShow::class)->name('posts.show');
  Route::get('/posts/{slug}/edit', PostEdit::class)->name('posts.edit');
  Route::get('/profile', Profile::class)->name('profile');
  Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');
});

Route::get('/', Home::class)->name('home');
Route::get('/home/posts/{slug}', HomeShow::class)->name('home.show');

Route::get('/register', CreateUser::class)->name('register');
Route::get('/login', Login::class)->name('login');
