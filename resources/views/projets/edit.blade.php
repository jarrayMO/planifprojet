@extends('app')

@section('titre')
Modification du projet {!! $projet->nom !!}
@stop

@section('contenu')
<ul class="breadcrumb">
	<li><a href="{!! route('projets.index') !!}">Projets</a></li>
	<li><a href="{{ route('projets.show', ['id' => $projet->id]) }}">{!! $projet->nom !!}</a></li>
	<li class="active">Modification du projet {!! $projet->nom !!}</li>
</ul>

<h3>Modification du projet <span class="text-primary">{!! $projet->nom !!}</span></h3>
<div class="panel panel-default">
	<div class="panel-body">
		{!! Form::model($projet, ['method' => 'PATCH', 'route' => ['projets.update', $projet->id]]) !!}
		@include('projets/partials/_formEdit', ['submit_text' => 'Modifier le projet'])
		{!! Form::close() !!}

		{!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('projets.destroy', $projet->id))) !!}
		<a href="#deleteProjet" role="button" class="btn btn-danger" data-toggle="modal">Supprimer</a>
		@include('projets.modal')
		{!! Form::close() !!}
	</div>
</div>
@stop
