@foreach ($articles as $article)
<a href="{{route('editpage', [ 'id'=> $article->id ])}}">{{$article->title}}</a>
@endforeach
