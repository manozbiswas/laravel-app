<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    /**
     * @return view pages.home
     */
    public function index()
    {
        return view('pages.home');
    }

    /**
     * @return view page.about
     */
    public function about()
    {
        return view('pages.about');
    }

    /**
     * @return return view pages.contact
     */
    public function contact()
    {
        return view('pages.contact');
    }
}
