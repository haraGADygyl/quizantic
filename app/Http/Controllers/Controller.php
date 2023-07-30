<?php

namespace App\Http\Controllers;

use App\Models\Level;
use App\Models\Topic;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function home()
    {
        $topics = Topic::all();
        $levels = Level::all();

        return view('home', compact('topics', 'levels'));
    }
}
