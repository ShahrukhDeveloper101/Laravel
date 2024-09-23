<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/send_mail', [HomeController::class, 'send_mail'])->name('home.send');


Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/about', [HomeController::class, 'about'])->name('home.about');
Route::get('/services', [HomeController::class, 'services'])->name('home.services');
Route::get('/service_detail/{id}', [HomeController::class, 'service_detail'])->name('home.service_detail');

Route::get('/blog', [HomeController::class, 'blog'])->name('home.blog');
Route::get('/blog_detail/{id}', [HomeController::class, 'blog_detail'])->name('home.blog_detail');

Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');
Route::get('/refer_and_earn', [HomeController::class, 'refer_and_earn'])->name('home.refer_and_earn');
Route::get('/portfolio/{id}', [HomeController::class, 'portfolio'])->name('home.portfolio');
Route::get('/portfolio_detail/{id}', [HomeController::class, 'portfolio_detail'])->name('home.portfolio_detail');
Route::get('/youtube', [HomeController::class, 'youtube'])->name('home.youtube');
Route::get('/youtube_blog_detail/{id}', [HomeController::class, 'youtube_blog_detail'])->name('home.youtube_blog_detail');

Route::post('/', [HomeController::class, 'store_contact'])->name('home.store_contact');
Route::post('/store_newsletter', [HomeController::class, 'store_newsletter'])->name('home.store_newsletter');
 

 

Route::group(['prefix' => 'admin'], function () {
    // Routes for non-authenticated users
    Route::group(['middleware' => 'admin.guest'], function () {
        Route::post('authenticate', [AdminController::class, 'authenticate'])->name('admin.authenticate');
        Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    });

    // Routes for authenticated users
    Route::group(['middleware' => 'admin.auth'], function () {
        Route::get('seo/{id}', [AdminController::class, 'seo'])->name('admin.seo');
        Route::put('update_seo/{id}', [AdminController::class, 'update_seo'])->name('admin.update_seo');

        Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('add_portfolio', [AdminController::class, 'add_portfolio'])->name('admin.add_portfolio');
        Route::get('view_portfolios', [AdminController::class, 'view_portfolios'])->name('admin.view_portfolios');
        Route::get('portfolio/{id}', [AdminController::class, 'portfolio'])->name('admin.portfolio');
        Route::get('portfolio/edit/{id}', [AdminController::class, 'portfolio_edit'])->name('admin.portfolio_edit');
        Route::post('store_portfolio', [AdminController::class, 'store_portfolio'])->name('admin.store_portfolio');
        Route::put('update_portfolio/{id}', [AdminController::class, 'update_portfolio'])->name('admin.update_portfolio');
        Route::delete('delete_portfolio/{id}', [AdminController::class, 'delete_portfolio'])->name('admin.delete_portfolio');
        Route::get('add_service', [AdminController::class, 'add_service'])->name('admin.add_service');
        Route::get('view_services', [AdminController::class, 'view_services'])->name('admin.view_services');
        Route::get('service/{id}', [AdminController::class, 'service'])->name('admin.service');
        Route::get('service/edit/{id}', [AdminController::class, 'service_edit'])->name('admin.service_edit');
        Route::post('store_service', [AdminController::class, 'store_service'])->name('admin.store_service');
        Route::put('update_service/{id}', [AdminController::class, 'update_service'])->name('admin.update_service');
        Route::delete('delete_service/{id}', [AdminController::class, 'delete_service'])->name('admin.delete_service');
        
        Route::get('add_blog', [AdminController::class, 'add_blog'])->name('admin.add_blog');
        Route::get('view_blogs', [AdminController::class, 'view_blogs'])->name('admin.view_blogs');
        Route::post('store_blog', [AdminController::class, 'store_blog'])->name('admin.store_blog');
        Route::get('blog/{id}', [AdminController::class, 'blog'])->name('admin.blog');
        Route::get('blog/edit/{id}', [AdminController::class, 'blog_edit'])->name('admin.blog_edit');
        Route::put('update_blog/{id}', [AdminController::class, 'update_blog'])->name('admin.update_blog');
        Route::delete('delete_blog/{id}', [AdminController::class, 'delete_blog'])->name('admin.delete_blog');
        
        Route::get('add_youtube_video', [AdminController::class, 'add_youtube_video'])->name('admin.add_youtube_video');
        Route::get('view_youtube_video', [AdminController::class, 'view_youtube_video'])->name('admin.view_youtube_video');
        Route::post('store_youtube_video', [AdminController::class, 'store_youtube_video'])->name('admin.store_youtube_video');
        Route::get('youtube_blog/{id}', [AdminController::class, 'youtube_blog'])->name('admin.youtube_blog');
        Route::get('youtube_blog/edit/{id}', [AdminController::class, 'youtube_blog_edit'])->name('admin.youtube_blog_edit');
        Route::put('update_youtube_video/{id}', [AdminController::class, 'update_youtube_video'])->name('admin.update_youtube_video');
        Route::delete('delete_youtube_blog/{id}', [AdminController::class, 'delete_youtube_blog'])->name('admin.delete_youtube_blog');
        
        Route::delete('delete_email/{id}', [AdminController::class, 'delete_email'])->name('admin.delete_email');
        Route::get('emails/{column}', [AdminController::class, 'emails'])->name('admin.emails');
        Route::get('all_emails', [AdminController::class, 'all_emails'])->name('admin.all_emails');
        Route::post('start_emailing', [AdminController::class, 'startEmailing'])->name('admin.start_emailing');
        Route::get('remaining_emails', [AdminController::class, 'getRemainingEmails'])->name('admin.get_remaining_emails');

        Route::get('contact', [AdminController::class, 'contact'])->name('admin.contact');
        Route::get('newsletter', [AdminController::class, 'newsletter'])->name('admin.newsletter');
        Route::get('logout', [AdminController::class, 'logout'])->name('admin.logout');
    });
});
