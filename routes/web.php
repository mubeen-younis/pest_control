<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\SettingController;
use Illuminate\View\DynamicController;

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

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');




Auth::routes();

Route::get('/', [AdminController::class, 'home_page']);

Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/blog_details/{id}', [HomeController::class, 'blog_details'])->name('blog_details');

Route::get('/blog', [HomeController::class, 'blog'])->name('blog');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/faq', [HomeController::class, 'faq'])->name('faq');

Route::get('/members', [HomeController::class, 'members'])->name('members');

Route::get('/portolio', [HomeController::class, 'portfolio'])->name('portfolio');

Route::get('/pricing', [HomeController::class, 'pricing'])->name('pricing');


Route::get('/privacy-policy', [HomeController::class, 'privacy_policy'])->name('privacy-policy');

Route::get('/recover', [HomeController::class, 'recover'])->name('recover');

Route::get('/service-details', [HomeController::class, 'service_details'])->name('service-details');

Route::get('/services', [HomeController::class, 'services'])->name('services');

Route::get('/sign-in', [HomeController::class, 'sign_in'])->name('sign-in');

Route::get('/sign-up', [HomeController::class, 'sign_up'])->name('sign-up');


Route::get('/terms-condition', [HomeController::class, 'terms_condition'])->name('terms-condition');

Route::get('/testimonial', [HomeController::class, 'testimonial'])->name('testimonial');

Route::get('/error-404', [HomeController::class, 'error_404'])->name('error-404');










// Dashboard Routes----------------------------------------------------


Route::get('/user/logout', [LoginController::class, 'userLogout'])->name('user.logout');


Route::group(['prefix' => 'admin'], function(){
    Route::group(['middleware' => 'admin.guest'], function(){
        Route::view('/login', 'admin.login')->name('admin.login');
        Route::post('/login', [AdminController::class, 'authenticate'])->name('admin.auth');
    });

    Route::group(['middleware' => 'admin.auth'], function(){
        Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');
    });
});


// Route::get('/admin/dashboard', [HomeController::class, 'index'])->name('home');



Route::get('/admin/charts-apexcharts', [DashboardController::class, 'charts_apexcharts'])->name('charts-apexcharts');


Route::get('/admin/charts-chartjs', [DashboardController::class, 'charts_chartjs'])->name('charts-chartjs');


Route::get('/admin/charts-echarts', [DashboardController::class, 'charts_echarts'])->name('charts-echarts');



Route::get('/admin/components-accordion', [DashboardController::class, 'components_accordion'])->name('components-accordion');



Route::get('/admin/components-alerts', [DashboardController::class, 'components_alerts'])->name('components-alerts');



Route::get('/admin/components-badges', [DashboardController::class, 'components_badges'])->name('components-badges');



Route::get('/admin/components-breadcrumbs', [DashboardController::class, 'components_breadcrumbs'])->name('components-breadcrumbs');



Route::get('/admin/components-buttons', [DashboardController::class, 'components_buttons'])->name('components-buttons');



Route::get('/admin/components-cards', [DashboardController::class, 'components_cards'])->name('components-cards');



Route::get('/admin/components-carousel', [DashboardController::class, 'components_carousel'])->name('components-carousel');



Route::get('/admin/components-list-group', [DashboardController::class, 'components_list_group'])->name('components-list-group');



Route::get('/admin/components-modal', [DashboardController::class, 'components_modal'])->name('components-modal');



Route::get('/admin/components-pagination', [DashboardController::class, 'components_pagination'])->name('components-pagination');



Route::get('/admin/components-progress', [DashboardController::class, 'components_progress'])->name('components-progress');



Route::get('/admin/components-spinners', [DashboardController::class, 'components_spinners'])->name('components-spinners');



Route::get('/admin/components-tabs', [DashboardController::class, 'components_tabs'])->name('components-tabs');



Route::get('/admin/components-tooltips', [DashboardController::class, 'components_tooltips'])->name('components-tooltips');




Route::get('/admin/forms-editors', [DashboardController::class, 'forms_editors'])->name('forms-editors');



Route::get('/admin/forms-elements', [DashboardController::class, 'forms_elements'])->name('forms-elements');



Route::get('/admin/forms-layouts', [DashboardController::class, 'forms_layouts'])->name('forms-layouts');



Route::get('/admin/forms-validation', [DashboardController::class, 'forms_validation'])->name('forms-validation');



Route::get('/admin/icons-bootstrap', [DashboardController::class, 'icons_bootstrap'])->name('icons-bootstrap');



Route::get('/admin/icons-boxicons', [DashboardController::class, 'icons_boxicons'])->name('icons-boxicons');



Route::get('/admin/icons-remix', [DashboardController::class, 'icons_remix'])->name('icons-remix');



Route::get('/admin/pages-blank', [DashboardController::class, 'pages_blank'])->name('pages-blank');



Route::get('/admin/pages-contact', [DashboardController::class, 'pages_contact'])->name('pages-contact');



Route::get('/admin/pages-blank', [DashboardController::class, 'pages_blank'])->name('pages-blank');




Route::get('/admin/pages-error-404', [DashboardController::class, 'pages_error_404'])->name('pages-error-404');



Route::get('/admin/pages-faq', [DashboardController::class, 'pages_faq'])->name('pages-faq');



Route::get('/admin/pages-register', [DashboardController::class, 'pages_register'])->name('pages-register');



Route::get('/admin/tables-data', [DashboardController::class, 'tables_data'])->name('tables-data');



Route::get('/admin/tables-general', [DashboardController::class, 'tables_general'])->name('tables-general');




Route::get('/admin/users-profile', [DashboardController::class, 'users_profile'])->name('users-profile');




Route::get('/admin/loginr', [DashboardController::class, 'loginr'])->name('loginr');


// Dashboard to Website Handling
// Create Nav Item

Route::get('/backend/create', [ContactController::class, 'dynamic'])->name('create.backend');

Route::post('/backend/save', [ContactController::class, 'save'])->name('save.backend');


// create sub nav items

Route::get('/backend/subnavitems', [ContactController::class, 'sub_nav_items_create'])->name('sub_nav_items_create.backend');

Route::post('/backend/subnavitems', [ContactController::class, 'sub_nav_items_save'])->name('sub_nav_items_save.backend');


// create Logo

Route::get('/backend/settings/logo-update', [SettingController::class, 'logoCreate'])->name('logo.create');
Route::post('/backend/settings/logo-update', [SettingController::class, 'logoStore'])->name('logo.store');


// Banner Settings

Route::get('/backend/settings/banner-settings', [SettingController::class, 'banner_settings'])->name('banner-settings');
Route::post('/backend/settings/banner-settings', [SettingController::class, 'store_banner_settings'])->name('store_banner_settings');



// Company Logos

Route::get('/backend/settings/company-logo', [SettingController::class, 'create_company_logo'])->name('create-company-logo');
Route::post('/backend/settings/company-logo', [SettingController::class, 'store_company_logo'])->name('store-company-logo');


// Add Blogs

Route::get('/backend/settings/add-blog', [SettingController::class, 'create_blog'])->name('create-blog');

Route::post('/backend/settings/add-blog', [SettingController::class, 'store_blog'])->name('store-blog');

Route::get('/backend/settings/edit-blog/{id}', [SettingController::class, 'edit_blog'])->name('edit-blog');

Route::put('/backend/settings/update-blog/{id}', [SettingController::class, 'update_blog'])->name('update-blog');

Route::delete('/backend/settings/delete-blog/{id}', [SettingController::class, 'delete_blog'])->name('delete-blog');


// Blogs using Nice Admin Template

Route::get('/manage/blogs', [SettingController::class, 'manage_blogs'])->name('blogs');

// General Settings

Route::get('/admin/general/settings', [SettingController::class, 'general_settings'])->name('general-settings');

Route::post('/general/settings', [SettingController::class, 'general_settings_store'])->name('general-settings-store');


// Manage Services

Route::get('/manage/services', [SettingController::class, 'manage_services'])->name('manage-services');


// Add Services

Route::get('/add/services', [SettingController::class, 'add_services'])->name('add-services');
Route::post('/add/services', [SettingController::class, 'add_services_store'])->name('add-services-store');
Route::get('/add/services/{id}', [SettingController::class, 'edit_services'])->name('edit-services');
Route::put('/add/services/{id}', [SettingController::class, 'update_services'])->name('update-services');
Route::delete('/add/services/{id}', [SettingController::class, 'delete_services'])->name('delete-services');


// Manage About Us

Route::get('/manage/about-us', [SettingController::class, 'manage_about_us'])->name('manage-about-us');
Route::post('/manage/about-us', [SettingController::class, 'store_about_us'])->name('store-about-us');

// Manage Portfolio

Route::get('/manage/portfolio', [SettingController::class, 'manage_portfolio'])->name('manage-portfolio');

// Portfolio Category, Service, Image
Route::get('create/portfolio', [SettingController::class, 'create_portfolio'])->name('create-portfolio');
Route::post('create/portfolio', [SettingController::class, 'store_portfolio'])->name('store-portfolio');
Route::get('create/portfolio/edit/{id}', [SettingController::class, 'edit_portfolio'])->name('edit-portfolio');
Route::put('create/portfolio/{id}', [SettingController::class, 'update_portfolio'])->name('update-portfolio');
Route::delete('create/portfolio/{id}', [SettingController::class, 'delete_portfolio'])->name('delete-portfolio');

// Portfolio Title, Description

Route::post('creating/portfolio', [SettingController::class, 'create_portfolio_title'])->name('create-portfolio-title');

// Manage Members

Route::get('manage/members', [SettingController::class, 'manage_members'])->name('manage-members');

// Manage Members Title, Description

Route::get('create/members', [SettingController::class, 'create_members'])->name('create-members');
Route::post('create/members', [SettingController::class, 'store_title_members'])->name('store-title-members');

Route::post('store/members', [SettingController::class, 'store_members'])->name('store-members');
Route::get('create/members/{id}', [SettingController::class, 'edit_members'])->name('edit-members');
Route::put('update/members/{id}', [SettingController::class, 'update_members'])->name('update-members');
Route::delete('delete/members/{id}', [SettingController::class, 'delete_members'])->name('delete-members');

// Client Feedback

Route::get('client/feedback', [SettingController::class, 'client_feedback'])->name('client-feedback');

Route::get('add/client/feedback', [SettingController::class, 'create_client_feedback'])->name('create-client-feedback');
Route::post('add/clien/feedback', [SettingController::class, 'store_client_feedback'])->name('store-client-feedback');
Route::get('edit/clien/feedback/{id}', [SettingController::class, 'edit_client_feedback'])->name('edit-client-feedback');
Route::put('edit/clien/feedback/{id}', [SettingController::class, 'update_client_feedback'])->name('update-client-feedback');
Route::delete('delete/clien/feedback/{id}', [SettingController::class, 'delete_client_feedback'])->name('delete-client-feedback');


// Manage Price

Route::get('manage/price', [PriceController::class, 'manage_price'])->name('manage-price');

// Monthly Basic

Route::get('monthly/basic', [PriceController::class, 'monthly_basic'])->name('monthly-basic');
Route::post('monthly/basic', [PriceController::class, 'store_monthly_basic'])->name('store-monthly-basic');
Route::delete('monthly/basic/{id}', [PriceController::class, 'delete_monthly_basic'])->name('delete-monthly-basic');

// Monthly Standard
Route::get('monthly/standard', [PriceController::class, 'monthly_standard'])->name('monthly-standard');
Route::post('monthly/standard', [PriceController::class, 'store_monthly_standard'])->name('store-monthly-standard');
Route::delete('monthly/standard/{id}', [PriceController::class, 'delete_monthly_standard'])->name('delete-monthly-standard');

// Monthly Premium
Route::get('monthly/premium', [PriceController::class, 'monthly_premium'])->name('monthly-premium');
Route::post('monthly/premium', [PriceController::class, 'store_monthly_premium'])->name('store-monthly-premium');
Route::delete('monthly/premium/{id}', [PriceController::class, 'delete_monthly_premium'])->name('delete-monthly-premium');

// Yearly Basic

Route::get('yearly/basic', [PriceController::class, 'yearly_basic'])->name('yearly-basic');
Route::post('yearly/basic', [PriceController::class, 'store_yearly_basic'])->name('store-yearly-basic');
Route::delete('yearly/basic/{id}', [PriceController::class, 'delete_yearly_basic'])->name('delete-yearly-basic');

// Yearly Standard

Route::get('yearly/standard', [PriceController::class, 'yearly_standard'])->name('yearly-standard');
Route::post('yearly/standard', [PriceController::class, 'store_yearly_standard'])->name('store-yearly-standard');
Route::delete('yearly/standard/{id}', [PriceController::class, 'delete_yearly_standard'])->name('delete-yearly-standard');

// Yearly Premium

Route::get('yearly/premium', [PriceController::class, 'yearly_premium'])->name('yearly-premium');
Route::post('yearly/premium', [PriceController::class, 'store_yearly_premium'])->name('store-yearly-premium');
Route::delete('yearly/premium/{id}', [PriceController::class, 'delete_yearly_premium'])->name('delete-yearly-premium');

// footer
Route::get('manage/footer', [PriceController::class, 'manage_footer'])->name('manage-footer');

// footer services

Route::get('footer/services', [PriceController::class, 'footer_services'])->name('footer-services');
Route::post('footer/services', [PriceController::class, 'store_footer_services'])->name('store-footer-services');
Route::delete('footer/services/{id}', [PriceController::class, 'delete_footer_services'])->name('delete-footer-services');



// footer quick links

Route::get('footer/quick/links', [PriceController::class, 'footer_quick_links'])->name('footer-quick-links');
Route::post('footer/quick/links', [PriceController::class, 'store_footer_quick_link'])->name('store-footer-quick-link');
Route::delete('footer/quick/links/{id}', [PriceController::class, 'delete_footer_quick_link'])->name('delete-footer-quick-link');


// footer contact us

Route::get('footer/contact-us', [PriceController::class, 'footer_contact'])->name('footer-contact');
Route::post('footer/contact-us', [PriceController::class, 'store_footer_contact'])->name('store-footer-contact');
Route::delete('footer/contact-us/{id}', [PriceController::class, 'delete_footer_contact'])->name('delete-footer-contact');

// footer logo title

Route::post('footer/logo', [PriceController::class, 'footer_logo'])->name('footer-logo');

