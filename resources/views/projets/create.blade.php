@extends('app')

@section('titre')
Création de projet
@stop

@section('contenu')
<ul class="breadcrumb">
	<li><a href="{!! route('projets.index') !!}">Projets</a></li>
	<li class="active">Création de projet</li>
</ul>

<h3>Création de projet</h3>
<div class="panel panel-default">
	<div class="panel-body">
		{!! Form::model(new App\Projet, ['route' => ['projets.store']]) !!}
		@include('projets/partials/_formCreate', ['submit_text' => 'Créer un projet'])
		{!! Form::close() !!}
	</div>
</div>
@stop
