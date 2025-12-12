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
    <!-- Outlining of users -->
      @foreach($users as $user)
        @if($user->id != auth()->user()->id)
            <th scope="row">{{$user->id}}</th>
            <td><a  href="{{ route('window', ['user' => $user]) }}">{{$user->username}}</a></td>
            <td>{{$user->card}}</td>
          
        
            
          
                
          @endif
        
        @endforeach 
   
  </tbody>
</table>
</main>


@endsection