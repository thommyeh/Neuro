@extends('layout.app')
@section('content')

@foreach($article as $art)

@if($art->comments_count < 2)
<a href='#coms' class="button is-primary" id="com">{{$art->comments_count}} commentaire</a>
@else
<a href='#coms' class="button is-primary" id="com">{{$art->comments_count}} commentaires</a>
@endif

@endforeach
<div class="container column is-8">
  <section class="section">

    @foreach($article as $art)




    <p>
      <h1 class="title" id="titles">{{$art->title}}</h1>

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
            <a href="{{ route('show_category', [ 'key'=> $cate->Title ]) }}">{{$cate->title}}</a>
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
            <a href="{{ route('show_molecule', [ 'id'=> $molecule->id ]) }}">{{$molecule->title}}</a>
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
          @foreach($vg->lineaments as $lin)
          <p>
            <a href="{{ route('show_lineament', [ 'id'=> $lin->id ]) }}">{{$lin->title}}</a>
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


            {!! $vf->content !!}

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
          <a href="{{ $link->Url}}">{{$link->title}}</a>
        </p>
       @endforeach
       @endforeach
      </section>
    </div>
<div id="coms">
      <section class="section" id="formu">
        <h2 class="title" id="titles">Commentaires</h2>
        @foreach($article as $comment)
        @foreach($comment->comments as $comments)
        <div class="box">
            <article class="media">
              <div class="media-left">
                <figure class="image is-64x64">
                  <img src="https://bulma.io/images/placeholders/128x128.png" alt="Image">
                </figure>
              </div>
              <div class="media-content">
                <div class="content">
                  <p>
                    <strong>{{$comments->user->name}}</strong> <small>le</small> <small>{{$comments->created_at}}</small>
                    <br>
                    {{$comments->content}}
                  </p>
                </div>
                <nav class="level is-mobile">
                  <div class="level-left">
                    <a class="level-item" aria-label="reply">
                      <span class="icon is-small">
                        <i class="fas fa-reply" aria-hidden="true"></i>
                      </span>
                    </a>
                    <a class="level-item" aria-label="retweet">
                      <span class="icon is-small">
                        <i class="fas fa-retweet" aria-hidden="true"></i>
                      </span>
                    </a>
                    <a class="level-item" aria-label="like">
                      <span class="icon is-small">
                        <i class="fas fa-heart" aria-hidden="true"></i>
                      </span>
                    </a>
                  </div>
                </nav>
              </div>
            </article>
          </div>




        @endforeach
       @endforeach
      </section>
    </div>

    @auth
     @foreach($article as $article_id)
    <form action="{{route('post_comment', [ 'id'=> $article_id->id ])}}" method="POST">
        @csrf

            <textarea id="content" name="content" -model="content" cols="87" rows="5" style="line-height: 105%"></textarea>
            <button type="submit" class="button is-link" id="combutton">Envoyer</button>
          </form>
          @endforeach
          @endauth

          @guest
             <p>Vous devez être connecté pour pouvoir poster un commentaire</p>
          @endguest
  </section>
  <div class="list is-hoverable">
        <a class="list-item">
          Featured
        </a>
        <a class="list-item">
          All Posts
        </a>
        <a class="list-item is-active">
          Announcements
        </a>
        <a class="list-item">
          Business
        </a>
        <a class="list-item">
          Community
        </a>
        <a class="list-item">
          Data
        </a>
        <a class="list-item">
          Editor Tools
        </a>
        <a class="list-item">
          Education
        </a>
        <a class="list-item">
          Engineering
        </a>
        <a class="list-item">
          Events
        </a>
        <a class="list-item">
          Policy
        </a>
      </div>
</div>



@endsection
