<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use Session;

class CustomerController extends Controller
{
    public function showLoginForm(){
        return view('frontEnd.customer.login');
    }
    public function showRegistrationForm(){
        return view('frontEnd.customer.registration');

    }
    public function saveCustomerInfo(Request $request){
        $customer_image = $request->file('customer_image');

        if($customer_image) {
            $imageName = $customer_image->getClientOriginalName();
            $directory = 'customer_images/';
            $imageUrl = $directory.$imageName;
            $customer_image->move($directory, $imageName);
            $customer = new Customer();
            $customer->fullName = $request->fullName;
            $customer->email = $request->email;
            $customer->password = bcrypt($request->password);
            $customer->customer_image = $imageUrl;
            $customer->save();
            return redirect('/user-login');
        }else{
            $customer = new Customer();
            $customer->fullName = $request->fullName;
            $customer->email = $request->email;
            $customer->password = bcrypt($request->password);
            $customer->customer_image = 'https://cdn3.iconfinder.com/data/icons/rcons-user-action/32/boy-512.png';
            $customer->save();
            return redirect('/user-login');
        }

    }
    public function userLogin(Request $request){
        $customerInfo = Customer::where('email', $request->email)->first();
        if($customerInfo){
            $existingPassword = $customerInfo->password;
            if(password_verify($request->password, $existingPassword)){
                Session::put('customerId', $customerInfo->id);
                Session::put('customerName', $customerInfo->fullName);
                return redirect('/');

            }else{
            return redirect('/user-login')->with('message', 'Please use Valid Password.');
            }
        }else{
            return redirect('/user-login')->with('message', 'Please use Valid Email Address To Login.');
        }
    }
    public function userLogout(){
        Session::forget('customerId');
        Session::forget('customerName');
        return redirect('/');

    }
}
