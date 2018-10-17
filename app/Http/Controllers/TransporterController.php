<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;
use App\Transporter;
class TransporterController extends Controller {
    public function getCountryList(){   
        $countries = DB::table('countries')->pluck('country_name','_id'); 
        foreach($countries as $key=>$vale) {
            $countrylistArr[$key] =$vale;
        }    
        $jsonArr = json_encode($countrylistArr);
        return $jsonArr;   
    }
    public function getCityList(){
        $countryId = $_REQUEST['countryId'];
        $countryName = $_REQUEST['countryName'];
        $cities = DB::table('countries')->where("country_name",$countryName)->get()->toArray(['cities']);
         
        $citylistArr=[];
        foreach($cities as $key=>$vale) {   
            foreach($vale['cities'] as $key2=>$value2) {
                $citylistArr[] = $value2['city_name'];
            }     
        } 
        $jsonArr = json_encode($citylistArr);
        return $jsonArr;
    }
    public function getCountryCode(){
        $countryId = $_REQUEST['countryId'];
        $countryName = $_REQUEST['countryName'];
        
        $countries=DB::table("countries")
            ->where("country_name",$countryName)
            ->select("country_number")
        ->get()->toArray();
        if(count($countries)>0){  //print_r($countries[0]['country_number']);die;
            $country_code=$countries[0]['country_number'];    
        }       
        echo $country_code;
        //print_r($country_code['country_number']);die;
    }
    public function verificationMail($id) {
        $userId = base64_decode($id); 
        $users = Transporter::where('_id', $userId )->first();
        //echo "<pre>"; print_r($users); exit ;
        if(!empty($users) && $users->status !='0'){
            $users->status = 0;
            $users->save();
            $message = "HURRAY!!! WELCOME TO THE WORLD'S FASTEST GROWING TRANSPORTATION ENVIRONMENT. TRUXAI
            REPRESENTATIVE SHALL REACH YOU WITHIN THE NEXT 24 HOURS. TILL THEN,  STAY TUNED.";
        } else {
            $message = "Your account is verified";  
        }
       return view('auth/verification-mail')->with('message', $message);
    }
}
