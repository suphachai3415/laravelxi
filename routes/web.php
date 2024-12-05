<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/page1', function () {
    return "สวัสดีจ้าาาาาา !!!";
});

Route::get('/gallery', function () {

     $ant = "https://static1.moviewebimages.com/wordpress/wp-content/uploads/article/Oi0Q2edcVVhs4p1UivwyyseezFkHsq.jpg?q=50&fit=contain&w=1107";
     $bird = "https://images.indianexpress.com/2021/03/falcon-anthony-mackie-1200.jpg";
     $cat = "https://www.onyxtruth.com/wp-content/uploads/2017/06/black-panther-movie-onyx-truth.jpg";
     $god = "https://www.blackoutx.com/wp-content/uploads/2021/04/Thor.jpg";
     $spider = "https://icdn5.digitaltrends.com/image/spiderman-far-from-home-poster-2-720x720.jpg";

     return view("test/index", compact("ant","bird","cat","god","spider"));

});

Route::get('/gallery/ant', function () {
    $ant = "https://static1.moviewebimages.com/wordpress/wp-content/uploads/article/Oi0Q2edcVVhs4p1UivwyyseezFkHsq.jpg?q=50&fit=contain&w=1107";
    return view("test/ant", compact("ant"));
});

Route::get('/gallery/bird', function () {
    $bird = "https://images.indianexpress.com/2021/03/falcon-anthony-mackie-1200.jpg";
    return view("test/bird", compact("bird"));
});

Route::get('/gallery/cat', function () {
    $cat = "https://www.onyxtruth.com/wp-content/uploads/2017/06/black-panther-movie-onyx-truth.jpg";
    return view("test/cat", compact("cat"));
});



