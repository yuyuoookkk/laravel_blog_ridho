<?php

use Illuminate\Support\Facades\Route;


// Public pages
Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');

// Blog index
Route::view('/blog', 'blog.index')->name('blog.index');

// Blog posts (explicit routes for each static Blade view)
Route::prefix('blog')->group(function () {
    Route::view('/microbreaks-productivity', 'blog.microbreaks-productivity')->name('blog.microbreaks-productivity');
    Route::view('/css-tips-clean-ui', 'blog.css-tips-clean-ui')->name('blog.css-tips-clean-ui');
    Route::view('/start-a-tech-blog-2025', 'blog.start-a-tech-blog-2025')->name('blog.start-a-tech-blog-2025');
    Route::view('/content-that-converts', 'blog.content-that-converts')->name('blog.content-that-converts');
    Route::view('/minimalist-design-guide', 'blog.minimalist-design-guide')->name('blog.minimalist-design-guide');
    Route::view('/web-accessibility-basics', 'blog.web-accessibility-basics')->name('blog.web-accessibility-basics');
});
