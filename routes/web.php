<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LearnController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\OptionController;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LectureController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\InstructorAuthController;
use App\Http\Controllers\About_UsController;
use App\Http\Controllers\My_ProfileController;
use App\Http\Controllers\Pages\CartPageController;
use App\Http\Controllers\Pages\CheckoutController;
use App\Http\Controllers\pages\HomePageController;
use App\Http\Controllers\pages\CoursePageController;
use App\Http\Controllers\Pages\ViewCourseController;
use App\Http\Controllers\Pages\ContactPageController;
use App\Http\Controllers\Pages\CategoryPageController;
use App\Http\Controllers\Pages\CheckoutPageController;
use App\Http\Controllers\Pages\CustomerPageController;
use App\Http\Controllers\Pages\WishlistPageController;
use App\Http\Controllers\Pages\InstructorPageController;
use App\Http\Controllers\PaymentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [AuthController::class, 'index'])->name('login');

Route::prefix('sensorial')->group(function () {

    // Authentecation

    Route::group(['middleware' => 'guest'], function () {

        // 1- Login
        Route::get('login', [AuthController::class, 'index'])->name('login');
        Route::post('login', [AuthController::class, 'login'])->name('login');

        // 2- Register
        Route::get('sign-up', [AuthController::class, 'register_view'])->name('sign-up');
        Route::post('sign-up', [AuthController::class, 'register'])->name('sign-up.store');

        // 3- Forgot Password
        Route::get('password/forgot', [AuthController::class, 'forgotPasswordView'])->name('forgot-password.view');
        Route::post('password/forgot', [AuthController::class, 'sendRequestLink'])->name('forgot-password.link');

        // Route::get('password/reset/{token}', [AuthController::class, '']);
        // Route::post('password/reset', [AuthController::class, '']);
        // Route::get('reset-password/{token}', 'App\Http\Controllers\Auth\ResetPasswordController@getPassword');
        // Route::post('reset-password', 'App\Http\Controllers\Auth\ResetPasswordController@updatePassword');

    });


    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    // Home
    Route::get('home', [HomePageController::class, 'show'])->name('homeShow');


    // My_Profile
    // Route::get('My_Profile', [My_ProfileController::class, 'index'])->name('My_Profile');

    Route::prefix('My_Profile')->group(function () {
        Route::get('/', [My_ProfileController::class, 'index'])->name('My_Profile');
        Route::get('/review', [My_ProfileController::class, 'review'])->name('review');
        Route::get('/payment', [My_ProfileController::class, 'payment'])->name('payment');
        Route::get('/details', [My_ProfileController::class, 'details'])->name('details');
        Route::get('/check_out', [My_ProfileController::class, 'check_out'])->name('check_out');
        Route::get('/methods', [My_ProfileController::class, 'methods'])->name('methods');
        Route::get('/forgot_password', [My_ProfileController::class, 'forgot_password'])->name('forgot_password');
        Route::get('/create_password', [My_ProfileController::class, 'create_password'])->name('create_password');
        Route::get('/bank', [My_ProfileController::class, 'bank'])->name('bank');
        Route::get('/confirmation', [My_ProfileController::class, 'confirmation'])->name('confirmation');
        Route::get('/Course_fee', [My_ProfileController::class, 'Course_fee'])->name('Course_fee');
        Route::get('/video', [My_ProfileController::class, 'video'])->name('video');
        Route::get('/video_review', [My_ProfileController::class, 'video_review'])->name('video_review');
        Route::get('/assignment', [My_ProfileController::class, 'assignment'])->name('assignment');
        Route::get('/challenge', [My_ProfileController::class, 'challenge'])->name('challenge');
        Route::get('/certification', [My_ProfileController::class, 'certification'])->name('certification');
        Route::get('/about_course', [My_ProfileController::class, 'about_course'])->name('about_course');
        Route::get('/grade', [My_ProfileController::class, 'grade'])->name('grade');
    });

    Route::resource('payment', PaymentController::class);

    // Categories
    Route::prefix('category')->group(function () {
        Route::get('/', [CategoryPageController::class, 'show'])->name('categoryShow');
    });

    // about_us
    Route::get('about_us', [About_UsController::class, 'index'])->name('about_us');


    // Instructors
    Route::prefix('instructor')->group(function () {
        Route::get('{id}', [InstructorPageController::class, 'show'])->name('instructorShow');
    });

    Route::prefix('contact')->group(function () {
        Route::post('', [ContactPageController::class, 'store'])->name('postContact');
    });

    // Customers
    Route::prefix('customer')->group(function () {
        Route::get('{id}', [CustomerPageController::class, 'show'])->name('customerShow');
    });

    // Courses
    Route::prefix('course')->group(function () {
        Route::get('/', [CoursePageController::class, 'all'])->name('coursesShow');
        Route::get('{id}', [CoursePageController::class, 'show'])->name('courseShow');
    });

    // Cart
    Route::prefix('cart')->group(function () {
        Route::post('/', [CartPageController::class, 'addToCart'])->name('addToCart');
        Route::get('/', [CartPageController::class, 'cartList'])->name('viewCart');
        Route::get('/{id}', [CartPageController::class, 'removeCartItem'])->name('removeItem');
    });

    // View Course
    Route::prefix('view-course')->group(function () {
        Route::get('{id}', [ViewCourseController::class, 'show'])->name('viewCourse');
        Route::get('lecture/{id}', [ViewCourseController::class, 'showLecture'])->name('viewLecture');
        Route::get('lecture/announcement/{id}', [ViewCourseController::class, 'showAnnouncement'])->name('viewAnnouncement');
    });

    // Checkout
    // Route::prefix('checkout')->group(function(){
    //     Route::get('/', [CheckoutPageController::class, 'view'])->name('viewCheckout');
    // });

    // WishList
    Route::prefix('wishlist')->group(function () {
        Route::get('/', [WishlistPageController::class, 'view'])->name('viewWishlist');
    });



    // Admin Dashboard
    Route::prefix('dashboard')->group(function () {

        // 1- Dashboard

        Route::get('ad/login', [AdminAuthController::class, 'show_login'])->name('admin_login');
        Route::post('ad/login', [AdminAuthController::class, 'login'])->name('admin_login');

        Route::get('inst/login', [InstructorAuthController::class, 'show_login'])->name('instructor_login');
        Route::post('inst/login', [InstructorAuthController::class, 'login'])->name('instructor_login');


        Route::get('', [DashboardController::class, 'showDash'])->middleware('auth:admin')->name('admin.dashboard');

        Route::get('inst', function () {
            return view('sensorial.dashboard.instructors.instructor-dashboard');
        })->name('instructor.dashboard');

        // 2- Operations

        Route::group(['middleware' => 'auth:admin'], function () {

            // Users

            // A- Admin
            Route::resource('admin', AdminController::class);

            // B- Instrcutor
            Route::resource('instructor', InstructorController::class);

            // C- Customer
            Route::resource('customer', CustomerController::class);

            // D- Student
            Route::resource('student', StudentController::class);

            //////////////////////////////////////////////////////////

            Route::resource('category', CategoryController::class);

            Route::resource('course', CourseController::class);

            //////////////////////////////////////////////////////////

            Route::resource('section', SectionController::class);

            Route::resource('quiz', QuizController::class);

            Route::resource('question', QuestionController::class);

            Route::resource('option', OptionController::class);

            Route::resource('lecture', LectureController::class);

            Route::resource('learn', LearnController::class);

            //////////////////////////////////////////////////////////

            Route::resource('salary', SalaryController::class);

            Route::resource('price', PricingController::class);

            Route::resource('contact', ContactController::class);

            Route::resource('comment', CommentController::class);
        });
    });
});
