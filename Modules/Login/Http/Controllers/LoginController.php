<?php

namespace Modules\Login\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class LoginController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }


    public function index()
    {
        return 'view';
    }

}
