@extends('layout.app')

@section('content')
<div class="container column is-8">
    <section class="section">
        <div class="box">
            <h1 class="title" id="titles">Pourquoi Interface Neuronale?</h1>
            <p>
                <img src="{{ asset('img/logo6.jpg') }}" id="logo5">
            </p>
            <br>
            <p>
                L’OMS désigne les troubles neurologiques comme étant le problème de santé majeur auquel l’humanité devra
                faire face au 21ème siècle. Il reste de nombreuses lacunes a combler dans la compréhension que nous
                avons de ces processus, mais nous en savons déjà suffisamment pour pouvoir efficacement agir sur leur
                mécanismes, a condition d’en être suffisamment bien informé. Le “health monitoring”, les conseils
                d’hygiène de vie au quotidien etc… sont une tendance grandissante au sein de nos sociétés, mais la
                dimension neurologique qui accompagne tous ces phénomènes est encore trop souvent largement sous-estimé.
            </p>
            <br>
            <p>
                L’information a ce sujet est encore fragmentée, souvent perçu comme trop pointue pour être vraiment
                accessible, et les sites d’informations consistent, la plupart du temps, en un assemblages peu intuitif
                d’articles de presse spécialisés.
            </p>
            <br>
            <img src="{{ asset('img/8.gif') }}" id="gif">
            <p>
                L’objectif d’Interface neuronale est de fournir un site web de vulgarisation scientifique sur la
                neurologie qui soit aussi intuitif et accessible que possible, en permettant a l’utilisateur de trouver
                un point d’entrée sur le sujet basé sur des situation concrètes et des préoccupations du quotidien, pour
                ensuite pouvoir, via une interface intuitive et un système d’associations clair et immédiatement
                compréhensible, explorer le sujet plus en profondeur afin d’en comprendre tous les mécanismes, et
                surtout toutes les conséquences.
            </p>
        </div>
        <div class="box">
            <p>
                <h3 class="title" id="titles">Dernières actualités liées a la neurologie</h3>
            </p>
            <br>

            <p id="liens">
                @foreach($links as $liens)

                <a href='{{$liens->url}}'>{{$liens->title}}</a>
            </p>
            @endforeach
        </div>
    </section>
</div>
@endsection
