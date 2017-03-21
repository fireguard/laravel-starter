<?php

namespace App\Http\Controllers;


use App\Forms\Example\ExampleForm;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('manager.home');
    }

    public function form()
    {
        $form = ExampleForm::create();

        return view('manager.form')->with(compact('form'));
    }
}
