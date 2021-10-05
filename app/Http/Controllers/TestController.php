<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{
    public function index(){
        if(Auth::check()){
       /*   dd('okey'); */
        }
       /*   dd('what'); */
         
     return view('/gate');

    }
    
    public function createfunction(){
        User::create([
            'name'=> 'trt',
            'email'=> 'trt@gmail.com',
            'password'=>'trt123',
            'role'=>1,
        ]);

        return 'kayit basari ile eklendi';
    }
}
