<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about_us(){
        return redirect()->to('https://www.educastudio.com/about-us');
    }
}
