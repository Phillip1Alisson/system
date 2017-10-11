<?php

namespace Modules\Login\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{


    public function viewLogin()
    {
        return view('login::login');

    }

    public function loginPost(Request $request){

         $email = $request->input('email');
         $senha = $request->input('senha');

        if ( Auth::attempt(['email' => $email, 'password' => $senha]) ) {

            return 'passou';
        }

        return redirect('login')->with('erro', true);
    }

}
