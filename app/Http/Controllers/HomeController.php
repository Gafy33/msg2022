<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Response;
use Chatify\Http\Models\Message;
use Chatify\Http\Models\Favorite;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return redirect()->route(config('chatify.path'));
    }

    public function store(request $request)
    {
        //$file = $request->file('file');
        
        $user = User::find($request->id);

        $user->delete();
        return "supprimer";

    }


    public function favorite_dl(request $request)
    {
        //$file = $request->file('file');
        
        $favorite = Favorite::find($request->id);

        $favorite->delete();
        return "supprimer";

    }

    /*
    $rest = substr($request->id, 0, 8);   // retourne "f"
        if($rest == "https://")
            {
                $url = '<a href="' . $request->id . '">' . $request->id . '</a>'; 
            }
        else 
        {
            $rest = \substr($request->id, 0, 7);
            if($rest == "http://")
                {
                    $url = '<a href="' . $request->id . '">' . $request->id . '</a>'; 
                } else
                {
                    $url = $request->id; 
                }
        }

        return $url;
        */


}
