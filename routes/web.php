

<?php
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/{id}', 'UserController@getUser');

Route::post('addUser', 'UserController@addUser');

Route::post('/saveStudent', 'StudentController@saveStudent');

//Route::get('/saveStudent', function (){
//    return view('saveStudent');
//});

Route::get('/schools', function (){
    return view('saveSchool', ['schools' => \App\Model\School::all()]);
});

Route::post('/saveSchool', 'SchoolController@saveSchool');

Route::get('/school/{id}', 'SchoolController@schoolPage');

Route::get('/student/{id}', 'StudentController@studentPage');

Route::get('/section/{id}', 'SectionController@sectionPage');

Route::post('/join', 'StudentController@joinSection');

Route::post('/createSection', 'SectionController@createSection');




