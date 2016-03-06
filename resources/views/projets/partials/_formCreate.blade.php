<div class="form-group" style="margin-top: 15px;">
	{!! Form::label('nom', 'Nom :') !!}
	{!! Form::text('nom', Input::old('nom'), array('class' => 'form-control', 'required' => 'required')) !!}
</div>

<div class="form-group" style="margin-top: 35px;">
	{!! Form::submit($submit_text, ['class'=>'btn btn-primary']) !!}
	<a class="btn btn-warning" href="{{ route('projets.index') }}">Annuler</a>
</div>
