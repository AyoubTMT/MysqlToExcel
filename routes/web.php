<?php

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

Route::get('/', 'ExportExcelController@index');

Route::get('/export_excel/excel', 'ExportExcelController@excel')->name('export_excel.excel');

Route::get('/export_excel/loadtemplate', 'ExportExcelController@loadtemplate')->name('export_excel.loadtemplate');

Route::get('/storeExcel', 'ExportExcelController@storeExcel');