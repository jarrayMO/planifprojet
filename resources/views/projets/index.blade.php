@extends('app')

@section('titre')
Liste des projets
@stop

@section('contenu')
<h3>Liste des projets</h3>

@if ( !$projets->count() )
<div class="panel panel-warning" style="margin-top: 40px;">
	<div class="panel-heading">
		<h3 class="panel-title">Aucun projet</h3>
	</div>
	<div class="panel-body">
		Il n'y a aucun projet ! Contactez le support si c'est une erreur.
	</div>
</div>
@else
<div class="panel panel-default">
	<div class="panel-body">
		<p>
			<a class="btn btn-success" href="{!! route('projets.create') !!}" title="Cliquez pour créer un projet">Créer un projet</a>
		</p>
		<div class="table-responsive">
			<table class="table table-hover table-bordered">
				<thead>
					<tr>
						<th style="font-size: 11px; width: 4%;" class="hidden-sm hidden-xs">ID</th>
						<th style="font-size: 11px;">NOM</th>
						<th style="font-size: 11px;" class="hidden-sm hidden-xs">NOMBRE DE TÂCHES</th>
						<th style="font-size: 11px;">DATE DE FIN <i class="fa fa-caret-down"</i></th>
						<th style="width: 90px;"></th>
					</tr>
				</thead>
				<tbody>
					@foreach( $projets as $projet )
					<?php
					$finProjetDate = date("d/m/Y", strtotime($projet->dateFinProj));
					?>
					<tr>
						<td class="hidden-sm hidden-xs" style="width: 4%;">{!! $projet->id !!}</td>
						<td>{!! $projet->nom !!}</td>
						<td class="hidden-sm hidden-xs">{!! $projet->taches->count() !!}</td>
						<td>{!! $finProjetDate !!}</td>
						<td style="width: 90px;">
							<a href="{{ route('projets.show', $projet->id) }}" role="button" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
							<a href="{{ route('projets.edit', $projet->id) }}" role="button" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
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
