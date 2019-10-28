@extends('layout.app')
@section('content')
<div class="container column is-8">
	<section class="section">
		<h1 class="title" id="titles">Tous les traits de personnalités</h1>
		<div class="box has-background-white-bis">
			@foreach($lineaments as $vf)
			<div class="box has-background-link">
				<h1 class="title" id="titles">
					<a class="has-text-white-ter" href="{{ route('show_lineament', [ 'id'=> $vf->id ]) }}">{{$vf->Designation}}</a>
				</h1>
				<div class="box has-background-white">
					<strong><p>Articles liés:</p></strong>
					@foreach($vf->articles as $article)
					<p>
						<a href="{{route('show_article', ['id' => $article->id])}}">{{$article->Title}}</a>
					</p>
					@endforeach
				</div>
				<div class="box has-background-white">
					<strong><p>Molécules/Neurones liés:</p></strong>
					<p>
                         @foreach($vf->molecules as $traits)
                         <P>
						<a href="{{route('show_molecule', ['id' => $traits->id])}}">{{$traits->Designation}} </a>
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
