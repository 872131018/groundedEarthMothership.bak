<?php
/*
* Load the request namespace for handling post
*/
use Illuminate\Http\Request;
/*
* Include product model
*/
use App\Product;
/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function () {
  /*
  * Get all the products to work with
  */
  $products = Product::all();
  /*
  * Create arrays for each type of slider
  */
  $mockups = [];
  $designs = [];
  foreach($products as $index=>$product) {
    switch($product->type) {
      case 'mockup':
        array_push($mockups, $product);
        break;
      case 'design':
        array_push($designs, $product);
        break;
      default:
        break;
    }
  }

  return view('index', [
      'base_url' => getenv("APP_URL"),
      'designs' => $designs,
      'mockups' => $mockups
  ]);
});
/*
* Save the email through post
*/
Route::post('/inquiry', 'InquiryController@save');
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/home', 'HomeController@index');
    /*
    * List the emails signed up for the website
    */
    Route::get('/inquiries', 'InquiryController@index');
    /*
    * File Routes
    */
    Route::get('/files', 'FileController@index');
    Route::delete('/files', 'FileController@delete');
    Route::put('/files', 'FileController@add');
    /*
    * Show the product list
    */
    Route::get('/products', 'ProductController@index');
    Route::post('/products', 'ProductController@edit');
    Route::put('/products', 'ProductController@add');
    Route::delete('/products', 'ProductController@delete');
    /*
    * Show the content block list
    */
    Route::get('/content', 'ContentController@index');
    Route::post('/content', 'ContentController@edit');
    Route::put('/content', 'ContentController@add');
    Route::delete('/content', 'ContentController@delete');
});
