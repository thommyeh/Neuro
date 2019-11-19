<!DOCTYPE HTML>
<html>
  <head>
    <title>Interface neuronale</title>
    <meta name="description" content="website description" />
    <meta name="keywords" content="website keywords, website keywords" />
    <script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous">
    </script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bulma.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
  </head>
  <body>
    <section class="hero is-info is-medium has-text-white-bis" id="bar">
      <!-- Hero head: will stick at the top -->
      <div class="hero-head">
        <nav class="navbar">
          <div class="container">
            <div class="navbar-brand">
              <div class="dropdown is-hoverable is-boxed">
                <div class="dropdown-trigger">
                  <button class="button" aria-haspopup="true" aria-controls="dropdown-menu4" id="account">
                    <span>Espace personnel</span>
                    <span class="icon is-small"><i class="fas fa-angle-down" aria-hidden="true"></i></span>
                  </button>
                </div>
                <div class="dropdown-menu is-boxed" id="dropdown-menu4" role="menu">
                  <div class="dropdown-content has-background-grey-dark">


                    @guest
                    <div class="dropdown-item">
                      <a class="has-text-light"  href="/login">Se connecter</a>
                    </div>
                    @if (Route::has('register'))
                    <div class="dropdown-item">
                      <a class="has-text-light" href="/register">Créer un compte</a>
                    </div>
                    @endif
                    @else
                    <div class="dropdown-item">
                        <a class="has-text-light" href="/profil">Votre compte</a>
                      </div>
                      <div class="dropdown-item">
                        <a class="has-text-light" href="/logout">Se déconnecter</a>
                      </div>
                      @endguest
                  </div>
                </div>
              </div>
              <span class="navbar-burger burger" data-target="navbarMenuHeroA">
                <span></span>
                <span></span>
                <span></span>
              </span>
            </div>
            <div id="navbarMenuHeroA" class="navbar-menu">
              <div class="navbar-end">
                <a class="navbar-item" href="{{route('home')}}">Accueil</a>
                <a class="navbar-item" href="{{route('allArticles')}}">Articles</a>
                <a href="{{route('allMolecules')}}" class="navbar-item">Molécules/Neurones</a>
                <a href="{{route('allLineaments')}}" class="navbar-item">Traits de personnalités</a>
                <a class="navbar-item">Contactez nous</a>
              </div>
            </div>
          </div>
        </nav>
      </div>
      <!-- Hero content: will be in the middle -->
      <div class="hero-body">
        <div class="container has-text-centered">
          <h1 class="title">Interface Neuronale</h1>
          <h2 class="subtitle has-text-white">“Un cerveau bien soigné ne se fatigue jamais.”</h2>
        </div>
      </div>
      <!-- Hero footer: will stick at the bottom -->
      <div class="hero-foot"></div>
    </section>




    <section class="main-content columns is-fullheight has-background-white-ter">
    @yield('content')
      <!-- Rendering of the Sidebar via the MenuAction, so it can be easily implemented on every pages -->
      <aside class="column is-3 is-narrow-mobile is-fullheight section is-hidden-mobile">
        <ul class="menu-list">
          <li>
            <a href="#" class="is-active has-background-link">
              <span class="icon"><i class="fa fa-home"></i></span>
               Recherche
            </a>
            <ul>
              <li>
                    <form action="{{route('search')}}" method="post" class="form-example">
                            @csrf
                            <div class="form-example">

                              <input type="text" name="search" id="search">
                            </div>


                            </div>
                          </form>
            </li>
            </ul>
          </li>
          <li>
            <a href="#" class="is-active has-background-link">
              <span class="icon"><i class="fa fa-table"></i></span>
               Derniers articles
            </a>
            <ul>
              <li>
                @foreach($sorted as $article)
                <p>
                  <a href="{{ route('show_article', [ 'id'=> $article->id ]) }}">{{$article->title}}</a>
                </p>
                @endforeach
              </li>
            </ul>
          </li>
          <li>
            <a href="#" class="is-active has-background-link">
              <span class="icon"><i class="fa fa-info"></i></span>
               Catégories
            </a>
            <ul>
              <li>
               @foreach($categories as $cate)
                <a class="nav-link" href="{{ route('show_category', [ 'key'=> $cate->title ]) }}">{{$cate->title}}</a>
             @endforeach
            </li>
            </ul>
          </li>
        </ul>
      </aside>
    </section>

    <footer class="footer has-background-grey-darker" id="ft">
      <div class="level">
        <div class="level-left">
          <div class="level-item">
            <a class="has-text-light" href="">Accueil</a>
          </div>
          <div class="level-item">
            <div class="level-item"></div>
            <div class="level-item"></div>
            <div class="level-item"></div>
            <div class="level-item"></div>
            <div class="level-item"></div>
            <div class="level-item"></div>
            <div class="level-item"></div>
            <div class="level-item"></div>
            <div class="level-item"></div>
            <div class="level-item"></div>
            <div class="level-item"></div>
            <div class="level-item"></div>
            <div class="level-item"></div>
            <div class="level-item"></div>
            <div class="level-item"></div>
            <div class="level-item"></div>
            <div class="level-item"></div>
            <div class="level-item"></div>
            <div class="level-item"></div>
            <div class="level-item"></div>
            <div class="level-item"></div>
            <div class="level-item"></div>
            <div class="level-item"></div>
            <a class="has-text-light" href=""> Articles</a>
          </div>
        </div>
        <div class="level-right">

          <div class="level-item">
            <a class="has-text-light" href="">Molécules/Neurones</a>
          </div>
          <div class="level-item">
            <div class="level-item"></div>
            <div class="level-item"></div>
            <div class="level-item"></div>
            <div class="level-item"></div>
            <div class="level-item"></div>
            <div class="level-item"></div>
            <div class="level-item"></div>
            <div class="level-item"></div>
            <div class="level-item"></div>
            <div class="level-item"></div>
            <div class="level-item"></div>
            <div class="level-item"></div>
            <div class="level-item"></div>
            <div class="level-item"></div>
            <div class="level-item"></div>
            <div class="level-item"></div>
            <div class="level-item"></div>
            <div class="level-item"></div>
            <div class="level-item"></div>
            <div class="level-item"></div>
            <div class="level-item"></div>
            <div class="level-item"></div>
            <div class="level-item"></div>
            <div class="level-item"></div>
            <a class="has-text-light" href=""> Traits de personnalités</a>
          </div>
        </div>
      </div>
      <div id="foot1">
<div>
        <p class="has-text-white has-text-centered" id="text-foot">
          <strong class="has-text-white has-text-weight-normal is-size-6">Interface neuronale</strong>
           par
          <a href="https://jgthms.com">Heym Thomas</a>
        </p>
      </div>
<div>
          <p class="has-text-white has-text-centered" id="text-foot1">
        <a href="" target="_blank">Mentions légales</a>
      </p>
    </div>
      </div>
    </footer>

     <script>

</script>
    <script src="{{ asset('js/bulma.js') }}"></script>
     <script src="{{ asset('js/ind.js') }}"></script>

  </body>
</html>

