<?php

 
namespace App\Http\Controllers;
 
 
use App\Models\Transactions;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
 
 
class LogController extends Controller
{









    public function logit(Request $request)
    {
          

         $data = request()->all();

         $source= $data['source'];

       //we can also implement this by using an interface
        
       if ($source == 'db') {
          return  (new DBLogger)->log($source);
        } elseif ($source == 'csv') {
           return  (new FileLogger)->log($source);
        }  else {
             
            return response('Parameter value not found',404);
  
        }
    }



}







class Logger {

    public function log($content) 
    {
                
    }
}

class DBLogger
{
    public function log()
    {
        $users = DB::table('transactions')
        ->select('transactions.*')
        ->get();
      return response($users->toJson(JSON_PRETTY_PRINT), 200); 
    }
}

class FileLogger
{   
 


    
 function csvDirect()

{
    $file = $file = public_path('transactions.csv');
    $file_open = fopen($file,"r");
    $rreshta=0;
    
    
  
    
    while(($csv = fgetcsv($file_open, 1000, ",")) !== false)
    {
   
        $data[] = [
            'id' => $csv[0] ,
            'code' => $csv[1]  ,
            'amount' => $csv[2]  ,
            'user_id' => $csv[3]  ,
            'created_at' => $csv[4]  ,
            'updated_at' => $csv[5]  

            
        ];
    }
    return  response($data,200);    
    fclose($file);

}


   

    public function log()
    {  
     return    $this->csvDirect();
    }
}

 