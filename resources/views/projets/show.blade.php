@extends('app')

@section('titre')
Projet {!! $projet->nom !!}
@stop

@section('contenu')
<ul class="breadcrumb">
	<li><a href="{!! route('projets.index') !!}">Projets</a></li>
	<li class="active">Projet {{ $projet->nom }}</li>
</ul>

<h3>Liste des tâches du projet <span class="text-primary">{{ $projet->nom }}</span></h3>

<p style="margin-top: 20px;">
	<a class="btn btn-info" href="{{ route('projets.index') }}"><i class="fa fa-chevron-left"></i></a>
	<a class="btn btn-success" href="{{ route('projets.taches.create', ['id' => $projet->id]) }}"><span class="fa fa-plus"></span></a>
	<a class="btn btn-primary" href="{{ route('projets.edit', ['id' => $projet->id]) }}"><span class="fa fa-edit"></span></a>
	<a style="float: right" class="btn btn-info" href="#"><span class="fa fa-trash"></span> Tâches terminées</a>
</p>
@if ( !$projet->taches->count() )
<div class="panel panel-warning" style="margin-top: 40px;">
	<div class="panel-heading">
		<h3 class="panel-title">Aucune tâche non terminée</h3>
	</div>
	<div class="panel-body">
		Il n'y a aucune tâche non terminée pour ce projet ! Contactez le support si c'est une erreur.
	</div>
</div>
@else
<div class="panel panel-default">
	<div class="panel-body">
		<?php
		$nombre_taches = $projet->taches->count();
		if ($nombre_taches == 1)
			echo "<p>Il y a 1 tâche au total</p>";
		else
			echo "<p>Il y a $nombre_taches tâches au total</p>";
		?>
		<div class="table-responsive">
			<table class="table table-hover table-bordered">
				<thead>
					<tr>
						<th style="font-size: 11px;">NOM DE LA TÂCHE</th>
						<th style="font-size: 11px;" class="hidden-sm hidden-xs">DESCRIPTION</th>
						<th style="font-size: 11px;">DATE DE FIN <i class="fa fa-caret-down"</i></th>
						<th style="font-size: 11px;">ETAT</th>
						<th style="width: 5%;"></th>
					</tr>
				</thead>
				<tbody>
					@foreach( $projet->taches as $tache )
					<?php
					if ($tache->termine)
						$tache_termine = "Terminée";
					else $tache_termine = "Non terminée";

					$finTacheDate = date("d/m/Y", strtotime($tache->dateFinTache));
					?>
					<tr>
						<td style="vertical-align: middle;">{!! $tache->nom !!}</td>
						<td style="vertical-align: middle;" class="hidden-sm hidden-xs">{!! $tache->description !!}</td>
						<td style="vertical-align: middle;">{!! $finTacheDate !!}</td>
						<td style="vertical-align: middle;">{!! $tache_termine !!}</td>
						<td style="text-align: center; width: 5%;">
							<a href="{{ route('projets.taches.show', array($projet->id, $tache->id)) }}" role="button" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endif
@stop
