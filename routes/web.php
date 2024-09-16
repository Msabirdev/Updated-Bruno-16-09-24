<?php

use App\Http\Controllers\Apps\PermissionManagementController;
use App\Http\Controllers\Apps\RoleManagementController;
use App\Http\Controllers\Apps\UserManagementController;
use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PropertyPermissionController;
use App\Http\Controllers\DashboardStyleController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\SettingController;


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

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/', [DashboardController::class, 'dashboard']);

    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    Route::name('user-management.')->group(function () {
        Route::resource('/user-management/users', UserManagementController::class);
        Route::resource('/user-management/roles', RoleManagementController::class);
        Route::resource('/user-management/permissions', PermissionManagementController::class);
    });
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/profile', 'profile')->name('profile');
        Route::post('/profile-save', 'general')->name('profile.save');
        Route::post('/password-save', 'password')->name('password.save');
        // Route::get('/', 'dashboard')->name('dashboard');
         Route::get('/test-dashboard', 'dashboardTestSabir');
        Route::get('/settings', 'setting')->name('setting')->middleware('permission:manage settings');
        Route::post('/setting-save', 'settingSave')->name('setting.save');
        Route::post('/users-setting-save', 'userSettingSave')->name('users.setting.save');

        //filter the contacts
        Route::get('/filter-contacts', 'filterContacts')->name('filter.contacts');
        Route::get('/filter-locations', 'filterLocations')->name('filter.by.location');
    });
    Route::get('/companies/dashboards', [DashboardController::class, 'companyDashboard'])->name('view.company.dashboard');
    Route::prefix('user')->name('user.')->controller(UserController::class)->group(function () {
        // Route::get('/list', 'list')->name('list')->middleware('permission:view user');
        Route::get('/add', 'add')->name('add')->middleware('permission:create user management');
        Route::get('/edit/{id?}', 'edit')->name('edit')->middleware('permission:write user management');
        Route::post('/save/{id?}', 'save')->name('save');
        Route::get('/delete/{id?}', 'delete')->name('delete')->middleware('permission:delete user management');
        Route::get('/status/{id?}', 'status')->name('status')->middleware('permission:write user management');
        Route::get('/enable-design/{id?}', 'enableDesign')->name('enable_design')->middleware('permission:write user management');
    });

    Route::prefix('role')->name('role.')->controller(RoleController::class)->group(function () {
        Route::get('/list', 'list')->name('list')->middleware('permission:view role');
        Route::get('/add', 'add')->name('add')->middleware('permission:add role');
        Route::get('/edit/{id?}', 'edit')->name('edit')->middleware('permission:edit role');
        Route::post('/save/{id?}', 'save')->name('save');
        Route::get('/delete/{id?}', 'delete')->name('delete')->middleware('permission:delete role');
        Route::get('/status/{id?}', 'status')->name('status')->middleware('permission:edit role');
    });

    Route::prefix('permission')->name('permission.')->controller(PermissionController::class)->group(function () {
        Route::get('/manage', 'manage')->name('manage')->middleware('permission:manage permissions');
    });
    Route::prefix('propertypermission')->name('propertypermission.')->controller(PropertyPermissionController::class)->group(function () {
        Route::get('/manage/property/permission', 'manage')->name('manage');
    });
    Route::post('/import-leads', 'DashboardController@importAppointments')->name('uploadChunks');

    //dashboard styles
    Route::prefix('designer')->name('style.')->controller(DashboardStyleController::class)->group(function () {
        Route::get('/dashboard', 'dashboardStyle')->name('dashboard')->middleware('permission:manage designer');
         Route::post('/dashboard-save', 'dashboardStyleSave')->name('dashboard.save')->middleware('permission:manage designer');
    });
    //property
    Route::prefix('property')->name('property.')->controller(PropertyController::class)->group(function () {
        Route::get('/list', 'list')->name('list');
        Route::get('/add', 'add')->name('add');
        Route::get('/edit/{id?}', 'edit')->name('edit');
        Route::post('/save/{id?}', 'save')->name('save');
        Route::get('/delete/{id?}', 'delete')->name('delete');
        Route::get('/status/{id?}', 'status')->name('status');
        Route::post('/import/{id?}', 'import')->name('import');
        Route::get('/property/filter', 'filterproperty')->name('filter');
    });

/* GHL Auth connections */
Route::prefix('authorization')->name('authorization.')->controller(SettingController::class)->group(function () {
    Route::get('/crm/oauth/callback', 'goHighLevelCallback')->name('gohighlevel.callback');
});

Route::get('/test-command', function(){
    dd(Hash::make('12345678'));
});

Route::get('/not-allowed', function(){
    return view('not_allowed');
})->name('not_allowed');

Route::get('/update-contact-tags', function () {
    set_time_limit(3000000);
    // Fetch all contacts
    $contacts = Contact::all();

    foreach ($contacts as $contact) {
        // Check if 'tags' is an array
        if (is_array($contact->tags)) {
            // Convert the array to a comma-separated string
            $tagsString = implode(',', $contact->tags);

            // Update the 'tags' attribute with the new string value
            $contact->tags = $tagsString;

            // Save the updated contact
            $contact->save();
        }
    }

    return response()->json(['message' => 'Contact tags updated successfully.']);
});

});
use Spatie\Permission\Models\Role;
Route::get('/error', function () {
    $adminROle = Role::where('name','company')->first();
    $user = auth()->user();
    // $user->syncRoles([]);
    $user->assignROle($adminROle);
    return $user->roles;
});

Route::get('/auth/redirect/{provider}', [SocialiteController::class, 'redirect']);

require __DIR__ . '/auth.php';

// Route::get(uri: '/testt', function ()    {


// });
