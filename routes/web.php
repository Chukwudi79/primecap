<?php

use Illuminate\Support\Facades\App;
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

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('/about', 'App\Http\Controllers\AboutController@about')->name('about');
Route::get('/service', 'App\Http\Controllers\ServiceController@service')->name('service');
Route::get('/signup', 'App\Http\Controllers\UserController@signup')->name('signup');
Route::get('/login', 'App\Http\Controllers\UserController@login')->name('login');
Route::get('/contact', 'App\Http\Controllers\UserController@contact')->name('contact');
///////
Route::get('/faq', 'App\Http\Controllers\UserController@faq')->name('faq');
Route::get('/depositlist', 'App\Http\Controllers\UserController@depositlist')->name('depositlist');
Route::get('/deposithistory', 'App\Http\Controllers\UserController@deposithistory')->name('deposithistory');
Route::get('/withdraw', 'App\Http\Controllers\UserController@withdraw')->name('withdraw');
Route::get('/earnings', 'App\Http\Controllers\UserController@earnings')->name('earnings');
Route::get('/referals', 'App\Http\Controllers\UserController@referals')->name('referals');
Route::get('/referallinks', 'App\Http\Controllers\UserController@referallinks')->name('referallinks');
Route::get('/editAccount', 'App\Http\Controllers\UserController@editaccount')->name('editaccount');
Route::get('/generatePin/{number}', 'App\Http\Controllers\DepositController@generatePin')->name('generatepin');
Route::get('/deposit', 'App\Http\Controllers\DepositController@deposit')->name('deposit');

Route::post('/makeDeposit', 'App\Http\Controllers\DepositController@submitDeposit')->name('makeDeposit');
Route::get('/withdrawhistory', 'App\Http\Controllers\UserController@withdrawhistory')->name('withdrawhistory');

////////////
Route::post('/contactMessage', 'App\Http\Controllers\UserController@contactMessage')->name('sendmessage');

Route::group(['middleware' => ['auth:web']], function () {
    Route::get('/userprofile', 'App\Http\Controllers\UserController@userprofile')->name('userprofile');
});


Route::get('/sendMoney', 'App\Http\Controllers\AccountController@sendMoney')->name('sendMoney');
Route::get('/referrerLink', function () {
	dd(auth()->user()->getReferralLinkAttribute());
});

Route::post('/confirm-trasaction', 'App\Http\Controllers\TransactionController@confirmTransaction')->name('confirm-transaction');

Route::get('/transactionsHistory', 'App\Http\Controllers\TransactionController@transactionsHistory')->name('transactionsHistory');
Route::post('/signup', 'App\Http\Controllers\UserController@register')->name('register');
Route::post('/login', 'App\Http\Controllers\UserController@loginauth')->name('loginauth');
Route::get('/logout', 'App\Http\Controllers\UserController@logout')->name('logout');
Route::post('/avatarUpload', 'App\Http\Controllers\UserController@avatarUpload')->name('avatarUpload');


Route::get('/try', 'App\Http\Controllers\UserController@try')->name('try');
Route::post('/trys', 'App\Http\Controllers\UserController@avatarUpload')->name('trys');


Route::group(['middleware' => 'admin'], function () {
    Route::get('/dashboard', 'App\Http\Controllers\AdminController@dashboard')->name('dashboard');
    Route::get('/chooseOperation', 'App\Http\Controllers\AdminController@operationVerify')->name('chooseOperation');
    Route::post('/submitBalance', 'App\Http\Controllers\AdminController@submitBalance')->name('submitBalance');
		Route::post('/modifyDepositBitcoinWallet', 'App\Http\Controllers\AdminController@modifyDepositBitcoinWallet')->name('modifyDepositBitcoinWallet');
    Route::post('/submitBlockForm', 'App\Http\Controllers\AdminController@submitBlock')->name('submitBlock');
    Route::post('/addToAccountsSubmit', 'App\Http\Controllers\AdminController@addToAccountsList')->name('addToAccountsSubmit');
    Route::post('/removeFromAccountsSubmit', 'App\Http\Controllers\AdminController@removeFromAuthorizeAccounts')->name('removeFromAccountsSubmit');
    Route::post('/submitDeleteUser', 'App\Http\Controllers\AdminController@deleteUser')->name('deleteUser'); //->middleware(['admin']);
    Route::get('/modifyOrDeleteTransaction', 'App\Http\Controllers\AdminController@modifyOrDeleteTransaction')->name('modifyOrDeleteTransaction');
		Route::get('/modifyTransactionStatus', 'App\Http\Controllers\AdminController@modifyTransactionStatus')->name('modifyTransactionStatus');
		Route::post('/deleteTransaction', 'App\Http\Controllers\AdminController@deleteTransaction')->name('deleteTransaction');
    Route::post('/modifyTransaction', 'App\Http\Controllers\AdminController@modifyTransaction')->name('modifyTransaction');
    Route::post('/generateTransactions', 'App\Http\Controllers\AdminController@generateTransactions')->name('generateTransactions');
});

Route::get('my/dashboard', function(){
  return view('admin.dashboard');
});
