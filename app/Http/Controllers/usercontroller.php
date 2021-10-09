<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usercontroller extends Controller
{
    public function home()
    {
        
        return view("home");
    }

    public function loginPage()
    {
        $er="";
        return view("pages.login")->with('data',$er);
    }
    public function loginSubmit(Request $request)
    {
        $validate=$request->validate([

             'username'=>'required',
             'password'=>'required'
        ],
        [
            'username.required'=>'Username required!',
            'password.required'=>'Password required!'
        ]
        
        );
        $username=$request->name;
        $password=$request->password;
        $user="";
        $data="";
        $result="ok";
        $er="";

        $data=["Ayon"=>"12345","Rafiq"=>"12345",];
            foreach ($data as $key => $value) {
                if($username==$key && $password==$value )
                {
    
                    $user=$username;
                    return view("pages.userview",['user'=>$user]);
                    
                    

                }
                else {
                    $data="<h1>Login was successful</h1>";
                }

              
            }
            if ($result==$data) {
                $er="user name or password not match";
                return view("pages.login")->with('data',$er);
            }
        
        
        
    }


    public function registrationPage(){
        return view('pages.registration');
    }
    public function registrationSubmit(Request $request){
        
        $validate = $request->validate([
                'firstname'=>'required|min:5',
                'lastname'=>'required|min:2',
                'username'=>'required',
                'email'=>'required|email',
                'dob'=>'required',
                'address'=>'required|min:5',
                'password'=>'required|min:5',
                'cpassword'=>'required|min:5',
                              
            ],
            [
                'firstname.required'=>'First Name Required!',
                'firstname.min'=>'First name must have more than 5 charcters',
                'lastname.required'=>'Last Name Required',
                'lastname.min'=>'Last name must have more than 1 charcters',
                'username'=>'Username Required!',
                'email.required'=>'Email Required!',
                'email.email'=>'Email is not valid!',
                'dob.required'=>'Please put your date of birth',
                'address.required'=>'address required!',
                'address.min'=>'Address must have more than 4 charcters',
                'password.required'=>'Password required!',
                'password.min'=>'Pass must have more than 4 charcters',
                'cpassword.required'=>'Password required!',
                'cpassword.min'=>'Pass must have more than 4 charcters',
            
               


            ]
        );
        

        return "<h1>Registration was successful</h1>";      
    }
    public function contactPage()
    {
        return view('pages.contact');
    }

    public function contactSubmit(Request $request){
        
        $validate = $request->validate([
                'username'=>'required|min:5|max:10',
                'address'=>'required',
                'email'=>'required',
                'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/'
                
            ],
            [
                'username.required'=>'Name Required!',
                'username.min'=>'Name must have more 5 char',
                'username.max'=>'Name must be smaller than 10 charcters',
                'address.required'=>'Address requiredd!',
                'email.required'=>'Email required!',
                'phone.required'=>'Phone Number required!',
                'phone.regex'=>'Phone number must be numbers'
            ]
        );
        

        return "<h1>Information was submitted succesfully</h1>";      
    }
}
