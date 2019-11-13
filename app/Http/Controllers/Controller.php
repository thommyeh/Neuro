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

    public function admin(){



        return View('admin');
    }

    public function create(){

        $molecules = Molecule::all();
        $articles = Article::all();
        $lineaments = Lineament::all();
        $categories = Category::all();
        $links = Link::all();


        return View('create_article', ['molecules' => $molecules, 'articles' => $articles, 'lineaments' => $lineaments, 'categories' => $categories, 'links' => $links] );
    }

    public function list(){

        $articles = Article::all();

        return View('list', ['articles' => $articles]);
    }

    public function edit($id){

        $articles = Article::where('id', $id)->get();

        return View('edit', ['articles' => $articles]);
    }

    public function createArticle(Request $request){

        $title = $request->input('title');
        $content = $request->input('content');


        if ($request->input('type') == 'article') {
            var_dump($request->input('molecule'));
            die();
            $data = new Article();
            $data->title = $title;
            $data->content = $content;
            $data->save();
            if ($request->input('molecule') != NULL) {
                $molecule = Molecule::find($request->input('molecule'));
                $data->molecules()->attach($molecule);
            }
            if ($request->input('article') != NULL) {
                $article = Article::find($request->input('article'));
                $data->artcles()->attach($article);
            }




        }
        if ($request->input('type') == 'molecule') {
            $data = new Molecule();
            $data->title = $title;
            $data->content = $content;
            $data->save();
        }
        if ($request->input('type') == 'trait') {
            $data = new Lineament();
            $data->title = $title;
            $data->content = $content;
            $data->save();
        }

        if ($request->input('type') == 'lien') {
            $data = new Link();
            $data->title = $title;
            $data->url = $content;
            $data->save();
        }

        if ($request->input('type') == 'cate') {
            $data = new Category();
            $data->title = $title;
            $data->save();
        }





        return View('admin');
    }

    public function editContent(Request $request, $id){


        $title = $request->input('title');
        $content = $request->input('content');

        $data = Article::where('id', $id)->first();
        $data->title = $title;
        $data->content = $content;
        $data->save();








        return View('home');
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

