<!-- include libraries(jQuery, bootstrap) -->
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css" />
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>

<!-- include summernote css/js-->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>

<form method="post" action="{{route('create')}}">
    @csrf
    <h1>Titre</h1>
    <p>
        <input type="text" name="title">
    </p>
    <p>


            <select name="type" id="type">
                <option value="">type de contenu</option>
                <option value="article">Article</option>
                <option value="molecule">Molécule</option>
                <option value="trait">Trait de personnalité</option>
                <option value="lien">Lien</option>
                <option value="cate">Categorie</option>
            </select>
    </p>
    <p>
        <h1>Ajouter des liaisons</h1>
<h2>Molecules</h2>
@foreach($molecules as $molecule)
<div>
        <input type="checkbox" name="molecule[]" value="{{$molecule->id}}"
               >
        <label for="molecule">{{$molecule->title}}</label>
      </div>
      @endforeach
<h2>Articles</h2>
@foreach($articles as $article)
<div>
        <input type="checkbox" name="article" value="{{$article->id}}"
               >
        <label for="article">{{$article->title}}</label>
      </div>
      @endforeach
<h2>Traits de personnlités</h2>
@foreach($lineaments as $lineament)
<div>
        <input type="checkbox" name="lineament" value="{{$lineament->id}}"
               >
        <label for="lineament">{{$lineament->title}}</label>
      </div>
      @endforeach
<h2>Catégories</h2>
@foreach($categories as $category)
<div>
        <input type="checkbox" name="category" value="{{$category->id}}"
               >
        <label for="category">{{$category->title}}</label>
      </div>
      @endforeach
<h2>Liens</h2>
@foreach($links as $link)
<div>
        <input type="checkbox" name="link" value="{{$link->id}}"
               >
        <label for="link">{{$link->title}}</label>
      </div>
      @endforeach

    </p>
        <textarea id="summernote" name="content"></textarea>
    </p>
        <button type="submit">Envoyer</button>
      </form>



<script>
    $(document).ready(function() {
  $('#summernote').summernote();
});
</script>
