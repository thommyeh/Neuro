@extends('layout.app')
@section('content')

@foreach($lineament as $art)

@if($art->comments_count < 2)
<a href='#coms' class="button is-primary" id="com">{{$art->comments_count}} commentaire</a>
@else
<a href='#coms' class="button is-primary" id="com">{{$art->comments_count}} commentaires</a>
@endif

@endforeach

<div class="container column is-8">
  <section class="section">
     @foreach($lineament as $vf)
    <h1 class="title" id="titles">{{$vf->title}}</h1>
     @endforeach
    <div class="level">

            <div class="level-left">
                    <div class="level-item"></div>
                    <div class="level-item"></div>
                    <div class="level-item"></div>
                    <div class="level-item"></div>
                    <div class="level-item"></div>
                    <div class="level-item"></div>
                    <div class="level-item"></div>
                    <div class="level-item"></div>
                <div class="level-item" id="labels">

        <div class="dropdown is-hoverable">
                <div class="dropdown-trigger">
                  <button class="button is-info" aria-haspopup="true" aria-controls="dropdown-menu4">
                    <span ><strong>Articles associés</strong></span>
                    <span class="icon is-small">
                      <i class="fas fa-angle-down" aria-hidden="true"></i>
                    </span>
                  </button>
                </div>
                <div class="dropdown-menu" id="dropdown-menu6" role="menu">
                  <div class="dropdown-content has-background-white">
                    <div class="dropdown-item">
                            @foreach($lineament as $article)
                            @foreach($article->articles as $titre)
                           <a class="nav-link has-text-grey-dark is-family-primary has-text-weight-semibold is-size-6" href="{{ route('show_article', [ 'id'=> $titre->id ]) }}">{{$titre->title}}</a>
                      <hr class="dropdown-divider">
                      @endforeach
                      @endforeach
                    </div>
                  </div>
                </div>
              </div>
        </div>
              </div>


              <div class="level-right">
                    <div class="level-item" id="labels">

            <div class="dropdown is-hoverable">
                    <div class="dropdown-trigger">
                      <button class="button is-info" aria-haspopup="true" aria-controls="dropdown-menu4">
                        <span ><strong>Molécules associées</strong></span>
                        <span class="icon is-small">
                          <i class="fas fa-angle-down" aria-hidden="true"></i>
                        </span>
                      </button>
                    </div>
                    <div class="dropdown-menu" id="dropdown-menu5" role="menu">
                      <div class="dropdown-content has-background-white">
                        <div class="dropdown-item">
                                @foreach($lineament as $trait)
                                @foreach($trait->molecules as $des)

                               <a class="nav-link has-text-grey-dark is-family-primary has-text-weight-semibold is-size-6" href="{{ route('show_molecule', [ 'id'=> $des->id ]) }}">{{$des->title}}</a>
                          <hr class="dropdown-divider">
                          @endforeach
                          @endforeach
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="level-item"></div>
                        <div class="level-item"></div>
                        <div class="level-item"></div>
                        <div class="level-item"></div>
                        <div class="level-item"></div>
                        <div class="level-item"></div>
                        <div class="level-item"></div>
                        <div class="level-item"></div>
                  </div>

                </div>

























    <div class="box">
      <section class="section">
         @foreach($lineament as $vf)
        <p>
          {!! $vf->content !!}
        </p>
        @endforeach
      </section>
    </div>
    <div class="box">
      <section class="section">
        <h2 class="title" id="titles">Pour en savoir plus</h2>
           @foreach($lineament as $vf)
           @foreach($vf->links as $link)

        <p>
          <a href="{{ $link->url}}">{{$link->title}}</a>
        </p>
        @endforeach
        @endforeach
      </section>
    </div>

<div id="coms">
      <section class="section" id="formu">
        <h2 class="title" id="titles">Commentaires</h2>
        @foreach($lineament as $comment)
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
     @foreach($lineament as $lineament_id)
    <form action="{{route('post_comment', [ 'id'=> $lineament_id->id ])}}" method="POST">
        @csrf

            <textarea id="content" name="content" -model="content" cols="87" rows="5" style="line-height: 105%"></textarea>
            <input type="hidden" name="type" value="lineament">
            <button type="submit" class="button is-link" id="combutton">Envoyer</button>
          </form>
          @endforeach
          @endauth

          @guest
             <p>Vous devez être connecté pour pouvoir poster un commentaire</p>
          @endguest
  </section>

</div>

@endsection
