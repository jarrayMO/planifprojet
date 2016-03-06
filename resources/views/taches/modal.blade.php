<div id="deleteTache" class="modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Suppression d'une tâche</h4>
      </div>
      <div class="modal-body">
        <p>Voulez-vous vraiment supprimer la tâche <span class="text-primary">{!! $tache->nom !!}</span> du projet <span class="text-primary">{!! $projet->nom !!}</span> ?</p>
      </div>
      <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Non</button>
        {!! Form::submit('Oui', array('class' => 'btn btn-primary')) !!}
      </div>
    </div>
  </div>
</div>
