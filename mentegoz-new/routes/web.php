<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminIndexController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProjectCategoryController;
use App\Http\Controllers\ProjectTagsController;
use App\Http\Controllers\ProjectTechnologyController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\CareerformController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TalentalkController;

use App\Http\Controllers\WebController;
use App\Http\Controllers\ContactController;


// Admin Dashboard
Route::resource('admin_dashboard', AdminIndexController::class);
Route::get('/dashboard', [AdminIndexController::class, 'index']);
// Admin Banner
Route::resource('admin_banner', BannerController::class);
Route::get('/banner', [BannerController::class, 'index']);
Route::post('/banner_store', [BannerController::class, 'store'])->name('banner_store');
Route::delete('/banner_delete/{id}', [BannerController::class, 'destroy'])->name('banner_delete');

Route::resource('admin_team', TeamController::class);
Route::get('/team', [TeamController::class, 'index']);
Route::post('/team_store', [TeamController::class, 'store'])->name('team_store');
Route::delete('/team_delete/{id}', [TeamController::class, 'destroy'])->name('team_delete');

Route::resource('admin_news', NewsController::class);
Route::get('/adminnews', [NewsController::class, 'index']);
Route::post('/news_store', [NewsController::class, 'store'])->name('news_store');
Route::delete('/news_delete/{id}', [NewsController::class, 'destroy'])->name('news_delete');



Route::resource('admin_project_category', ProjectCategoryController::class);
Route::get('/project_category', [ProjectCategoryController::class, 'index']);
Route::post('/project_category_store', [ProjectCategoryController::class, 'store'])->name('project_category_store');
Route::delete('/project_category_delete/{id}', [ProjectCategoryController::class, 'destroy'])->name('project_category_delete');



Route::resource('admin_project_tags', ProjectTagsController::class);
Route::get('/project_tags', [ProjectTagsController::class, 'index']);
Route::post('/project_tags_store', [ProjectTagsController::class, 'store'])->name('project_tags_store');
Route::delete('/project_tags_delete/{id}', [ProjectTagsController::class, 'destroy'])->name('project_tags_delete');


Route::resource('admin_project_technology', ProjectTechnologyController::class);
Route::get('/project_technology', [ProjectTechnologyController::class, 'index']);
Route::post('/project_technologies_store', [ProjectTechnologyController::class, 'store'])->name('project_technologies_store');
Route::delete('/project_technology_delete/{id}', [ProjectTechnologyController::class, 'destroy'])->name('project_technology_delete');


Route::resource('admin_project', ProjectController::class);
Route::get('/project', [ProjectController::class, 'index']);
Route::get('/project_gallery/{id}', [ProjectController::class, 'gallery'])->name('project_gallery');
Route::post('/project_store', [ProjectController::class, 'store'])->name('project_store');
Route::post('/project_gallery_store', [ProjectController::class, 'gallery_store'])->name('project_gallery_store');
Route::delete('/project_delete/{id}', [ProjectController::class, 'destroy'])->name('project_delete');
Route::delete('/project_gallery_delete/{id}', [ProjectController::class, 'gallery_destroy'])->name('project_gallery_delete');

Route::resource('admin_gallery', GalleryController::class);
Route::get('/admingallery', [GalleryController::class, 'index']);
Route::post('/gallery_store', [GalleryController::class, 'store'])->name('gallery_store');
Route::delete('/gallery_delete/{id}', [GalleryController::class, 'destroy'])->name('gallery_delete');

Route::resource('admin_career', CareerController::class);
Route::get('/admincareer', [CareerController::class, 'index']);
Route::post('/career_store', [CareerController::class, 'store'])->name('career_store');
Route::delete('/career_delete/{id}', [CareerController::class, 'destroy'])->name('career_delete');

Route::resource('admin_testimonial', TestimonialController::class);
Route::get('/testimonial', [TestimonialController::class, 'index']);
Route::post('/testimonial_store', [TestimonialController::class, 'store'])->name('testimonial_store');
Route::delete('/testimonial_delete/{id}', [TestimonialController::class, 'destroy'])->name('testimonial_delete');



Route::resource('admin_newsletter', NewsletterController::class);
Route::get('/newsletter', [NewsletterController::class, 'index']);
Route::delete('/newsletter_delete/{id}', [NewsletterController::class, 'destroy'])->name('newsletter_delete');

Route::resource('admin_careerform', CareerformController::class);
Route::get('/careerform', [CareerformController::class, 'index']);
Route::delete('/careerform_delete/{id}', [CareerformController::class, 'destroy'])->name('careerform_delete');


// Web
Route::resource('web_index', WebController::class);
Route::get('/index', [WebController::class, 'index']);
Route::get('/', [WebController::class, 'index']);
Route::get('/about', [WebController::class, 'about']);
Route::get('/career', [WebController::class, 'careers']);
Route::get('/services', [WebController::class, 'services']);
Route::get('/contact', [WebController::class, 'contact']);
Route::get('/digital-marketing', [WebController::class, 'digital_marketing']);
Route::get('/web-design', [WebController::class, 'web_design']);
Route::get('/peoplenspace', [WebController::class, 'peoplenspace']);
Route::get('/team_details/{slug}', [WebController::class, 'team_details'])->name('team_details');
Route::get('/portfolio', [WebController::class, 'projects']);
Route::get('/product', [WebController::class, 'products']);
Route::get('/blog-page', [WebController::class, 'blogs']);
Route::get('/blog-inner-page', [WebController::class, 'innerblogs']);
Route::get('/testimonial', [WebController::class, 'testimonials']);
Route::get('/clients', [WebController::class, 'client']);
Route::get('/portfolio_details/{slug}', [WebController::class, 'project_details'])->name('portfolio_details');
Route::post('contact_store', [WebController::class, 'store']);
Route::get('/privacypolicy', [WebController::class, 'privacy']);

Route::get('/seo-page', [WebController::class, 'seo']);

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes(['login' => false,'register' => false]);
Route::group(['prefix' => 'mgzadmin'], function () {

    Auth::routes();

});