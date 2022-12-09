<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {

        return view('user.index_user', [
            "title" => "Home_user"
        ]);
    }

    public function about()
    {

        return view('user.about_user', [
            "title" => "about-user"
        ]);
    }
    public function page_bank()
    {

        return view('user.page-market-user', [
            "title" => "page_bank-user"
        ]);
    }

    public function page_location()
    {
        return view('user.page-location-user', [
            "title" => "page_location-user"
        ]);
    }
    public function contact()
    {

        return view('user.contact-user', [
            "title" => "contact-user"
        ]);
    }
}
