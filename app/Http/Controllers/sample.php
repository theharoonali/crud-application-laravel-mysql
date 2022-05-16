<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class sample extends Controller
{
    public function index(){
        $url = url('/');
        $title = "Customer Form!";
        $obj = array("","","","","","");
        $data = compact('title','url','obj');
        return view('welcome')->with($data);
    }
    public function view(){
        $customer = Customer::all();
        $data = compact('customer');
        return view('view')->with($data);
    }
    public function create(Request $req){
        $req->validate(
            [
                'FirstName' => 'required',
                'LastName' => 'required',
                'Email' => 'required|email'
            ]
            );

        $customer = new Customer;
        $customer->firstname = $req['FirstName'];
       $customer->lastname = $req['LastName'];
       $customer->email = $req['Email'];
       $customer->phoneno = $req['PhoneNo'];
       $customer->comments = $req['Comments'];
       $customer->gender = $req['Gender'];
       $customer->save();

       return redirect('/view');
    }
    public function delete($id){
        Customer::find($id)->delete();
        return redirect()->back();
    }
    public function edit($id){
        $customer = Customer::find($id);
        $title = "Update Customer Form!";
        $url = url('/view/update').'/'.$id;
        $obj = array($customer->firstname,$customer->lastname,$customer->email,$customer->phoneno,$customer->comments,$customer->gender);
        $data = compact('obj','url','title');
        return view('welcome')->with($data);
    }
    public function update($id, Request $req){
        $customer = Customer::find($id);
        $customer->firstname = $req['FirstName'];
        $customer->lastname = $req['LastName'];
        $customer->email = $req['Email'];
        $customer->phoneno = $req['PhoneNo'];
        $customer->comments = $req['Comments'];
        $customer->gender = $req['Gender'];
        $customer->save();

        return redirect('view');
    }
}
