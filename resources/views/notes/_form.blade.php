<form class="col s12" method="POST" action="{{ url('notas') }}">
  <div class="row">
    <div class="col l4 offset-l4">
      @include('../partials/_errors')
    </div>
    <div class="input-field col s12">
          <input placeholder="title" id="first_name" type="text" class="validate" name='title'>
          <label for="first_name">Titulo de la nota</label>
        </div>
    <div class="input-field col s12">
      <textarea id="textarea1" class="materialize-textarea" name="note">{{old('note')}}</textarea>
      <label for="textarea1">note</label>
      {{ csrf_field() }} 
    </div>
    <div class="input-field col s12">
      <button class="btn waves-effect waves-light" type="submit" name="action">create note
	    <i class="material-icons right">send</i>
	  </button>
    </div>
  </div>
</form>