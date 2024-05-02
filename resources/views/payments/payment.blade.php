@extends('layout.main')
@section('dashboard')
<main id="main" class="main">
       
              
             
         
         <table class="table">
  <thead>

  
    <tr>
   
      <th scope="col">#</th>
      <th scope="col">Имя</th>
      <th scope="col">Карта</th>
     

 
    </tr>
  </thead>
  <tbody>
  @foreach($users as $user)
  @if($user->id == auth()->user()->id)
  <a style="display: none;"  href="{{ route('window', ['user' => $user]) }}">{{$user->username}}</a>
    <tr>
    @else
      <th scope="row">{{$user->id}}</th>
      <td><a  href="{{ route('window', ['user' => $user]) }}">{{$user->username}}</a></td>
      <td>{{$user->card}}</td>
    
          
        @endif
    </tr>
    @endforeach 
    <!-- <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr> -->
  </tbody>
</table>
</main>


@endsection