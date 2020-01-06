<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Comment;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
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

    public function EditProfil($request)
    {
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

    public function postComment(Request $request, $id)
    {
        $user = Auth::user();

        if ($request->input('type') == 'article') {
            $article_id = $id;
            $comment = new Comment();
            $comment->content = $request->input('content');
            $comment->article_id = $article_id;
            $comment->user_id = $user->id;
            $comment->save();
            return redirect()->route('show_article', ['id' => $id]);
        }

        if ($request->input('type') == 'molecule') {
            $molecule_id = $id;
            $comment = new Comment();
            $comment->content = $request->input('content');
            $comment->molecule_id = $molecule_id;
            $comment->user_id = $user->id;
            $comment->save();
            return redirect()->route('show_molecule', ['id' => $id]);
        }

        if ($request->input('type') == 'lineament') {
            $lineament_id = $id;
            $comment = new Comment();
            $comment->content = $request->input('content');
            $comment->lineament_id = $lineament_id;
            $comment->user_id = $user->id;
            $comment->save();
            return redirect()->route('show_lineament', ['id' => $id]);
        } else {
            return;
        }
    }
}
