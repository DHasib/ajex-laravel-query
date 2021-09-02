<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\District;
use App\Models\Upazila;
use App\Models\History;
use Validator;

class UserController extends Controller
{

    
    public function index($id){

        $user = User::find($id);

        $districts = District::all();

        // dd($user);

        return view('welcome')->with('user',  $user)
                              ->with('districts',  $districts);
    }

    public function getUpazila($id){

        $upazilas = Upazila::where('district_id', '=', $id)->get();


        // dd($upazilas);

        return response()->json( $upazilas, 200); 
    }

    public function updateUserData($id,  Request $request){

           $updateUser  =  User::find($id);
        //    dd( $updateUser ,  $request->all());
           $updateUser->name =  $request->name;
           $updateUser->upazila_id =  $request->upazila;
           $updateUser->gender =  $request->gender;

           $historyCreated  =  History::create([
            'name'         => $updateUser->name,
            'upazila_id'   =>  $updateUser->upazila_id,
            'gender'       => $updateUser->gender,
         ]);

        if ($historyCreated) {
            $is_saved = $updateUser->save();
        } 


           if ($is_saved){
            
               return redirect()->back();
           }

       
    }
    
}
