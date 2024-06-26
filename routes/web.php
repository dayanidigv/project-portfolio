<?php

use App\Http\Controllers\AchievementController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BasicDetailsController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\IconsController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicPageUrlController;
use Illuminate\Support\Facades\Route;



Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return Redirect("/admin");
    })->name('index');

    Route::prefix('admin')->group(function () {
        Route::controller(AdminController::class)->group(function () {
            Route::get('/', "index")->name('admin.index');
            Route::get('/dashboard', 'index')->name('admin.dashboard');
            Route::get('/public-page-url', 'public_page_url')->name('admin.public_page_url');
            Route::get('/basic-details', 'basicDetails')->name('admin.basic-details');
            Route::get('/achievements', 'achievements')->name('admin.achievements');
            Route::get('/skills', 'skills')->name('admin.skills');
            Route::get('/faqs', 'faqs')->name('admin.faqs');
            Route::get('/publications', 'publications')->name('admin.publications');
            Route::get('/awards', 'awards')->name('admin.awards');
            Route::get('/testimonial', 'testimonial')->name('admin.testimonial');
            Route::get('/inbox-messages', 'inboxMessages')->name('admin.messages.inbox');
            Route::get('/archived-messages', 'archivedMessages')->name('admin.messages.archived');
            Route::post("/{id}/save-skills",'saveSkills')->name("admin.skills.store");
            Route::delete('/skills/{id}/delete', 'destroySkills')->name('admin.skills.destroy');
        });

        Route::controller(ProfileController::class)->group(function () {
            Route::get('/profile', 'index')->name('admin.profile.index');
            Route::post('/profile/{encodeId}', 'update')->name('admin.profile.update');
        });

        Route::controller(MessageController::class)->group(function () {
            Route::post('/admin/message/${messageID}/make-as-read', 'makeAsRead')->name('admin.inbox.make-as-read');
        });

        Route::controller(AchievementController::class)->group(function () {
            Route::post('/achievements/${id}/store', 'store')->name('admin.achievements.store');
            Route::post('/achievements/${id}/update', 'update')->name('admin.achievements.update');
            Route::delete('/achievements/{id}/delete', 'destroy')->name('admin.achievements.destroy');
        });

        Route::controller(PublicPageUrlController::class)->group(function () {
            Route::post('/public-page-url/${id}/store', 'store')->name('admin.public_page_url.store');
            // Route::post('/public-page-url/${id}/update', 'update')->name('admin.achievements.update');
            // Route::delete('/public-page-url/{id}/delete', 'destroy')->name('admin.achievements.destroy');
        });

        Route::controller(BasicDetailsController::class)->group(function () {
            Route::post('/basic-details/${id}/store', 'store')->name('admin.basic-details.store');
            Route::post('/basic-details/${id}/update', 'update')->name('admin.basic-details.update');
        });

    });

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

});

// Routes for guest users
Route::middleware('guest')->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::get('/login', 'login')->name('login');
        Route::post('/login',  'loginPost')->name('login.post');
        Route::get('/sign-up','register')->name('register');
        Route::post('/sign-up', 'registerPost' )->name('register.post');
        Route::get('/forgot-password', 'forgotPassword' )->name('forgot-password');
    });
});

Route::prefix('api')->group(function () {
    Route::prefix('icons')->group(function () {
        Route::get("/",[IconsController::class,'icons'])->name("api.icons");
        Route::get("/search/{searchTerm}",[IconsController::class,'searchIcons'])->name("api.icons.search");
    });
    Route::prefix('{username}')->group(function () {
        Route::prefix('get')->group(function () {
            Route::get('achievement', [AchievementController::class, 'show']);
        });
    });
});

Route::prefix('check')->group(function () {
    Route::get('/timezone', function () { return config('app.timezone'); });
    Route::get('/appurl', function () { return config('app.url'); });
    Route::get('/env', function () { return config('app.env'); });
});

Route::get('/{publicName}', [PortfolioController::class, 'index'])->name('portfolio.index');
Route::post('/{publicName}/message/', [MessageController::class, 'store'])->name('portfolio.message');
Route::get('/{publicName}/{currentPage}', [PortfolioController::class, 'SubPage'])->name('portfolio.subPage');


