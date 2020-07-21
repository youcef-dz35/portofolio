<?php


use App\Mail\TestEmail;
use SendGrid\Mail\Mail;

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


Route::get('/', [
    'uses' => 'contactMessageController@create'

])->name('index');
Route::post('/', [
    'uses' => 'contactMessageController@store',
    'as' =>'contact.store'

]);

Route::get('/single', function () {
    return view('single');
})->name('single');

Route::get('/getmail',function(){
    $data = ['message' => 'This is a test!'];

    Mail::to('kebiryoucef07@gmail.com')->send(new TestEmail($data));
    return back();

})->name('testmail') ;
