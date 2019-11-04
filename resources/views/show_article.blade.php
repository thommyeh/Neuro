@extends('layout.app')
@section('content')


<div class="container column is-8">
  <section class="section">
    @foreach($article as $art)
    <p>
      <h1 class="title" id="titles">{{$art->Title}}</h1>
    </p>
     @endforeach
    <div class="level">
      <div class="level-left">
        <div class="level-item" id="labels">
          <p>
            <strong>Catégories</strong>
          </p>
          @foreach($article as $art)
          @foreach($art->categories as $cate)
          <p>
            <a href="{{ route('show_category', [ 'key'=> $cate->Title ]) }}">{{$cate->Title}}</a>
          </p>
            @endforeach
            @endforeach
        </div>
        <div class="level-item" id="responsive-upbar"></div>
        <div class="level-item" id="responsive-upbar"></div>
        <div class="level-item" id="responsive-upbar"></div>
        <div class="level-item" id="responsive-upbar"></div>
        <div class="level-item" id="responsive-upbar"></div>
        <div class="level-item" id="responsive-upbar"></div>
        <div class="level-item" id="responsive-upbar"></div>
        <div class="level-item" id="responsive-upbar"></div>
        <div class="level-item" id="responsive-upbar"></div>
        <div class="level-item" id="responsive-upbar"></div>
        <div class="level-item" id="responsive-upbar"></div>
        <div class="level-item" id="responsive-upbar"></div>
        <div class="level-item" id="responsive-upbar"></div>
        <div class="level-item" id="responsive-upbar"></div>
        <div class="level-item" id="responsive-upbar"></div>
        <div class="level-item" id="labels">
          <p>
            <strong>Molécules/Neurones associés</strong>
          </p>
            @foreach($article as $vi)
           @foreach($vi->molecules as $molecule)

          <p>
            <a href="{{ route('show_molecule', [ 'id'=> $molecule->id ]) }}">{{$molecule->Designation}}</a>
          </p>
         @endforeach
         @endforeach
        </div>
      </div>
      <div class="level-right">
        <div class="level-item" id="labels">
          <p>
            <strong>Effets associés</strong>
          </p>
           @foreach($article as $vg)
           @foreach($vg->poslineaments as $lin)
          <p>
            <a class="has-text-light" id="green" href="{{ route('show_lineament', [ 'id'=> $lin->id ]) }}">{{$lin->Designation}}</a>
          </p>
          @endforeach
          @endforeach

           @foreach($article as $vg)
          @foreach($vg->neglineaments as $lin)
          <p>
            <a class="has-text-light" id="red" href="{{ route('show_lineament', [ 'id'=> $lin->id ]) }}">{{$lin->Designation}}</a>
          </p>
         @endforeach
         @endforeach


        </div>
      </div>
    </div>
    <div class="box">
      <section class="section">
        <p>
            @foreach($article as $vf)


            {!! $vf->Content !!}

          @endforeach
        </p>
      </section>
    </div>
    <div class="box">
      <section class="section">
        <h2 class="title" id="titles">Pour en savoir plus</h2>
        @foreach($article as $ve)
        @foreach($ve->links as $link)
        <p>
          <a href="{{ $link->Url}}">{{$link->Title}}</a>
        </p>
       @endforeach
       @endforeach
      </section>
    </div>
    <div class="box has-background-grey-dark">
      <section class="section">
        <h2 class="title has-text-white" id="titles">Commentaires</h2>
           @foreach($article as $arti)
        <div class="box has-background-grey-light">
            @foreach($arti->comments as $comment)
          <div class="box has-background-grey-lighter">
            <strong id="titles">{{$comment->user}}, le {{$comment->Datec}} </strong>
            <div id="coms" class="box has-background-white-ter">
              <p id="coms">
                 {{ $comment->Content }}
              </p>
            </div>
          </div>
          @endforeach
        </div>
        @endforeach
      </section>
    </div>
    @auth
     @foreach($article as $article_id)
    <form action="{{route('post_comment', [ 'id'=> $article_id->id ])}}" method="POST">
        @csrf

            <textarea id="content" name="content" cols="87" rows="5" style="line-height: 105%">Ecrivez ici votre commentaire</textarea>
            <button type="submit" class="button is-link">Envoyer</button>
          </form>
          @endforeach
          @endauth

          @guest
             <p>Vous devez être connecté pour pouvoir poster un commentaire</p>
          @endguest
  </section>

</div>



@endsection
