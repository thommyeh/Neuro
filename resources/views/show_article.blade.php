@extends('layout.app')
@section('content')

@foreach($article as $art)

@if($art->comments_count < 2) <a href='#coms' class="button is-primary" id="com">{{$art->comments_count}}
    commentaire</a>
    @else
    <a href='#coms' class="button is-primary" id="com">{{$art->comments_count}} commentaires</a>
    @endif

    @endforeach
    <div class="container column is-8">

        <section class="section">
            <div>

            @foreach($article as $art)

            <p>
                <h1 class="title" id="titles">{{$art->title}}</h1>

            </p>

            @endforeach
            <div class="level">
                <div class="level-left">
                    <div class="level-item" id="labels">

                        <div class="dropdown is-hoverable">
                            <div class="dropdown-trigger">
                                <button class="button is-info" aria-haspopup="true" aria-controls="dropdown-menu4">
                                    <span><strong>Catégories</strong></span>
                                    <span class="icon is-small">
                                        <i class="fas fa-angle-down" aria-hidden="true"></i>
                                    </span>
                                </button>
                            </div>
                            <div class="dropdown-menu " id="dropdown-menu5" role="menu">
                                <div class="dropdown-content has-background-white">
                                    <div class="dropdown-item">
                                        @foreach($article as $art)
                                        @foreach($art->categories as $cate)
                                        <p>
                                            <a class="nav-link has-text-grey-dark is-family-primary has-text-weight-semibold is-size-6"
                                                href="{{ route('show_category', [ 'key'=> $cate->title ]) }}">{{$cate->title}}</a>
                                        </p>
                                        <hr class="dropdown-divider">
                                        @endforeach
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
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

                        <div class="dropdown is-hoverable">
                            <div class="dropdown-trigger">
                                <button class="button is-info" aria-haspopup="true" aria-controls="dropdown-menu4">
                                    <span><strong>Molécules/Neurones associés</strong></span>
                                    <span class="icon is-small">
                                        <i class="fas fa-angle-down" aria-hidden="true"></i>
                                    </span>
                                </button>
                            </div>
                            <div class="dropdown-menu" id="dropdown-menu5" role="menu">
                                <div class="dropdown-content has-background-white">
                                    <div class="dropdown-item">
                                        @foreach($article as $vi)
                                        @foreach($vi->molecules as $molecule)

                                        <p>
                                            <a class="nav-link has-text-grey-dark is-family-primary has-text-weight-semibold is-size-6"
                                                href="{{ route('show_molecule', [ 'id'=> $molecule->id ]) }}">{{$molecule->title}}</a>
                                        </p>
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
                                    <span><strong>Effets associés</strong></span>
                                    <span class="icon is-small">
                                        <i class="fas fa-angle-down" aria-hidden="true"></i>
                                    </span>
                                </button>
                            </div>
                            <div class="dropdown-menu" id="dropdown-menu5" role="menu">
                                <div class="dropdown-content has-background-white">
                                    <div class="dropdown-item">
                                        @foreach($article as $vg)
                                        @foreach($vg->lineaments as $lin)
                                        <p>
                                            <a class="nav-link has-text-grey-dark is-family-primary has-text-weight-semibold is-size-6"
                                                href="{{ route('show_lineament', [ 'id'=> $lin->id ]) }}">{{$lin->title}}</a>
                                        </p>
                                        <hr class="dropdown-divider">
                                        @endforeach
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
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
                    @foreach($com as $comments)

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
                                        <strong>{{$comments->user->name}}</strong> <small>le</small>
                                        <small>{{$comments->created_at}}</small>
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
                    {{ $com->links('vendor.pagination.bulma') }}
                </section>
            </div>

            @auth
            <div id="app">
                @{{message}}
                <div class="has-background-success" v-if='success'>
                    <p class="has-text-white-bis">Votre commentaire a bien été posté</p>
                </div>
            </div>
            @endauth

            @guest
            <p>Vous devez être connecté pour pouvoir poster un commentaire</p>
            @endguest
        </section>

    </div>

        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

        <script src="{{ asset('js/test.js') }}" defer></script>

    @endsection
