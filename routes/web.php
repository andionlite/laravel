<?php
 
use Illuminate\Support\Facades\Route;
use App\Models\User_details;
use App\Http\Controllers;

$dir_controllers="App\Http\Controllers\\";
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|  Author ANDI KUKA   13/12/2020
*/


//default route
Route::get('/', function () {
    return view('first');
});


//get all   users  by email
Route::get('active2', $dir_controllers.'UserController@activeUsers2');

//get all   users 
Route::get('active', $dir_controllers.'UserController@activeUsers');



//task 1_1  get all active users with Austrian citizenship
Route::get('activeAu', $dir_controllers.'UserController@activeAustrian');

 

 
 

// open user details for editing 
Route::get('/moduser/{id}',[
'as'=> 'user.modify' ,
'uses' =>  $dir_controllers.'UserController@modify' 
] );




//  saves the updated user details
Route::post('/saveuser/{id}',[
    'as'=> 'user.save' ,
    'uses' =>  $dir_controllers.'UserController@saveUser' 
    ] );

    
// delete a user if the user has no records on details we can use also DELETE Method in HTTP
Route::get('/deleteuser/{id}',[
    'as'=> 'user.delete' ,
    'uses' =>  $dir_controllers.'UserController@deleteUser' 
    ] );


//delete  only the detail of a user    
    Route::get('/deleteuserdetail/{id}',[
        'as'=> 'user.deletedetail' ,
        'uses' =>  $dir_controllers.'UserController@deleteUserDetail' 
        ] );


   // Task 2  Read transactions from DB or CSV     
    Route::get('transactions',[
            'as'=> 'transactions' ,
            'uses' =>  $dir_controllers.'LogController@logit' 
            ] );
    








// other features
//get all the users  
Route::get('getuser',$dir_controllers.'UserController@show');

//get one user with id
Route::get('getOneUser/{id}', $dir_controllers.'UserController@getOneUser');

 
 