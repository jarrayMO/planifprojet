<div class="form-group" style="margin-top: 15px;">
	{!! Form::label('nom', 'Nom :') !!}
	{!! Form::text('nom', Input::old('nom'), array('class' => 'form-control', 'required' => 'required')) !!}
</div>

<div class="form-group" style="margin-top: 35px;">
	{!! Form::submit($submit_text, ['class'=>'btn btn-primary']) !!}
	{!! link_to_route('projets.show', 'Annuler', array($projet->id), array('class' => 'btn btn-warning')) !!}
</div>
