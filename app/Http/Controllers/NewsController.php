<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news($page){
        if ($page = 0){
            return redirect()->to('https://www.educastudio.com/news');
        }else return redirect()->to('https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19');
    }
}
