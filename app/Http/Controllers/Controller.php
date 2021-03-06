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


    public function list(){

        $articles = Article::all();

        return View('list', ['articles' => $articles]);
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

        $article = Article::where('id', $id)->withCount('comments')->get();
        $com = Comment::where('article_id', $id)->paginate(3);



        return View('show_article', [ 'article' => $article, 'com' => $com]);


    }

    public function showMolecule($id){

        $molecule = Molecule::where('id', $id)->withCount('comments')->get();



        return View('show_molecule', [ 'molecule' => $molecule]);


    }

    public function showLineament($id){

        $lineament = Lineament::where('id', $id)->withCount('comments')->get();



        return View('show_lineament', [ 'lineament' => $lineament]);


    }

    public function showCategory($key){

        $category = Category::where('title', $key)->get();



        return View('show_category', [ 'category' => $category, 'titre' => $key]);


    }

    public function search(){

        $key = request('search');

        $articles = Article::where('title', 'like', '%' . $key . '%')->get();
        $molecules = Molecule::where('title', 'like', '%' . $key . '%')->get();
        $lineaments = Lineament::where('title', 'like', '%' . $key . '%')->get();





        return View('results', [ 'articles' => $articles, 'molecules' => $molecules, 'lineaments' => $lineaments]);


    }

    public function postComment(Request $request, $id){

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
        }

        else{
            return;
        }











    }
}

