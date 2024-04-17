<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public  function index() {
        if(Auth::id()){
            $userType=Auth()->user()->userType;
            if ( $userType == 'user'){
                return redirect('dashboard');
        }
        elseif ($userType=='admin'){
            
           return view('admin.adminhome');}
    
        elseif ($userType=='company'){
            
           return view('company.companyhome');
    }
    else{
        return redirect()->back();
    }}
    }
}
