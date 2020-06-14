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
//Route::get('/Admin', 'test@show');
Route::get('/about',function (){

    return view ('about');
    
    
});
Route::get('/admin',function (){

    return view ('admin');
    
    
});
route::get('/tester','OrderController@index');
Route::get('/cart/finish',function (){

        return view ('finish');
        
        
});

Route::get('/faq',function (){

        return view ('faq');
        
        
});
Route::get('/testSMS/create','testnexmo@store');
Route::get('/cart/create','AddressControler@create');
Route::post('/cart','AddressControler@store')->name('cart');
Route::get('/cart/create',function (){
$user=App\user::find(Auth::user()->id);


            
    return view ('/cart/create',['address'=> $user->address ] );

});

//Route::post('/testSMS','testnexmo@store')->name('testSMS');



       Route::get('/payment',function (){

            return view ('payment');
            
            
});
Route::get('/menu',function (){


            
    return view ('menu',['item'=>DB::table( 'items' )->get(),'foodcategory'=>DB::table( 'foodcategory' )->get(),'extra'=>DB::table('extra')->get() ] );

});

Route::get('/additem/{item}','OrderController@add')->name('addtocart');
Route::get('/removeitem/{item}','OrderController@remove')->name('removefromcart');

Route::get('/payment1','PaymentController@store')->name('gopayment');


            Route::get('/cart',function (){

                return view ('cart');
                
                
 });
 Route::get('/finish',function (){

                return view ('finish');
                
                
 });
 Route::get('/items/{id}','test@show');
 
Route::get('/',function (){

return view ('index');


});


/*Route::get('/profile/{name}', function () {

    $name=request('name');
   
    return view('login',['name'=>$name]);

});
*/

Route::get('/login/facebook', 'SocialAuthFacebookController@redirect');
Route::get('/login/facebook/callback', 'SocialAuthFacebookController@callback');
Route::get('/forgot_password','Security\ForgotPassword@forgot');
Route::get('/forgot_password','Security\ForgotPassword@password');



Auth::routes();
Route::get('/redirect', 'SocialAuthGoogleController@redirect');
Route::get('/callback', 'SocialAuthGoogleController@callback');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'LogoutController@index')->name('logout');


