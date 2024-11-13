<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use APP\Models\User;

use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
public function index()

    {
        if (Auth::id())
    {
        $usertype=Auth()->user()->usertype;
        if($usertype=='user')
    {
    return view('User.Userdashboard');

    }
    else if($usertype=='admin')
    {
    return view('layouts.admindashboard');

    }
    else if($usertype=='dosen')
    {

    return view('dosen.dosendashboard');
    }
    else
    {
        return redirect()->back();
    }

}

    }
    public function post()
    {
        return view("post");
    }
}


