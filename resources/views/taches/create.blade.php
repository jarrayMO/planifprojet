@extends('app')

@section('titre')
Création d'une tâche pour le projet {{ $projet->nom }}
@stop

@section('contenu')
<ul class="breadcrumb">
	<li><a href="{!! route('projets.index') !!}">Projets</a></li>
	<li><a href="{{ route('projets.show', ['id' => $projet->id]) }}">{!! $projet->nom !!}</a></li>
	<li class="active">Création de tâche pour le projet {!! $projet->nom !!}</li>
</ul>

<h3>Création d'une tâche pour le projet <span class="text-primary">{{ $projet->nom }}</span></h3>

<div class="panel panel-default">
	<div class="panel-body">
		{!! Form::model(new App\Tache, ['route' => ['projets.taches.store', $projet->id], 'class'=>'']) !!}
		@include('taches/partials/_formCreate', ['submit_text' => 'Créer une tâche'])
		{!! Form::close() !!}
	</div>
</div>
@stop
