<?php

namespace App\Http\Controllers;


use App\Models\User;

class UsersController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $users = User::orderBy('id', 'desc')->paginate(10);

        return view('manager.users.index')->with(compact('users'));
    }

    public function create()
    {
        return view('manager.users.add');
    }

    public function store(\Request $request)
    {
        $user = User::create($request->all());
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('manager.users.edit')->with(compact('user'));
    }

    public function update($id, \Request $request)
    {
        $user = User::find($id);
        $user->fill($request->all());
        $user->save();
        return view('manager.users.edit')->with(compact('user'));
    }
}
