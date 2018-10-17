<?php

    namespace App\Http\Controllers;

    use App\Singleowner;
    use App\Http\Controllers\Controller;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Validator;

    class SingleownerController extends Controller {
        public function __construct()  {
           // $this->middleware('guest');
        }
        protected function single_owner(Request $request)  {
            $this->validate(Request(),[
                'owner_comp_name' => 'required|string|max:255',
                'owner_country' =>'required|string|max:255',
                'owner_city' => 'required|string|max:255',
                'owner_name' => 'required|string|max:255', 
                'owner_mobile' => 'required|numeric|unique:singleowners',
                'owner_service' => 'required|string|max:100',
                'username' => 'required|string|max:255|unique:singleowners',
                'owner_password' => 'required|string|min:6|same:owner_confirm_password',
                'owner_confirm_password' => 'required|string|max:25',
            ]); 
            //|max:9  
            $result =  Singleowner::create([
                'comp_name' =>  $request->owner_comp_name,
                'country' => $request->owner_country,
                'city' => $request->owner_city,
                'name' => $request->owner_name,
                'owner_mobile' => $request->owner_mobile,
                'service' => $request->owner_service,
                'status' => 2,
                'username' => $request->username,
                'password' => Hash::make($request->owner_password),
            ]);
            if($result){
                $return  = array('status'=>1, 'msg'=> 'Single owner added successfully');
            } else {
                $return  = array('status'=>0, 'msg'=> 'Something Wrong please try again');
            }
            echo json_encode($return);
        } 
        protected function create(array $data)  {
            
        }
    }
