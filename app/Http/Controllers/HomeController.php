<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UrlRequest;
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
        return view('home');
    }

    public function profil()
    {
        $name = Auth::user()->name;
        $email = Auth::user()->email;

        return View('profil', ['name' => $name, 'email' => $email]);
    }

    public function EditProfil($request) {
        $user = Auth::user();
        if ($request->input('name') != '') {
            $user->name = $request->input('name');
        }

        if ($request->input('email') != '') {
            $user->email = $request->input('email');
        }

        if ($request->input('password') != '') {
            $user->password = bcrypt($request->input('password'));
        }



        $user->save();


}
}
