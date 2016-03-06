@extends('app')

@section('titre')
Modification de la tâche {{ $tache->nom }} du projet {{ $projet->nom }}
@stop

@section('contenu')
<ul class="breadcrumb">
	<li><a href="{!! route('projets.index') !!}">Projets</a></li>
	<li><a href="{{ route('projets.show', ['id' => $projet->id]) }}">{!! $projet->nom !!}</a></li>
	<li class="active">Modification de la tâche {{ $tache->nom }} du projet {!! $projet->nom !!}</li>
</ul>

<h3>Modification de la tâche <span class="text-primary">{{ $tache->nom }}</span> du projet <span class="text-primary">{{ $projet->nom }}</span></h3>
<div class="panel panel-default">
	<div class="panel-body">
		{!! Form::model($tache, ['method' => 'PATCH', 'route' => ['projets.taches.update', $projet->id, $tache->id]]) !!}
		@include('taches/partials/_formEdit', ['submit_text' => 'Modifier la tâche'])
		{!! Form::close() !!}

		{!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('projets.taches.destroy', $projet->id, $tache->id))) !!}
		<a href="#deleteTache" role="button" class="btn btn-danger" data-toggle="modal">Supprimer</a>
		@include('taches.modal')
		{!! Form::close() !!}
	</div>
</div>
@stop
