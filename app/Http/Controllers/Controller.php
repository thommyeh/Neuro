<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UrlRequest;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Link;
use App\Article;
use App\Molecule;
use App\Lineament;
use App\Category;
use App\Comment;
use App\User;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function home(){

        $links = Link::orderBy('created_at', 'desc')->take(5)->get();


        return View('welcome', ['links' => $links]);
    }

    public function allArticles(){

        $articles = Article::all();


        return View('articles', ['articles' => $articles]);
    }

    public function allMolecules(){

        $molecules = Molecule::all();


        return View('molecules', ['molecules' => $molecules]);
    }

    public function allLineaments(){

        $lineaments = Lineament::all();

        return View('lineaments', ['lineaments' => $lineaments]);
    }

    public function showArticle($id){

        $article = Article::where('id', $id)->get();



        return View('show_article', [ 'article' => $article]);


    }

    public function showMolecule($id){

        $molecule = Molecule::where('id', $id)->get();



        return View('show_molecule', [ 'molecule' => $molecule]);


    }

    public function showLineament($id){

        $lineament = Lineament::where('id', $id)->get();



        return View('show_lineament', [ 'lineament' => $lineament]);


    }

    public function showCategory($key){

        $category = Category::where('Title', $key)->get();



        return View('show_category', [ 'category' => $category, 'titre' => $key]);


    }

    public function search(){

        $key = request('search');

        $articles = Article::where('Title', 'like', '%' . $key . '%')->get();
        $molecules = Molecule::where('Designation', 'like', '%' . $key . '%')->get();
        $lineaments = Lineament::where('Designation', 'like', '%' . $key . '%')->get();





        return View('results', [ 'articles' => $articles, 'molecules' => $molecules, 'lineaments' => $lineaments]);


    }

    public function postComment(Request $request, $id){

        $user = Auth::user();
        $article_id = $id;

        $comment = new Comment();
        $comment->Content = $request->input('content');
        $comment->article = $article_id;
        $comment->user = $user->id;
        $comment->Datec = now();
        $comment->save();








        return View('show_article', [ 'article' => $article_id]);


    }
}

