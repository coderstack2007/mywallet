<html>
    <body>

   



@extends('layout.main')
@section('dashboard')

</main> 
<div class="container bg-light d-md-flex align-items-center">

        <div class="card box2 shadow-sm">
                <div class="d-flex align-items-center justify-content-between p-md-5 p-4"> <span class="h5 fw-bold m-0">Payment methods</span>
                        <div class="btn btn-primary bar"><span class="fas fa-bars"></span></div>
                </div>
                <ul class="nav nav-tabs mb-3 px-md-4 px-2">
                        <li class="nav-item"> <a class="nav-link px-2 active" aria-current="page" href="#">Credit Card</a> </li>
                        <li class="nav-item ms-auto"> </li>
                </ul>
                <form action="{{ route('process', ['user' => $user->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                        <div class="row">
                               
                                <input type="hidden" name="username" value="{{$user->username}}">
                                <input type="hidden" name="email" value="{{$user->email}}">
                                <input type="hidden" name="card" value="{{$user->card}}">
                               
                                <input type="hidden" name="password" value="{{$user->password}}">
                                <input type="hidden" name="expenses" value="{{ $user->expenses }}" >
                                <span class="far fa-user">
                                <div class="col-12">
                                        <div class="d-flex flex-column px-md-5 px-4 mb-4"> <span>Credit Card</span>
                                                <div class="inputWithIcon"> <input class="form-control" type="text" value="{{$user->card}}"> <span class=""> <img src="https://www.freepnglogos.com/uploads/mastercard-png/mastercard-logo-logok-15.png" alt=""></span> </div>
                                        </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="d-flex flex-column ps-md-5 px-md-0 px-4 mb-4"> </span>
                                                <div class="inputWithIcon"> <span class="fas fa-calendar-alt"></span> </div>
                                        </div>
                                </div>
                             <div class="col-12">
                                <div class="d-flex flex-column px-md-5 px-4 mb-4">
                                        <span>Amount</span>
                                        <div class="inputWithIcon">
                                        <input id="amountInput" 
                                                class="form-control text-uppercase" 
                                                type="number" 
                                                name="amount" 
                                                required>
                                        <span class="far fa-user"></span>
                                        </div>
                                        <!-- Сообщение об ошибке -->
                                        <small id="balanceError" style="color:red; font-size:12px; display:none;">
                                        Недостаточно средств на карте
                                        </small>
                                        
                                        <!-- Ошибка при сумме меньше 500 -->
                                        @error('amount')
                                                <small style="color:red; font-size:12px;">{{ $message }}</small>
                                        @enderror

                                </div>
                                </div>

                                <div class="col-12">
                                        <div class="d-flex flex-column px-md-5 px-4 mb-4"> <span>Name</span>
                                                <div class="inputWithIcon"> {{$user->username}}</span> </div>
                                        </div>
                                </div>
                                <div class="col-12 px-md-5 px-4 mt-3">
                                        <button type="submit" class="btn btn-primary w-100">Pay </button>
                                </div>
                        </div>
                </form>
        </div>
</div>





@endsection
    </body>
</html> 
