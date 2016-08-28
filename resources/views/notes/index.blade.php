
@extends('layout')

@section('content')

<div class="section no-pad-bot" id="index-banner">
  <div class="container">
    <br><br>
    <h1 class="header center orange-text">Motrar todas la notas</h1>
    <div class="row center">
      <a href="{{url('notas/create')}}" id="download-button" class="btn-large waves-effect waves-light orange">add note</a>
    </div>
    <br><br>

  </div>
</div>

<div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">

        @foreach ($notes as $note)
		
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">flash_on</i></h2>
            <h5 class="center">{{$note->title}}</h5>
            <p class="light">{{$note->note}}</p>
            <p>
              <div class="chip">
                {{$note->categoria->name}} 
                <i class="close material-icons">close</i>
            </div>
            </p>
          </div>
        </div>

        @endforeach


    </div>

    <div class="row">
        {!! $notes->render() !!}
    </div>
    <br><br>

    <div class="section">

    </div>
  </div>
</div>

@endsection