<?php

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Auth::routes();

Route::group(['prefix' => ADMIN, 'as' => ADMIN . '.', 'middleware'=>['auth']], function() {
    Route::get('/', 'DashboardController@index')->name('dash');
    Route::resource('users', 'UserController');
    Route::resource('unit', 'UnitController');
    Route::resource('marketing', 'MarketingController');
    Route::resource('payment', 'PaymentController');
    Route::resource('project', 'ProjectController');
    Route::resource('category_payment', 'Category_PaymentController');
    Route::resource('utj', 'utjController');
    Route::resource('costing', 'CostingController');
    Route::resource('report', 'ReportController');
   });

//    Route::get('admin/report', function(){
//         $report = App\Costing::find(1);
//         $report2 = App\Payment::find(1);
//         $report3 = App\Unit::find(1);

//         $data = [
//             'name' => $report2->name_customer,
//             'phone' => $report->phone,
//             'npwp' => $report->npwp,
//             'ktp' => $report->ktp,
//             'email' => $report->email
//         ];
//         return $data;    
//     });

Route::get('/', function () {
    return view('/auth/login');
});

Route::get('/sales', 'SalesController@index');

Route::get('/agent', 'AgentController@index');

