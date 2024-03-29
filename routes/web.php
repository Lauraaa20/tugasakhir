<?php

use Illuminate\Support\Facades\Route;

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

$controller_path = 'App\Http\Controllers';

Route::middleware("auth")->group(function () {
    $controller_path = 'App\Http\Controllers';

    // Main Page Route
    Route::get('/', $controller_path . '\dashboard\Analytics@index')->name('dashboards-analytics');

    // Pages
    Route::get('/pages/account-settings-account', $controller_path . '\pages\AccountSettingsAccount@index')->name('pages-account-settings-account');
    Route::get('/pages/account-settings-notifications', $controller_path . '\pages\AccountSettingsNotifications@index')->name('pages-account-settings-notifications');
    Route::get('/pages/account-settings-connections', $controller_path . '\pages\AccountSettingsConnections@index')->name('pages-account-settings-connections');

    // tables
    Route::get('/tables/basic', $controller_path . '\tables\Basic@index')->name('tables-basic');
    Route::get('/tables/student', $controller_path . '\tables\StudentController@index')->name('student');

    //placement
    Route::get('/tables/placement', $controller_path . '\tables\PlacementController@index')->name('placement');
    Route::get('/tables/placement/create', $controller_path . '\tables\PlacementController@create')->name('placement.create');
    Route::get('/tables/placement/edit/{placementId}', $controller_path . '\tables\PlacementController@edit')->name('placement.edit');

    //classification
    Route::get('/tables/classification', $controller_path . '\tables\ClassificationController@index')->name('classification');
    Route::get('/tables/classification/create', $controller_path . '\tables\ClassificationController@create')->name('classification.create');
    Route::get('/tables/classification/edit/{classificationId}', $controller_path . '\tables\ClassificationController@edit')->name('classification.edit');

    //tutor
    Route::get('/tables/tutor', $controller_path . '\tables\TutorController@index')->name('tutor');
    Route::get('/tables/tutor/create', $controller_path . '\tables\TutorController@create')->name('tutor.create');
    Route::get('/tables/tutor/edit/{tutorId}', $controller_path . '\tables\TutorController@edit')->name('tutor.edit');


    //student
    Route::get('/student', $controller_path . '\tables\StudentController@index')->name('student');
    Route::get('/student/create', $controller_path . '\tables\StudentController@create')->name('student.create');
    Route::post('/student/edit/{studentId}', $controller_path . '\tables\StudentController@edit')->name('student.edit');

    //kartukendali
    Route::get('/tables/kartukendali', $controller_path . '\tables\KartuKendaliController@index')->name('kartukendali');
    Route::get('/tables/kartukendali/create', $controller_path . '\tables\KartuKendaliController@create')->name('kartukendali.create');
    Route::get('/tables/kartukendali/edit{kartukendaliId}', $controller_path . '\tables\KartuKendaliController@edit')->name('kartukendali.edit');

    //jadwal
    Route::get('/tables/jadwal', $controller_path . '\tables\JadwalController@index')->name('jadwal');
    Route::get('/tables/jadwal/create', $controller_path . '\tables\JadwalController@create')->name('jadwal.create');
    Route::get('/tables/jadwal/edit/{jadwalId}', $controller_path . '\tables\JadwalController@edit')->name('jadwal.edit');

    //quiz
    Route::get('/tables/quiz', $controller_path . '\tables\QuizController@index')->name('quiz');
    Route::get('/tables/quiz/create', $controller_path . '\tables\QuizController@create')->name('quiz.create');
    Route::get('/tables/quiz/edit/{quizId}', $controller_path . '\tables\QuizController@edit')->name('quiz.edit');

    //nilai
    Route::get('/tables/nilai', $controller_path . '\tables\NilaiController@index')->name('nilai');
    Route::get('/tables/nilai/create', $controller_path . '\tables\NilaiController@create')->name('nilai.create');
    Route::get('/tables/nilai/edit/{nilaiId}', $controller_path . '\tables\NilaiController@edit')->name('nilai.edit');

    //sertifikat
    Route::get('/tables/sertifikat', $controller_path . '\tables\SertifikatController@index')->name('sertifikat');
    Route::get('/tables/sertifikat/create', $controller_path . '\tables\SertifikatController@create')->name('sertifikat.create');
    Route::get('/tables/sertifikat/edit/{sertifikatId}', $controller_path . '\tables\SertifikatController@edit')->name('sertifikat.edit');
});


// layout
Route::get('/layouts/without-menu', $controller_path . '\layouts\WithoutMenu@index')->name('layouts-without-menu');
Route::get('/layouts/without-navbar', $controller_path . '\layouts\WithoutNavbar@index')->name('layouts-without-navbar');
Route::get('/layouts/fluid', $controller_path . '\layouts\Fluid@index')->name('layouts-fluid');
Route::get('/layouts/container', $controller_path . '\layouts\Container@index')->name('layouts-container');
Route::get('/layouts/blank', $controller_path . '\layouts\Blank@index')->name('layouts-blank');

// pages
Route::get('/pages/misc-error', $controller_path . '\pages\MiscError@index')->name('pages-misc-error');
Route::get('/pages/misc-under-maintenance', $controller_path . '\pages\MiscUnderMaintenance@index')->name('pages-misc-under-maintenance');

// authentication
Route::get('/auth/login-basic', $controller_path . '\authentications\LoginBasic@index')->name('auth-login-basic');
Route::get('/auth/register-basic', $controller_path . '\authentications\RegisterBasic@index')->name('auth-register-basic');
Route::get('/auth/forgot-password-basic', $controller_path . '\authentications\ForgotPasswordBasic@index')->name('auth-reset-password-basic');

// cards
Route::get('/cards/basic', $controller_path . '\cards\CardBasic@index')->name('cards-basic');

// User Interface
Route::get('/ui/accordion', $controller_path . '\user_interface\Accordion@index')->name('ui-accordion');
Route::get('/ui/alerts', $controller_path . '\user_interface\Alerts@index')->name('ui-alerts');
Route::get('/ui/badges', $controller_path . '\user_interface\Badges@index')->name('ui-badges');
Route::get('/ui/buttons', $controller_path . '\user_interface\Buttons@index')->name('ui-buttons');
Route::get('/ui/carousel', $controller_path . '\user_interface\Carousel@index')->name('ui-carousel');
Route::get('/ui/collapse', $controller_path . '\user_interface\Collapse@index')->name('ui-collapse');
Route::get('/ui/dropdowns', $controller_path . '\user_interface\Dropdowns@index')->name('ui-dropdowns');
Route::get('/ui/footer', $controller_path . '\user_interface\Footer@index')->name('ui-footer');
Route::get('/ui/list-groups', $controller_path . '\user_interface\ListGroups@index')->name('ui-list-groups');
Route::get('/ui/modals', $controller_path . '\user_interface\Modals@index')->name('ui-modals');
Route::get('/ui/navbar', $controller_path . '\user_interface\Navbar@index')->name('ui-navbar');
Route::get('/ui/offcanvas', $controller_path . '\user_interface\Offcanvas@index')->name('ui-offcanvas');
Route::get('/ui/pagination-breadcrumbs', $controller_path . '\user_interface\PaginationBreadcrumbs@index')->name('ui-pagination-breadcrumbs');
Route::get('/ui/progress', $controller_path . '\user_interface\Progress@index')->name('ui-progress');
Route::get('/ui/spinners', $controller_path . '\user_interface\Spinners@index')->name('ui-spinners');
Route::get('/ui/tabs-pills', $controller_path . '\user_interface\TabsPills@index')->name('ui-tabs-pills');
Route::get('/ui/toasts', $controller_path . '\user_interface\Toasts@index')->name('ui-toasts');
Route::get('/ui/tooltips-popovers', $controller_path . '\user_interface\TooltipsPopovers@index')->name('ui-tooltips-popovers');
Route::get('/ui/typography', $controller_path . '\user_interface\Typography@index')->name('ui-typography');

// extended ui
Route::get('/extended/ui-perfect-scrollbar', $controller_path . '\extended_ui\PerfectScrollbar@index')->name('extended-ui-perfect-scrollbar');
Route::get('/extended/ui-text-divider', $controller_path . '\extended_ui\TextDivider@index')->name('extended-ui-text-divider');

// icons
Route::get('/icons/boxicons', $controller_path . '\icons\Boxicons@index')->name('icons-boxicons');

// form elements
Route::get('/forms/basic-inputs', $controller_path . '\form_elements\BasicInput@index')->name('forms-basic-inputs');
Route::get('/forms/input-groups', $controller_path . '\form_elements\InputGroups@index')->name('forms-input-groups');

// form layouts
Route::get('/form/layouts-vertical', $controller_path . '\form_layouts\VerticalForm@index')->name('form-layouts-vertical');
Route::get('/form/layouts-horizontal', $controller_path . '\form_layouts\HorizontalForm@index')->name('form-layouts-horizontal');
