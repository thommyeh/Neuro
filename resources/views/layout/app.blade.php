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
                   
                    <div class="dropdown-item">
                      <a class="has-text-light" href="">Votre compte</a>
                    </div>
                    <div class="dropdown-item">
                      <a class="has-text-light" href="">Se déconnecter</a>
                    </div>
                   
                    <div class="dropdown-item">
                      <a class="has-text-light"  href="/login">Se connecter</a>
                    </div>
                    <div class="dropdown-item">
                      <a class="has-text-light" href="/register">Créer un compte</a>
                    </div>
                    
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
                <a class="navbar-item is-active" href="">Accueil</a>
                <a class="navbar-item" href="">Articles</a>
                <a href="" class="navbar-item">Molécules/Neurones</a>
                <a href="" class="navbar-item">Traits de personnalités</a>
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
{% endblock %} 
  </body>
</html>

