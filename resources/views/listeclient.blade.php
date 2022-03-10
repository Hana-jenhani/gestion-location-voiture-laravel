@extends('layouts.main')
@section('content')

<br><br><br><br><br>
 
      
      <div class="jumbotron text-center">
  <h1>Liste des clients </h1>
 <div class="float-right">
    <a class="btn btn-primary" a href="{{ route('client.create')}}" >Ajouter Client</a>
 </div>
</div><br>

   @if ($message = Session::get('success'))
      <div class="alert alert-success">
      <p>{{ $message }}</p>
      </div>

    @endif

    <table class="table">
  <tr>
       <td>cin</td>
       <td>nom</td>
       <td>prenom</td>
       <td>datenaissance</td>
      <td>adresse</td>
       <td>ville</td>
       <td>codepostale</td>
       <td>tel</td>
       <td>Options</td>
      

    </tr>

    @foreach($clients as $client)
      <tr> 

      <td>{{ $client->id }}</td>
      <td>{{ $client->cin }}</td>
      <td>{{ $client->nom }}</td>
      <td>{{ $client->prenom }}</td>
      <td>{{ $client->datenaissance }}</td>
      <td>{{ $client->adresse }}</td>
      <td>{{ $client->ville }}</td>
      <td>{{ $client->codepostale }}</td>
      <td>{{ $client->tel }}</td>
      <td>
      <form method="POST" action="{{ route('client.destroy', $client->id) }}">
      <a class='btn btn-warning' href="{{ route('client.edit',$client->id) }}">Edit</a>
      {{ csrf_field() }}
         {{ method_field('DELETE') }}
         <input type="submit"  class="btn btn-danger" value="Delete">
         </form>
         </td>
         </tr>
         @endforeach
      
     </table>
        
         
      @endsection


















