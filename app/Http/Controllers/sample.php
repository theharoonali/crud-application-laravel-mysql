<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\User;
use Session;


class sample extends Controller
{
    public function index(){
        $url = url('/home');
        if(Session::has('LoggedUser')){
            $daata = User::where('id','=', Session::get('LoggedUser'))->first();
            $title = "Customer Form!";
            $obj = array("","","","","","");
            $data = compact('daata','title','obj','url');
            return view('welcome')->with($data);
        }else{
        $title = "Customer Form!";
        $obj = array("","","","","","");
        $data = compact('title','url','obj');
        return view('welcome')->with($data);}
    }
    public function view(){
        if(Session::has('LoggedUser')){
            $customer = Customer::all();
            $daata = User::where('id','=', Session::get('LoggedUser'))->first();
            $data = compact('daata','customer');
            return view('view')->with($data);
        }else{
            return redirect('/');
        }
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

       return redirect('/home');
    }
    public function delete($id){
        Customer::find($id)->delete();
        return redirect()->back();
    }
    public function edit($id){
        if(Session::has('LoggedUser')){
            $daata = User::where('id','=', Session::get('LoggedUser'))->first();
            $title = "Update Customer Form!";
            $customer = Customer::find($id);
            $url = url('/view/update').'/'.$id;    
            $obj = array($customer->firstname,$customer->lastname,$customer->email,$customer->phoneno,$customer->comments,$customer->gender);
            $data = compact('daata','obj','url','title');
            return view('welcome')->with($data);
        }else{
            return redirect('home');
        }

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
