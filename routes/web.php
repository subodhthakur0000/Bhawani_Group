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

// Route::get('/', function () {
//     return view('cd-admin.home.home');
// });
Route::get('/','FrontendController@home');
Route::get('about','FrontendController@about');
Route::get('testimonial','FrontendController@testimonial');
Route::get('design','FrontendController@design');
Route::get('contact','FrontendController@contact');
Route::get('service','FrontendController@index');
Route::get('service-detail&{id}/{title}','FrontendController@servicedetails');
Route::get('article','FrontendController@article');
Route::get('article-detail&{id}/{title}','FrontendController@articledetails');
Route::post('/storeinquiry','InquiryController@store');





Auth::routes(['register' => false]);
Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => 'auth'], function () {
	
	Route::get('/logout','HomeController@logout')->name('logout');

	Route::get('/dashboard','DashboardController@dashboard');
	Route::post('/quickmail','DashboardController@quickmail');
	Route::get('view-all-mails','DashboardController@view');
	Route::get('/deletemail/{id}','DashboardController@del');


	//ADMIN

Route::get('/view-all-admin','AdminController@adminshow');
Route::get('/addadmin','AdminController@add');
Route::post('/storeadmin','AdminController@storeadmin');
Route::get('/deleteadmin/{id}','AdminController@delete');


//Carousel
Route::get('/carousel','CarouselController@carousel');
Route::get('/addcarousel','CarouselController@addcarousel');
Route::post('/storecarousel','CarouselController@store');
Route::post('/statuscar/{id}','CarouselController@statusupdate');
Route::get('/deletecar/{id}','CarouselController@delete');


//About
Route::get('/addabout','AboutController@addabout');
Route::post('/storeabout','AboutController@store');
Route::get('/aboutdetail','AboutController@show');
Route::post('/updateabout','AboutController@update');



//Service
Route::get('/addservice','ServiceController@addservice');
Route::post('/storeservice','ServiceController@store');
Route::get('/allservice','ServiceController@viewservice');
Route::get('/editservices/{id}','ServiceController@edit');
Route::post('/update/{id}','ServiceController@update');
Route::post('/statusup/{id}','ServiceController@sup');
Route::get('/delete/{id}','ServiceController@delete');

//Design
Route::get('/adddesign','DesignController@adddesign');
Route::post('/storedesign','DesignController@store');
Route::get('/alldesign','DesignController@design');
Route::post('/statusdeg/{id}','DesignController@statusupdate');
Route::get('/deletedeg/{id}','DesignController@delete');


//Testonomials
Route::get('/addtestonomial','TestonomialController@addtestonomial');
Route::post('/storetestonomial','TestonomialController@store');
Route::get('/testonomial','TestonomialController@testonomial');
Route::post('/updatetestonomial/{id}','TestonomialController@update');
Route::get('/deletetes/{id}','TestonomialController@delete');
Route::post('/statusupdate/{id}','TestonomialController@status');


//Articles
Route::get('/addarticle','ArticleController@addarticle');
Route::post('/storearticle','ArticleController@store');
Route::get('/viewarticle','ArticleController@article');
Route::get('/deletearticle/{id}','ArticleController@delete');
Route::post('/statusart/{id}','ArticleController@statusupdate');
Route::post('/updateart/{id}','ArticleController@updateart');


//Conatct
Route::get('/createcontact','ContactController@addcontact');
Route::get('/viewcontact','ContactController@contact');
Route::get('/replies','ContactController@reply');
Route::get('/replycontact/{id}','ContactController@replyform');
Route::post('/storecontact','ContactController@store');
Route::post('/storereply/{id}','ContactController@storereply');
Route::get('/deleteinbox/{id}','ContactController@deleteinbox');
Route::get('/deletereply/{id}','ContactController@deletereply');


//Section
Route::get('/addsection','SectionController@addsection');
Route::post('/storesection','SectionController@store');
Route::get('/section','SectionController@show');
Route::post('/editsection/{id}','SectionController@update');
Route::post('/statussec/{id}','SectionController@statusupdate');
Route::get('/deletesec/{id}','SectionController@delete');

//Work
Route::get('/addwork','WorkController@add');
Route::get('/work','WorkController@work');
Route::post('/storework','WorkController@store');
Route::post('/statuswork/{id}','WorkController@statusupdate');
Route::get('/deletework/{id}','WorkController@delete');

//Teams
Route::get('/addteam','TeamController@add');
Route::post('/storeteams','TeamController@store');
Route::get('/team','Teamcontroller@team');
Route::get('/deleteteam/{id}','TeamController@delete');
Route::post('/editteam/{id}','TeamController@update');
Route::post('/statusteam/{id}','TeamController@statusupdate');

//SEO
Route::get('/addseo','SEOController@add');
Route::get('/viewseo','SEOController@view');
Route::post('/seostore','SEOController@store');
Route::get('/editseo/{id}','SEOController@edit');
Route::post('/updateseo/{id}','SEOController@updateseo');
Route::get('/deleteseo/{id}','SEOController@delete');

//Client
Route::get('/addclients','ClientController@add');
Route::get('/clients','ClientController@client');
Route::post('/storeclient','ClientController@store');
Route::post('/statuscl/{id}','ClientController@statusupdate');
Route::get('/deleteclient/{id}','ClientController@delete');


Route::get('/viewinquiry','InquiryController@index');

Route::get('/inquiryreplies','InquiryController@reply');
Route::get('/replyinquiry/{id}','InquiryController@replyform');
Route::post('/inquiry/{id}','InquiryController@storereply');
Route::get('/deleteinquiry/{id}','InquiryController@deleteinbox');
Route::get('/deleteinquiryreply/{id}','InquiryController@deletereply');
});