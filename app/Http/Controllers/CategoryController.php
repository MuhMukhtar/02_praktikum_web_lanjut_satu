<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function marbeledugames()
    {
        return redirect('https://www.educastudio.com/category/marbel-edu-games/');
    }

    public function marbelfriends()
    {
        return redirect('https://www.educastudio.com/category/marbel-and-friends-kids-games');
    }

    public function riri()
    {
        return redirect('https://www.educastudio.com/category/riri-story-books');
    }

    public function kolak()
    {
        return redirect('https://www.educastudio.com/category/kolak-kids-songs');
    }
}
