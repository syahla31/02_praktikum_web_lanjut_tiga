<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function games(){
        echo'
        <h1>Games</h1>
        <ul>
            <a href="https://www.educastudio.com/category/marbel-edu-games">Marble Edu Games</a>
        </ul>
        <ul>
            <a href="https://www.educastudio.com/category/marbel-and-friends-kids-games">Marbel And Friends Kids Games</a>
        </ul>
        ';
    }

    public function books(){
        return redirect()->to('https://www.educastudio.com/category/riri-story-books');
    }

    public function songs(){
        return redirect()->to('https://www.educastudio.com/category/kolak-kids-songs');
    }
}
