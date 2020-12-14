<?php

 
namespace App\Http\Controllers;
use App\Classes\TransactionFactory;
use App\Models\User;
use App\Models\User_details;
use App\Models\Transactions;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
 
 
class UserController extends Controller
{
  
    public function index()
    {
      return   "Hello";
    }
    
    public function show()
    {
      
      $useri=User_details::get()->toJson(JSON_PRETTY_PRINT);
      return response($useri, 200);
      
    }
    

    // Task 1_1  Show All active users with AUSTRIAN citizenship
    public function activeAustrian()
    {
     
       $users = DB::table('users')
                   ->join('user_details', 'users.id', '=', 'user_details.user_id')
                   ->join('countries', 'user_details.citizenship_country_id', '=', 'countries.id' )
                   ->where('countries.id', '=', 1)
                   ->where('users.active', '=', 1)
                   ->select('user_details.user_id','user_details.first_name', 'user_details.last_name', 'countries.name as \'citizenship\'', 'users.email')
                   ->get();    
                   return view('index')->with('users',  $users );
    
     }
    







   
    
      public function modify($id)
      {
     
        try { 
          $userdetail=User_details::where('user_id', '=', $id)->first();
  
          return view('edit')->with('users', $userdetail); }

        catch(\Exception $exception){   return Response::json(['errormsg'=>$errormsg]);
        }
        
         
        
         

        
    
    }

     
    
  


    //here we pass the id of the user but we can pass also the ID of the record in User_details
    public function saveUser(Request $request, $id)
   {
    

     
      $userdetail=User_details::where('user_id', '=', $id)->first();
      $data = request()->all();    
      $userdetail->first_name= $data['first_name'];
      $userdetail->last_name= $data['last_name'];
      $userdetail->save();
    
      return redirect('/active');



    }

    // Task 1_3 Delete a user  if it has no  details 
    public function deleteUser($id)
     {
       
      if (!User_details::where('user_id' ,'=', $id)->exists())

      {   
  
        $user=User::find($id);
   
        $user->delete();   
       
           
        return redirect('/active2');



       }

      
       
        else 
        {
         return response('Can not delete user because it has details', 404);

        }
   
     


    }





  // delete a users detail  without deleting the user
    public function deleteUserDetail($id)
    {
      
      
       $userdetail=User_details::find($id);
  
       $userdetail->delete();   
      
          
       return redirect('/active');

 

   }









    // show users by details 
    public function activeUsers()
    {
          
      return view('index')->with('users', User_details::all());

        
 
    }

     //show users by email
    public function activeUsers2()
    {
          
      return view('allUsers')->with('users', User::all());

        
 
    }
  
   
    
  
     
     
  
 

 
 
 
 




    











  
    public function getOneUser($id) {
      
      if (User::where('id', $id)->exists()) {
          $user = User::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
          return response($user, 200);
        } else {
          return response()->json([
            "message" => "User not found"
          ], 404);
        }
    }
}

