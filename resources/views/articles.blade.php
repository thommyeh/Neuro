@extends('layout.app')
@section('content')
<div class="container column is-8">
    <section class="section">
        <h1 class="title" id="titles">Tous les articles</h1>
        <div class="box has-background-white-bis">
            @foreach($articles as $article)
            <div class="box has-background-link">
                <h1 class="title" id="titles"><a class="has-text-light"
                        href="{{route('show_article', ['id' => $article->id])}}">{{$article->title}}</a></h1>
                <div class="box has-background-white">
                    <strong>
                        <p>Molécules/Neurones liés</p>
                    </strong>
                    @foreach($article->molecules as $neuro)
                    <p>
                        <a href="{{ route('show_molecule', [ 'id'=> $neuro->id ]) }}">{{$neuro->Designation}}</a>
                    </p>
                    @endforeach
                </div>
                <div class="box has-background-white">
                    <strong>
                        <p>Traits de personnalités liés</p>
                    </strong>
                    <p>
                        @foreach($article->lineaments as $traits)
                        <p>
                            <a href="{{ route('show_lineament', [ 'id'=> $traits->id ]) }}">{{$traits->Designation}}
                            </a>
                        </p>
                        @endforeach

                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</div>

@endsection
