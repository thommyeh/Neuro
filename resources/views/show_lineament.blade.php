@extends('layout.app')
@section('content')
<div class="container column is-8">
  <section class="section">
     @foreach($lineament as $vf)
    <h1 class="title" id="titles">{{$vf->Designation}}</h1>
     @endforeach
    <div class="level">
      <div class="level-left">
        <div class="level-item" id="labels">
          <p>
            <strong>Articles associés</strong>
          </p>
          @foreach($lineament as $article)
           @foreach($article->articles as $titre)
          <a class="nav-link" href="{{ route('show_article', [ 'id'=> $titre->id ]) }}">{{$titre->Title}}</a>
          @endforeach
          @endforeach
        </div>
      </div>
      <div class="level-right">
        <div class="level-item" id="labels">
          <p>
            <strong>Molécules associées</strong>
          </p>
           @foreach($lineament as $trait)
           @foreach($trait->molecules as $des)

          <a class="nav-link" href="{{ route('show_molecule', [ 'id'=> $des->id ]) }}">{{$des->Designation}}</a>
         @endforeach
         @endforeach
        </div>
      </div>
    </div>
    <div class="box">
      <section class="section">
         @foreach($lineament as $vf)
        <p>
          {{$vf->Content}}
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
          <a href="{{ $link->Url}}">{{$link->Title}}</a>
        </p>
        @endforeach
        @endforeach
      </section>
    </div>
  </section>
</div>

@endsection
