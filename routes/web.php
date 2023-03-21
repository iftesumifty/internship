<?php

use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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


Route::get('admin/login',[BackendController::class,'admin_login'])->name('admin_login');
Route::post('login',[BackendController::class,'login'])->name('login');
Route::get('/redirects',[HomeController::class,'redirects'])->name('redirects');

Route::middleware(['admin_check'])->group(function () {
//addpublication
Route::get('ADD_PUBLICATION',[BackendController::class,'ADD_PUBLICATION'])->name('ADD_PUBLICATION'); 
Route::post('pubcreate',[BackendController::class,'pubcreate'])->name('pubcreate'); 
Route::get('pubcreate/edit/{id}',[BackendController::class,'pubcreate_edit'])->name('pubcreate_edit'); 
Route::put('pubcreate/update/{id}',[BackendController::class,'pubcreate_update'])->name('pubcreate_update'); 
Route::get('pub_delete/{id}',[BackendController::class,'pub_delete'])->name('pub_delete'); 
Route::get('dashboard',[BackendController::class,'dashboard'])->name('dashboard'); 
//add choice 
 Route::get('choice',[BackendController::class,'ch'])->name('ch'); 
 Route::post('choicecat',[BackendController::class,'choicecat'])->name('choicecat'); 
 Route::get('choice_delete/{id}',[BackendController::class,'choice1'])->name('choice1');
 
Route::get('backend',[BackendController::class,'backend'])->name('backend'); 
Route::get('logout',[BackendController::class,'logout'])->name('logout');
//add book like categories
 
Route::get('ADD_BOOK',[BackendController::class,'ADD_BOOK'])->name('ADD_BOOK'); 
Route::post('another',[BackendController::class,'another'])->name('another'); 
Route::get('BOOK_REPORT1',[BackendController::class,'BOOK_REPORT1'])->name('BOOK_REPORT1'); 
Route::post('subanother',[BackendController::class,'subanother'])->name('subanother'); 
Route::get('/book/edit1/{id}',[BackendController::class,'book_edit1'])->name('book_edit1'); 
Route::put('/update/book1/{id}',[BackendController::class,'update_book1'])->name('update_book1');

Route::get('ADD_BOOKdelete/{id}',[BackendController::class,'ADD_BOOKdelete'])->name('ADD_BOOKdelete'); 


//add product in frontend part...
Route::get('product/list',[BackendController::class,'product_list'])->name('product_list'); 

Route::post('product/add',[BackendController::class,'product_add'])->name('product_add'); 
Route::get('edit/pro/{id}',[BackendController::class,'edit_pro'])->name('edit_pro'); 
Route::put('/update/pro/{id}',[BackendController::class,'update_pro'])->name('update_pro');
Route::get('pro_list_delete/{id}',[BackendController::class,'pro_list_delete'])->name('pro_list_delete'); 
//user
Route::get('student',[BackendController::class,'student'])->name('student'); 
Route::get('/user/delete/{id}',[BackendController::class,'user_delete'])->name('user_delete'); 
Route::get('book_report',[BackendController::class,'book_report'])->name('book_report'); 
//all categories
Route::get('category/list',[BackendController::class,'category_list'])->name('category_list'); 
Route::post('cat/add',[BackendController::class,'cat_add'])->name('cat_add');
Route::get('category/list/delete/{id}',[BackendController::class,'category_delete'])->name('category_delete'); 

//sub category info for self
Route::get('sub/category1/list',[BackendController::class,'sub_category1_list'])->name('sub_category1_list'); 
Route::post('sub/category1/add',[BackendController::class,'sub_category1_add'])->name('sub_category1_add'); 
//for book self product
Route::get('product1',[BackendController::class,'product1'])->name('product1'); 
Route::post('product1/add',[BackendController::class,'product1_add'])->name('product1_add'); 
//for search 

//for return book
Route::get('return',[BackendController::class,'return'])->name('return');
Route::post('re1',[BackendController::class,'re1'])->name('re1');


//for messagemessage1
Route::get('message1',[BackendController::class,'message'])->name('message');
 Route::post('mes1',[BackendController::class,'messagepass'])->name('messagepass');




});

Route::get('/',[FrontendController::class,'index'])->name('index'); 
Route::get('/registration',[FrontendController::class,'registration'])->name('registration'); 

Route::post('/create/user',[FrontendController::class,'create_user'])->name('create_user');

//category edit update
Route::get('edit/cat/{id}',[BackendController::class,'edit_cat'])->name('edit_cat'); 
Route::put('/update/cat/{id}',[BackendController::class,'update_cat'])->name('update_cat');
//student edit update
Route::get('student/edit/{id}',[BackendController::class,'student_edit'])->name('student_edit'); 
Route::put('/update/user/{id}',[BackendController::class,'update_user'])->name('update_user');
//subcategory edit update
Route::get('edit/subcat/{id}',[BackendController::class,'edit_subcat'])->name('edit_subcat'); 
Route::put('/update/subcat/{id}',[BackendController::class,'update_subcat'])->name('update_subcat');
Route::get('/subcat/list/delete/{id}',[BackendController::class,'subcat_list_delete'])->name('subcat_list_delete'); 

Route::get('/book/edit/{id}',[BackendController::class,'book_edit'])->name('book_edit'); 
Route::put('/update/book/{id}',[BackendController::class,'update_book'])->name('update_book');
 Route::get('/user/list/delete/{id}',[BackendController::class,'user_list_delete'])->name('user_list_delete'); 
Route::put('/update/book1/{id}',[BackendController::class,'update_book1'])->name('update_book1');

//for product delete
Route::get('/pro/delete/{id}',[BackendController::class,'pro_delete'])->name('pro_delete'); 

//for view
Route::get('/view/{id}',[FrontendController::class,'view'])->name('view');

//forcart in book
Route::get('/for/{id}',[FrontendController::class,'for'])->name('for');

 //for add to cart button route
 Route::get('/cart/add/{id}',[FrontendController::class,'cart_add'])->name('cart_add'); 
 Route::get('/cart/list',[FrontendController::class,'cart_list'])->name('cart_list'); 
 Route::get('/checkout',[FrontendController::class,'checkout'])->name('checkout'); 
 Route::post('/placeorder',[FrontendController::class,'placeorder'])->name('placeorder'); 
 //forfrontend user
 Route::get('/userchoice1',[FrontendController::class,'userchoice'])->name('userchoice'); 





//for thank


Route::get('/thnk',[FrontendController::class,'thnk'])->name('thnk'); 

//for book add
Route::get('book',[FrontendController::class,'book'])->name('book'); 
Route::post('book1',[FrontendController::class,'book1'])->name('book1');

//for return edit
Route::get('return/edit/{id}',[BackendController::class,'edit_return'])->name('edit_return'); 
Route::put('/update/return/{id}',[BackendController::class,'update_return'])->name('update_return');
Route::get('/return/delete/{id}',[BackendController::class,'return_delete'])->name('return_delete'); 
//user sreturninfo
Route::get('/s_returninfo',[FrontendController::class,'s_returninfo'])->name('s_returninfo'); 

//for order
Route::get('/order',[BackendController::class,'order'])->name('order'); 
Route::get('/order/delete/{id}',[BackendController::class,'order_delete'])->name('order_delete'); 

Route::get('/order1',[BackendController::class,'order1'])->name('order1'); 
//frontend logout
//suborder delete
Route::get('/order1/delete/{id}',[BackendController::class,'suborder_delete'])->name('suborder_delete'); 

Route::get('logout',[BackendController::class,'logout'])->name('logout');
//user logout
Route::get('logout1',[BackendController::class,'logout1'])->name('logout1');

//for userchoiceview file
Route::get('details/{id}',[FrontendController::class,'details1'])->name('details1'); 
Route::get('buy',[FrontendController::class,'buy'])->name('buy'); 
Route::get('/cart/add1/{id}',[FrontendController::class,'cart_add1'])->name('cart_add1'); 
 Route::get('/cart/list1',[FrontendController::class,'cart_list1'])->name('cart_list1'); 


