@extends('layout.app')
@section('content')
<div class="container column is-8">
	<section class="section">
		<h1 class="title" id="titles">Molécules et neurones</h1>
		<div class="box has-background-white-bis">
			 @foreach($molecules as $vf)
			<div class="box has-background-link">
				<h1 class="title" id="titles"><a class="has-text-light" href="{{ route('show_molecule', [ 'id'=> $vf->id ]) }}">{{$vf->Designation}}</a></h1>
				<div class="box has-background-white">
					<strong><p>Articles liés:</p></strong>
				 @foreach($vf->articles as $article)
					<p>
						<a href="{{route('show_article', ['id' => $article->id])}}">{{$article->Title}}</a>
					</p>
					@endforeach
				</div>
				<div class="box has-background-white">
					<strong><p>Traits de personnalités liés:</p></strong>

                         @foreach($vf->lineaments as $traits)
                         <p>
                        <a href="{{ route('show_lineament', [ 'id'=> $traits->id ]) }}">{{$traits->Designation}} </a>
                    </p>
						@endforeach

				</div>
			</div>
			@endforeach
		</div>
	</section>
</div>

@endsection
