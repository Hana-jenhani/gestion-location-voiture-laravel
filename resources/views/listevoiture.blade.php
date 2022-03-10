@extends('layouts.main')
@section('content')



<br><br><br><br><br>


<div class="jumbotron text-center">
  <h1>Liste des voitures</h1>
 <div class="float-right">
    <a href="{{ route('createvoiture')}}" class='btn btn-primary'>Ajouter Voiture</a>
 </div>
</div><br><br>


<div class="main">
<form action="/search" method="get">
  <div class="input-group">
    <input type="text" class="form-control" placeholder="Search ">
    <div class="input-group-append">
      <button class="btn btn-secondary" type="button">
        <i class="fa fa-search"></i>
      </button>
    </div>
    </form>
  </div>
  
 
  
</div><br><br>
  
<div class="container">

@if(session()->has('status'))
  <div class="alert alert-success">
    {{session()->get('status')}}
  <button class="close" data-dismiss='alert'>X</button>
  </div>
@endif



<table class="table">
  <tr>
    
    <td>Matricule</td>
      <td>Type</td>
      <td>Modele</td>
      <td>Couleur</td>
      <td>Photo</td>
      <td>Options</td>
  </tr>
 
  @foreach($voitures as $voiture)
<tr>
    <td>{{ $voiture->matricule }}</td>
    <td>{{ $voiture->type }}</td>
    <td>{{ $voiture->modele }}</td>
    <td>{{ $voiture->couleur }}</td>
  
  <td> <img src="{{ $voiture->photo }}" class="img responsive" height=100 width=100></td>
      <td><a href="" class='btn btn-warning'>Edit</a></td>
      
        <td>
        <form action="{{ route('voiture.destroy', $voiture->id)}}" method="post">
        @csrf
        @method('DELETE')
        
          <input type="submit" value='delete' class='btn btn-delete'>
        </form>
        
        </td>
  </tr>
@endforeach

</table>
  
</div>

</body>
</html>
















@endsection