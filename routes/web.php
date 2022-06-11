<?php

//Route::redirect('/', '/login');

route::get('/','IndexController@index')->name('index');
route::get('/contact','IndexController@contact')->name('contact');
route::post('/contact_store','IndexController@contact_store')->name('contact_store');
route::get('/thankyou','IndexController@thankyou')->name('thankyou');
route::get('/farming_project','IndexController@farming_project')->name('farming_project');
route::post('/farming_project_store','IndexController@farming_project_store')->name('farming_project_store');
route::get('/products','IndexController@products')->name('products');
route::get('/product_orders','IndexController@product_orders')->name('product_orders');
route::post('/product_orders_store','IndexController@product_orders_store')->name('product_orders_store');
route::get('/garden','IndexController@garden')->name('garden');
route::get('/request_garden','IndexController@request_garden')->name('request_garden');
route::post('/request_garden_store','IndexController@request_garden_store')->name('request_garden_store');
route::get('/common_diseases','IndexController@common_diseases')->name('common_diseases');
route::get('/Consult_expert','IndexController@Consult_expert')->name('Consult_expert');
route::post('/Consult_expert_store','IndexController@Consult_expert_store')->name('Consult_expert_store');

Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Product Category
    Route::delete('product-categories/destroy', 'ProductCategoryController@massDestroy')->name('product-categories.massDestroy');
    Route::post('product-categories/media', 'ProductCategoryController@storeMedia')->name('product-categories.storeMedia');
    Route::post('product-categories/ckmedia', 'ProductCategoryController@storeCKEditorImages')->name('product-categories.storeCKEditorImages');
    Route::resource('product-categories', 'ProductCategoryController');

    // Product Tag
    Route::delete('product-tags/destroy', 'ProductTagController@massDestroy')->name('product-tags.massDestroy');
    Route::resource('product-tags', 'ProductTagController');

    // Product
    Route::delete('products/destroy', 'ProductController@massDestroy')->name('products.massDestroy');
    Route::post('products/media', 'ProductController@storeMedia')->name('products.storeMedia');
    Route::post('products/ckmedia', 'ProductController@storeCKEditorImages')->name('products.storeCKEditorImages');
    Route::resource('products', 'ProductController');

    // Gallery
    Route::delete('galleries/destroy', 'GalleryController@massDestroy')->name('galleries.massDestroy');
    Route::post('galleries/media', 'GalleryController@storeMedia')->name('galleries.storeMedia');
    Route::post('galleries/ckmedia', 'GalleryController@storeCKEditorImages')->name('galleries.storeCKEditorImages');
    Route::resource('galleries', 'GalleryController');

    // Request A Service
    Route::delete('request-a-services/destroy', 'RequestAServiceController@massDestroy')->name('request-a-services.massDestroy');
    Route::resource('request-a-services', 'RequestAServiceController');

    // Contact Us
    Route::delete('contactuses/destroy', 'ContactUsController@massDestroy')->name('contactuses.massDestroy');
    Route::post('contactuses/media', 'ContactUsController@storeMedia')->name('contactuses.storeMedia');
    Route::post('contactuses/ckmedia', 'ContactUsController@storeCKEditorImages')->name('contactuses.storeCKEditorImages');
    Route::resource('contactuses', 'ContactUsController');

    // Agricultural Projects
    Route::delete('agricultural-projects/destroy', 'AgriculturalProjectsController@massDestroy')->name('agricultural-projects.massDestroy');
    Route::resource('agricultural-projects', 'AgriculturalProjectsController');

    // Common Diseases
    Route::delete('common-diseases/destroy', 'CommonDiseasesController@massDestroy')->name('common-diseases.massDestroy');
    Route::post('common-diseases/media', 'CommonDiseasesController@storeMedia')->name('common-diseases.storeMedia');
    Route::post('common-diseases/ckmedia', 'CommonDiseasesController@storeCKEditorImages')->name('common-diseases.storeCKEditorImages');
    Route::resource('common-diseases', 'CommonDiseasesController');

    // Ask Consultation
    Route::delete('ask-consultations/destroy', 'AskConsultationController@massDestroy')->name('ask-consultations.massDestroy');
    Route::resource('ask-consultations', 'AskConsultationController');


    // Oders Protect
    Route::delete('oders-protects/destroy', 'OdersProtectController@massDestroy')->name('oders-protects.massDestroy');
    Route::post('oders-protects/media', 'OdersProtectController@storeMedia')->name('oders-protects.storeMedia');
    Route::post('oders-protects/ckmedia', 'OdersProtectController@storeCKEditorImages')->name('oders-protects.storeCKEditorImages');
    Route::resource('oders-protects', 'OdersProtectController');



    Route::get('global-search', 'GlobalSearchController@search')->name('globalSearch');
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
});
