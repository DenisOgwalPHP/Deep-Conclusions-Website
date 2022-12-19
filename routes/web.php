<?php

use App\Http\Livewire\AboutUsComponent;
use App\Http\Livewire\AdminAddBlogComponent;
use App\Http\Livewire\AdminAddCategoryComponent;
use App\Http\Livewire\AdminAddServicesComponent;
use App\Http\Livewire\AdminAddStaffComponent;
use App\Http\Livewire\AdminBlogComponent;
use App\Http\Livewire\AdminCategoriesComponent;
use App\Http\Livewire\AdminContactsComponent;
use App\Http\Livewire\AdminEditBlogComponent;
use App\Http\Livewire\AdminEditCategoryComponent;
use App\Http\Livewire\AdminEditServicesComponent;
use App\Http\Livewire\AdminEditStaffComponent;
use App\Http\Livewire\AdminServicesComponent;
use App\Http\Livewire\AdminSettingComponent;
use App\Http\Livewire\AdminStaffComponent;
use App\Http\Livewire\BlogDetailsComponent;
use App\Http\Livewire\BlogsComponent;
use App\Http\Livewire\CareerDetailsComponent;
use App\Http\Livewire\CareersComponent;
use App\Http\Livewire\ClientDetailsComponent;
use App\Http\Livewire\ClientsComponent;
use App\Http\Livewire\ContactUsComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ServiceDetailsComponent;
use App\Http\Livewire\ServicesComponent;
use App\Http\Livewire\TeamComponent;
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

Route::get('/', HomeComponent::class);
Route::get('/about-us', AboutUsComponent::class)->name('about');
Route::get('/contact-us', ContactUsComponent::class)->name('contact');
Route::get('/services', ServicesComponent::class)->name('services');
Route::get('/careers', CareersComponent::class)->name('careers');
Route::get('/clients', ClientsComponent::class)->name('clients');
Route::get('/blogs', BlogsComponent::class)->name('blogs');
Route::get('/our-team', TeamComponent::class)->name('team');
Route::get('/blog-details/{slug}', BlogDetailsComponent::class)->name('blog.details');
Route::get('/service/{slug}', ServiceDetailsComponent::class)->name('service.detail');
Route::get('/career/{slug}', CareerDetailsComponent::class)->name('career.detail');
Route::get('/client/{slug}', ClientDetailsComponent::class)->name('client.detail');
// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
//For user
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

});


//for Admin
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/admin/categories', AdminCategoriesComponent::class)->name('admin.categories');
    Route::get('/admin/category/add', AdminAddCategoryComponent::class)->name('admin.addcategory');
    Route::get('/admin/category/edit/{category_slug}', AdminEditCategoryComponent::class)->name('admin.editcategory');

    Route::get('/admin/blogs', AdminBlogComponent::class)->name('admin.blogs');
    Route::get('/admin/blogs/add', AdminAddBlogComponent::class)->name('admin.addblog');
    Route::get('/admin/blogs/edit/{blog_slug}', AdminEditBlogComponent::class)->name('admin.editblog');


    Route::get('/admin/staffs', AdminStaffComponent::class)->name('admin.staffs');
    Route::get('/admin/staff/add', AdminAddStaffComponent::class)->name('admin.addstaff');
    Route::get('/admin/staff/edit/{staff_id}', AdminEditStaffComponent::class)->name('admin.editstaff');


    Route::get('/admin/services', AdminServicesComponent::class)->name('admin.services');
    Route::get('/admin/service/add', AdminAddServicesComponent::class)->name('admin.addservice');
    Route::get('/admin/service/edit/{service_slug}', AdminEditServicesComponent::class)->name('admin.editservice');

    // Route::get('/admin/clients', AdminClientsComponent::class)->name('admin.clients');
    // Route::get('/admin/client/add', AdminAddClientComponent::class)->name('admin.addclient');
    // Route::get('/admin/client/edit/{client_id}', AdminEditClientComponent::class)->name('admin.editclient');

    // Route::get('/admin/careers', AdminCareersComponent::class)->name('admin.careers');
    // Route::get('/admin/career/add', AdminAddCareersComponent::class)->name('admin.addcareer');
    // Route::get('/admin/career/edit/{career_id}', AdminEditCareersComponent::class)->name('admin.editcareer');


    Route::get('/admin/contact-us', AdminContactsComponent::class)->name('admin.contact');
    Route::get('/admin/settings', AdminSettingComponent::class)->name('admin.settings');
});