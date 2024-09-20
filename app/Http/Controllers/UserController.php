<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function dashboard()
    {
        return view('User.welcome');
    }
    public function vpnshieldpage()
    {
        return view('User.vpnshield');

    }
    public function ttbantivirus()
    {
        return view('User.ttbantivirus');
    }
    public function ttbantivirusnew()
    {
        return view('User.ttbantivirusnew');
    }
    public function contact_aspage()
    {
        return view('User.contact_as');
    }
    public function vpnshield()
    {
        return view('User.vpnshield');
    }
    public function vpnshieldnew()
    {
        return view('User.vpnshieldnew');
    }
    public function totalinternet()
    {
        return view('User.total_internet');
    }
    public function checkout_page()
    {
        return view('User.checkout_page');
    }
    public function commercial_page()
    {
        return view('User.commercial');
    }
    public function about_aspage()
    {
        return view('User.about_as');
    }

 
}
