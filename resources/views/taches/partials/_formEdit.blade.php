<div class="form-group" style="margin-top: 15px;">
	{!! Form::label('nom', 'Nom :') !!}
	{!! Form::text('nom', Input::old('nom'), array('class' => 'form-control', 'required' => 'required')) !!}
</div>

<div class="form-group" style="margin-top: 35px;">
	{!! Form::label('description', 'Description :') !!}
	{!! Form::textarea('description', null, ['size' => '0x0', 'class' => 'form-control']) !!}
</div>


<p style="margin-top: 35px;">La tâche est-elle terminée ?</p>
<div class="checkbox" style="margin-top: 5px;">
	@if ($tache->termine == 1)
	<?php $checkedTermine = "checked"; ?>
	@else
	<?php $checkedTermine = ""; ?>
	@endif
	<label for="termine">
		<input id='termineHidden' class="checkbox" type='hidden' value='0' name='termine'>
		<input id="termine" class="checkbox" type="checkbox" value="1" name='termine' <?php echo $checkedTermine ?>>
	</label>
</div>

<div class="form-group" style="margin-top: 35px;">
	{!! Form::submit($submit_text, ['class'=>'btn btn-primary']) !!}
	{!! link_to_route('projets.show', 'Annuler', array($projet->id), array('class' => 'btn btn-warning')) !!}
</div>
