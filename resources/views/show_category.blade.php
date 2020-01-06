@extends('layout.app')
@section('content')
<div class="container column is-8">
    <section class="section">
        <h1 class="title" id="titles">Articles de la catégorie {{$titre}}</h1>
        @foreach($category as $article)
        @foreach($article->article as $title)
        <div class="box has-background-link">
            <h1 class="title" id="titles"><a class="nav-link has-text-white-ter"
                    href="{{ route('show_article', [ 'id'=> $title->id ]) }}">{{$title->title}}</a></h1>
        </div>
        @endforeach
        @endforeach
    </section>
</div>

@endsection
