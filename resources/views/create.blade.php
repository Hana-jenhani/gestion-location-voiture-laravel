@extends('layouts.main')
@section('content')


<div class="row">
  <div class="col-lg-12 margin-tb">
   <div class="pull-right">
   <h2> Ajouter Un Client </h2>
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
    <form action="{{ route('client.store') }}" method="POST">
  @csrf

  <div class="col-sm-8"><br><br><br><br>

  <div class="right">
  <strong>CIN</strong>
  <input type="text" name="cin" class="form-control" placeholder="CIN">
  </div>


  <div class="left" align="center">
  <strong>Nom</strong>
  <input  type="text"  name="nom" class="form-control" placeholder="Nom"></textarea>
  </div>

  <div class="left">
  <strong>Prenom</strong>
  <input type="text" name="prenom" class="form-control" placeholder="Prenom"></textarea>
  </div>

  <div class="left">
  <strong>DateNaissance</strong>
  <input type="text" name="datenaissance" class="form-control" placeholder="DateNaissance"></textarea>
  </div>

  <div class="left">
  <strong>Adresse</strong>
  <input type="text" name="adresse" class="form-control" placeholder="Adresse"></textarea>
  </div>

  <div class="left">
  <strong>Ville</strong>
  <input type="text" name="ville" class="form-control" placeholder="Ville"></textarea>
  </div>

  <div class="left">
  <strong>Code postale</strong>
  <input type="text" name="codepostale" class="form-control" placeholder="codepostale"></textarea>
  </div>

  <div class="left">
  <strong>Tel</strong>
  <input type="text" name="tel" class="form-control" placeholder="Tel"></textarea>
  </div><br>


</br>
<div class="left">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</form>
</div>

















@endsection