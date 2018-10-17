<?php

    namespace App\Http\Controllers\Auth;

    use App\Transporter;
    use App\Country;
    use App\Http\Controllers\Controller;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Support\Facades\Validator;
    use Illuminate\Foundation\Auth\RegistersUsers;
    use Mail;
    class RegisterController extends Controller {
        
        use RegistersUsers;
        protected $redirectTo = '/home';
        public function __construct()  {
           // $this->middleware('guest');
        }
        protected function validator(array $data)  {
           return Validator::make($data, [
                'comp_name' => 'required|string|max:255',
                'country' => 'required|string|max:255',
                'city' => 'required|string|max:255',
                'transporter_name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:transporters',
                'mobile' => 'required|string|max:25',
                'designation' => 'required|string|max:255',
                'vehicle_type' => 'required',
                'no_of_vehicle'=> 'required',
                'service' => 'required',
                'brokerage' => 'required',
                'service' => 'required|string|max:255',
                'brokerage' => 'required|string|max:255',
                'transport_username' => 'required|string|max:255|unique:transporters',
                'transport_password' => 'required|string|min:6|same:confirm_transport_password',
            ]);
        } 
        protected function create(array $data)  {
            $result =  Transporter::create([
                'comp_name' =>  $data['comp_name'],
                'country' => $data['country'],
                'city' => $data['city'],
                'transporter_name' => $data['transporter_name'],
                'email' => $data['email'],
                'mobile' => $data['mobile'],
                'designation' => $data['designation'],
                'vehicle_type' => implode(",", $data['vehicle_type']),
                'no_of_vehicle' => implode(",", array_filter($data['no_of_vehicle'])),
                'service' => $data['service'],
                'brokerage' => $data['brokerage'],
                'status' => 2,
                'transport_username' => $data['transport_username'],
                'password' => Hash::make($data['transport_password']),
            ]);
            if($result){
                $this->sendMail($result->id);
                $return  = array('status'=>1, 'msg'=> 'Transporter added successfully', 'id'=>$result->id);
            } else {
                $return  = array('status'=>0, 'msg'=> 'Something Wrong please try again');
            }
            echo json_encode($return);
        } 
        public function sendMail($id){
            //5bc4a93e8865f0244c0074ec
            if ($id) {
                $res = Transporter::find($id) ;
                $message = '';
                Mail::send('email.verification-mail',array('name'=>$res->transporter_name,'email'=>$res->email,'userId'=>$id),function($message) use ($res){
                    $message->to($res->email)->subject("Verify your email account");
                    $message->from("ravi.teastall22@gmail.com","Ravi Tss");
                });
            }

        }
    }
