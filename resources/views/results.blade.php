@extends('layout.app')
<h1>Recherche</h1>
@section('content')
<div class="container column is-8">
	<section class="section">
		<h1 class="title" id="titles">Résultats de votre recherche</h1>
		 @foreach($articles as $vf)
		<div class="box has-background-link">
			<h1 class="title" id="titles"><a class="has-text-white-ter" href="{{ route('show_article', [ 'id'=> $vf->id ]) }}">{{$vf->title}}</a></h1>
		</div>
		@endforeach @foreach($molecules as $vf)
		<div class="box has-background-info">
			<h1 class="title" id="titles"><a class="has-text-white-ter" href="{{ route('show_molecule', [ 'id'=> $vf->id ]) }}">{{$vf->title}}</a></h1>
		</div>
		@endforeach @foreach($lineaments as $vf)
		<div class="box has-background-primary">
			<h1 class="title" id="titles"><a class="has-text-white-ter" href="{{ route('show_lineament', [ 'id'=> $vf->id ]) }}">{{$vf->title}}</a></h1>
		</div>
		@endforeach
	</section>
</div>

@endsection
