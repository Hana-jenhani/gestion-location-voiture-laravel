@extends('layouts.main')
@section('content')
<div class="row">
  <div class="col-lg-12 margin-tb">
   <div class="pull-left">
   <h2> Add a new etudiant </h2>
   </div>
   
   
    <div class="pull-right">

      </div>
      </div>
</div>
   @if ($errors->any())
      <div class="alert alert-danger">
      <ul>
      @foreach($errors->all() as $error)
      <li>{{ $error }} </li>
      @endforeach
      </ul>
      </div>

    @endif

    <div class="row">
    <form action="{{ route('client.update',$client->id) }}" method="POST">
  @csrf

  <div class="col-sm-8">

  <div class="left">
  <strong>CIN</strong>
  <input type="text" name="cin" class="form-control" value="{{ $client->cin }}" placeholder="CIN">
  </div>


  <div class="left">
  <strong>NOM</strong>
  <input type="text" name="nom" class="form-control" value="{{ $client->nom }}" placeholder="NOM"></textarea>
  </div>

  <div class="left">
  <strong>PRENOM</strong>
  <input type="text" name="prenom" class="form-control" value="{{ $client->prenom }}" placeholder="PRENOM"></textarea>
  </div>

  <div class="left">
  <strong>DateNaissance</strong>
  <input type="text" name="datenaissance" class="form-control" value="{{ $client->datenaissance }}" placeholder="DateNaissance"></textarea>
  </div>

  <div class="left">
  <strong>Addresse</strong>
  <input type="text" name="address" class="form-control" value="{{ $client->adresse }}" placeholder="Address"></textarea>
  </div>

  <div class="left">
  <strong>Ville</strong>
  <input type="text" name="ville" class="form-control" value="{{ $client->ville }}" placeholder="ville"></textarea>
  </div>


  <div class="left">
  <strong>Code postale</strong>
  <input type="text" name="codepostale" class="form-control" value="{{ $client->codepostale }}" placeholder="codepostale"></textarea>
  </div>


  <div class="left">
  <strong>TEL</strong>
  <input type="text" name="tel" class="form-control" value="{{ $client->tel }}" placeholder="TEL"></textarea>
  </div>




</br>
<div class="left">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</form>
</div>
@endsection