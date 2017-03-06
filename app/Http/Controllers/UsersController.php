<?php

namespace App\Http\Controllers;


use App\Models\User;

class UsersController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('id', 'desc')->paginate(10);

        return view('manager.users.index')->with(compact('users'));
    }
}
