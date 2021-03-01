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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/main', 'App\Http\Controllers\MainController@index')->name('main');
Route::get('/show', 'App\Http\Controllers\ShowController@index')->name('show');
Route::get('/getAnimalReportWithDate', 'App\Http\Controllers\ShowController@getAnimalReportWithDate')->name('getAnimalReportWithDate');

Route::post('/updateActivities', 'App\Http\Controllers\MainController@updateActivities')->name('updateActivities');
Route::post('/deleteActivities', 'App\Http\Controllers\MainController@deleteActivities')->name('deleteActivities');

Route::post('/updateAnimalDeath', 'App\Http\Controllers\MainController@updateAnimalDeath')->name('updateAnimalDeath');
Route::post('/deleteAnimalDeath', 'App\Http\Controllers\MainController@deleteAnimalDeath')->name('deleteAnimalDeath');

Route::post('/updateAnimalMonth', 'App\Http\Controllers\MainController@updateAnimalMonth')->name('updateAnimalMonth');
Route::post('/deleteAnimalMonth', 'App\Http\Controllers\MainController@deleteAnimalMonth')->name('deleteAnimalMonth');

Route::post('/updateAnimals', 'App\Http\Controllers\MainController@updateAnimals')->name('updateAnimals');
Route::post('/deleteAnimals', 'App\Http\Controllers\MainController@deleteAnimals')->name('deleteAnimals');

Route::post('/updateAnimalSell', 'App\Http\Controllers\MainController@updateAnimalSell')->name('updateAnimalSell');
Route::post('/deleteAnimalSell', 'App\Http\Controllers\MainController@deleteAnimalSell')->name('deleteAnimalSell');

Route::post('/updateCategories', 'App\Http\Controllers\MainController@updateCategories')->name('updateCategories');
Route::post('/deleteCategories', 'App\Http\Controllers\MainController@deleteCategories')->name('deleteCategories');


Route::post('/updateCategoryMonth', 'App\Http\Controllers\MainController@updateCategoryMonth')->name('updateCategoryMonth');
Route::post('/deleteCategoryMonth', 'App\Http\Controllers\MainController@deleteCategoryMonth')->name('deleteCategoryMonth');

Route::post('/updateCompanyExpense', 'App\Http\Controllers\MainController@updateCompanyExpense')->name('updateCompanyExpense');
Route::post('/deleteCompanyExpense', 'App\Http\Controllers\MainController@deleteCompanyExpense')->name('deleteCompanyExpense');

Route::post('/updateExpenseMonth', 'App\Http\Controllers\MainController@updateExpenseMonth')->name('updateExpenseMonth');
Route::post('/deleteExpenseMonth', 'App\Http\Controllers\MainController@deleteExpenseMonth')->name('deleteExpenseMonth');

Route::post('/updateFoodCategory', 'App\Http\Controllers\MainController@updateFoodCategory')->name('updateFoodCategory');
Route::post('/deleteFoodCategory', 'App\Http\Controllers\MainController@deleteFoodCategory')->name('deleteFoodCategory');

Route::post('/updateFoods', 'App\Http\Controllers\MainController@updateFoods')->name('updateFoods');
Route::post('/deleteFoods', 'App\Http\Controllers\MainController@deleteFoods')->name('deleteFoods');

Route::post('/updateMeatPrice', 'App\Http\Controllers\MainController@updateMeatPrice')->name('updateMeatPrice');
Route::post('/deleteMeatPrice', 'App\Http\Controllers\MainController@deleteMeatPrice')->name('deleteMeatPrice');

Route::post('/updateMilkPrice', 'App\Http\Controllers\MainController@updateMilkPrice')->name('updateMilkPrice');
Route::post('/deleteMilkPrice', 'App\Http\Controllers\MainController@deleteMilkPrice')->name('deleteMilkPrice');

Route::post('/updateSemination', 'App\Http\Controllers\MainController@updateSemination')->name('updateSemination');
Route::post('/deleteSemination', 'App\Http\Controllers\MainController@deleteSemination')->name('deleteSemination');

Route::post('/updateTable', 'App\Http\Controllers\MainController@updateTable')->name('updateTable');
Route::post('/deleteTable', 'App\Http\Controllers\MainController@deleteTable')->name('deleteTable');

Route::post('/updateUser', 'App\Http\Controllers\MainController@updateUser')->name('updateUser');
Route::post('/deleteUser', 'App\Http\Controllers\MainController@deleteUser')->name('deleteUser');

Route::post('/updateVaccine', 'App\Http\Controllers\MainController@updateVaccine')->name('updateVaccine');
Route::post('/deleteVaccine', 'App\Http\Controllers\MainController@deleteVaccine')->name('deleteVaccine');

Route::post('/updateVaccineAnimal', 'App\Http\Controllers\MainController@updateVaccineAnimal')->name('updateVaccineAnimal');
Route::post('/deleteVaccineAnimal', 'App\Http\Controllers\MainController@deleteVaccineAnimal')->name('deleteVaccineAnimal');

