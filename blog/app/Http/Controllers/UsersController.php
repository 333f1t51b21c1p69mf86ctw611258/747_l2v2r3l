<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class UsersController extends Controller
{
    

    /**
     * Get all favorite posts by user
     *
     * @return Response
     */
    public function myFavorites()
    {
        $myFavorites = Auth::user()->favorites;

        return view('users.my_favorites', compact('myFavorites'));
    }
}
