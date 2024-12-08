<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get("/homepage", function () {
    return "<h1>This is home page</h1>";
});

Route::get("/homepage", function () {
    return "<h1>This is home page</h1>";
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/gallery', function () {

    $ant = "https://static1.moviewebimages.com/wordpress/wp-content/uploads/article/Oi0Q2edcVVhs4p1UivwyyseezFkHsq.jpg?q=50&fit=contain&w=1107";
    $bird = "https://images.indianexpress.com/2021/03/falcon-anthony-mackie-1200.jpg";
    $cat = "https://www.onyxtruth.com/wp-content/uploads/2017/06/black-panther-movie-onyx-truth.jpg";
    $god = "https://www.blackoutx.com/wp-content/uploads/2021/04/Thor.jpg";
    $spider = "https://icdn5.digitaltrends.com/image/spiderman-far-from-home-poster-2-720x720.jpg";

    return view("test/index", compact("ant", "bird", "cat", "god", "spider"));
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

Route::get('/active/index', function () {
    return view('active/index');
})->name('index');
Route::get('/active/about', function () {
    return view('active/about');
})->name('about');
Route::get('/active/services', function () {
    return view('active/services');
})->name('services');
Route::get('/active/portfolio', function () {
    return view('active/portfolio');
})->name('portfolio');
Route::get('/active/team', function () {
    return view('active/team');
})->name('team');
Route::get('/active/blog', function () {
    return view('active/blog');
})->name('blog');
Route::get('/active/contact', function () {
    return view('active/contact');
})->name('contact');

Route::get('/test', function () {
    return view('test');
})->name('test');


Route::get('/coronavirus', function () {
    $reports = [
        (object) ["country" => "Thailand", "date" => "2020-04-19", "total" => "2765", "active" => "790", "death" => "47", "recovered" => "1928"],
        (object) ["country" => "Thailand", "date" => "2020-04-18", "total" => "2733", "active" => "899", "death" => "47", "recovered" => "1787"],
        (object) ["country" => "Thailand", "date" => "2020-04-17", "total" => "2700", "active" => "964", "death" => "47", "recovered" => "1689"],
        (object) ["country" => "Thailand", "date" => "2020-04-16", "total" => "2672", "active" => "1033", "death" => "46", "recovered" => "1593"],
        (object) ["country" => "Thailand", "date" => "2020-04-15", "total" => "2643", "active" => "1103", "death" => "43", "recovered" => "1497"],
    ];
    return view("coronavirus", compact("reports"));
})->name('coronavirus');


Route::get('/active/teacher', function () {
    $teachers = json_decode(file_get_contents('https://raw.githubusercontent.com/arc6828/laravel8/main/public/json/teachers.json'));
    return view("active.teacher", compact("teachers"));
})->name('active.teacher');


//Route::get('/category/sport', function () {
//  return "<h1>This is sport Category Page</h1>";
//});
//Route::get('/category/politic', function () {
//  return "<h1>This is politic Category Page</h1>";
//});
//Route::get('/category/entertain', function () {
//    return "<h1>This is entertain Category Page</h1>";
//});
//Route::get('/category/auto', function () {
//    return "<h1>This is auto Category Page</h1>";
//});

Route::get('/category/sport', [CategoryController::class, "sport"]);
Route::get('/category/politic', [CategoryController::class, "politic"]);
Route::get('/category/entertain', [CategoryController::class, "entertain"]);
Route::get('/category/auto', [CategoryController::class, "auto"]);