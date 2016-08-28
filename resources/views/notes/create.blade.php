
@extends('layout')

@section('content')

<div class="section no-pad-bot" id="index-banner">
  <div class="container">
    <br><br>
    <h1 class="header center orange-text">Crear una nota</h1>
    
    <div class="row center">
      @include ('notes/_form')
    </div>
    <br><br>

  </div>
</div>



@endsection