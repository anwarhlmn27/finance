<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function list_beli(){
        $data = 'title';
        return view('dashboard.data_pembelian',compact('data'));
    }

    public function login(){        
        return view('auth.login');
    }

    public function resetpw(){
        return view('auth.resetpw');
    }

    public function recoverypw(){
        return view('auth.recoverypw');
    }

    public function soon(){
        return view('soon');
    }
}
