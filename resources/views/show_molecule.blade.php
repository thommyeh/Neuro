@extends('layout.app')
@section('content')
<div class="container column is-8">
  <section class="section">
     @foreach($molecule as $vf)
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
                    @foreach($molecule as $article)
                    @foreach($article->articles as $titre)
              <p><a class="nav-link has-text-grey-dark is-family-primary has-text-weight-semibold is-size-6" href="{{ route('show_article', [ 'id'=> $titre->id ]) }}">{{$titre->title}}</a></p>
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
            <span ><strong>Effets associés</strong></span>
            <span class="icon is-small">
              <i class="fas fa-angle-down" aria-hidden="true"></i>
            </span>
          </button>
        </div>
        <div class="dropdown-menu" id="dropdown-menu5" role="menu">
          <div class="dropdown-content has-background-white">
            <div class="dropdown-item">
                @foreach($molecule as $trait)
                @foreach($trait->lineaments as $des)
              <p><a class="nav-link has-text-grey-dark is-family-primary has-text-weight-semibold is-size-6" href="{{ route('show_lineament', [ 'id'=> $des->id ]) }}">{{$des->title}}</a></p>
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
         @foreach($molecule as $vf)
        <p>
          {!! $vf->content !!}
        </p>
        @endforeach
      </section>
    </div>
    <div class="box">
      <section class="section">
        <h2 class="title" id="titles">Pour en savoir plus</h2>
           @foreach($molecule as $vf)
           @foreach($vf->links as $link)

        <p>
          <a href="{{ $link->url}}">{{$link->title}}</a>
        </p>
        @endforeach
        @endforeach
      </section>
    </div>
  </section>
</div>

@endsection
