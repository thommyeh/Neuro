<!-- include libraries(jQuery, bootstrap) -->
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css" />
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>

<!-- include summernote css/js-->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>
@foreach($articles as $article)

{{Form::open(['route' => ['Content', $article->id]])}}
{{ Form::text('title', $article->title) }}
{{ Form::textarea('content', $article->content, ['id' => 'summernote']) }}
{{Form::submit('Click Me!')}}
{{Form::close()}}
@endforeach


<script>
    $(document).ready(function() {
  $('#summernote').summernote();
});
</script>
