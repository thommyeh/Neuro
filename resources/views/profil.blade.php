

      @extends('layout.app')

      @section('content')

      <div class="container column is-8">
      <div class="card">
        <header class="card-header has-background-link">
            <p class="card-header-title has-text-light">
               Profil
            </p>
        </header>


        <div class="card-content">
            <div class="col-md-offset-2 col-md-7 ProfileStyleDroite">
                {!! Form::open(['route' => 'edit', 'ng-submit' => "addprofil()", 'enctype' => "multipart/form-data"]) !!}
                <div class="form-group">
                   <p>{!! Form::label('name', "Nom d'utilisateur") !!}</p>
                   {!! Form::text('name', null, ['class' => 'form-control InputProfile', 'placeholder'=> $name, 'ng-model'=>"newProfil"]) !!}
                </div>
                <div class="form-group">
                  <p> {!! Form::label('email', 'Adresse e-mail') !!}</p>
                   {!! Form::text('email', null, ['class' => 'form-control InputProfile', 'placeholder'=> $email]) !!}
                </div>

                <p>
                   {!! Form::submit('Editer', ['class' => 'button is-info btn btn-primary buttonBleu', 'id' => 'boutonedit']) !!}
                </p>
                {!! Form::close() !!}

             </div>
        </div>


        <footer class="card-footer">

        </footer>

    </div>
      </div>
   @endsection

