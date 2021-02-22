<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        echo "Halaman Artikel dengan Id " . $id;
    }

    public function news()
    {
        return redirect('https://www.educastudio.com/news');
    }

    public function newsString($String)
    {
        return redirect('https://www.educastudio.com/news/'.$String);
    }
}
