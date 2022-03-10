@extends('layouts.main')
@section('content')

<br><br><br>
<div class="jumbotron text-center">
  <h1>Ajout voiture </h1>
 <div class="float-right">
    <a href='' class='btn btn-primary'>Back</a>
 </div>
</div>
  
<div class="container">

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif




<form action="{{ route('voiture.store')}}" method='POST' enctype='multipart/form-data'>
@csrf
<div class="form-group">
<label for="">Matricule</label>
<input type="text" class='form-control' name='matricule'>
</div>

<div class="form-group">
<label for="">Type</label>
<input type="text" class='form-control' name='type'>
</div>

<div class="form-group">
<label for="">Modele</label>
<input type="text" class='form-control' name='modele'>
</div>

<div class="form-group">
<label for="">Couleur</label>
<input type="text" class='form-control' name='couleur'>
</div>

<div class="form-group">
<label for="">Image</label>
<input type="file" class='form-control' name='photo'>
</div>


<div class="form-group">
 
<input type="submit" value='Save' class='btn btn-success' >
</div>


</form>
  
</div>















@endsection