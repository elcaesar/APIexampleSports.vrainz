<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Api\ValidatorController
{
    public function show($ani) 
    {
        
        $user = DB::table('users')->where('ani', $ani)->first();
        
        //verify if exists
        if(!$user) {
            return $this->sendError("No user data", "Error", 404);
        }

        //verify if category is "Beta"
        if($user->category_id == 2){
            return $this->sendResponse($user, "User successfully recovered", 404);
        }else {
            return $this->sendError("User does not belong to the Beta category", "Error", 500);
        }
    }
}
