<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        echo "This is contact page<br>";
        echo "
        <form action='/contact-us' method='post'>
        <input type='hidden' name='_token' value='7b4T9ZQXXKI61Lx0X0rkSS1P3R5atn6YmiKkCwgP'>
        <input type=submit value='Contact Us'>
        </form>";
    }

    public function store(Request $request){
        echo "<a href='https://www.educastudio.com/contact-us'>Contact Us</a>";
    }
}
