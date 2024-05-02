<html>
    <body>

   



@extends('layout.main')
@section('dashboard')
<style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap');

        * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                list-style: none;
                font-family: 'Montserrat', sans-serif
        }

        body {
                background-color: #fff;
        }

        .container {
                margin: 20px auto;
                width: 800px;
                padding: 30px
        }

        .card.box1 {
                width: 350px;
                height: 500px;
                background-color: #fff;
                color: #000;
                border-radius: 0
        }

        .card.box2 {
                width: 450px;
                height: 580px;
                background-color: #ffffff;
                border-radius: 0
        }

        .text {
                font-size: 13px
        }

        .box2 .btn.btn-primary.bar {
                width: 20px;
                background-color: transperent;

                border: none;
                color: #000;
        }

        .box2 .btn.btn-primary.bar:hover {
                color: #baf0c3
        }

        .box1 .btn.btn-primary {
                background-color: transperent;
                width: 45px;
                height: 45px;
                display: flex;
                justify-content: center;
                align-items: center;
                border: 1px solid #ddd
        }

        .box1 .btn.btn-primary:hover {
                background-color: #000;
                color: #57c97d
        }

        .btn.btn-success {
                width: 40px;
                height: 40px;
                border-radius: 50%;
                background-color: #ddd;
                color: black;
                display: flex;
                justify-content: center;
                align-items: center;
                border: none
        }

        .nav.nav-tabs {
                border: none;
                border-bottom: 2px solid #ddd
        }

        .nav.nav-tabs .nav-item .nav-link {
                border: none;
                color: black;
                border-bottom: 2px solid transparent;
                font-size: 14px
        }

        .nav.nav-tabs .nav-item .nav-link:hover {
                border-bottom: 2px solid #3ecc6d;
                color: #05cf48
        }

        .nav.nav-tabs .nav-item .nav-link.active {
                border: none;
                border-bottom: 2px solid #3ecc6d
        }

        .form-control {
                border: none;
                border-bottom: 1px solid #ddd;
                box-shadow: none;
                height: 20px;
                font-weight: 600;
                font-size: 14px;
                padding: 15px 0px;
                letter-spacing: 1.5px;
                border-radius: 0
        }

        .inputWithIcon {
                position: relative
        }

        img {
                width: 50px;
                height: 20px;
                object-fit: cover
        }

        .inputWithIcon span {
                position: absolute;
                right: 0px;
                bottom: 9px;
                color: #57c97d;
                cursor: pointer;
                transition: 0.3s;
                font-size: 14px
        }

        .form-control:focus {
                box-shadow: none;
                border-bottom: 1px solid #ddd
        }

        .btn-outline-primary {
                color: black;
                background-color: #ddd;
                border: 1px solid #ddd
        }

        .btn-outline-primary:hover {
                background-color: #05cf48;
                border: 1px solid #ddd
        }

        .btn-check:active+.btn-outline-primary,
        .btn-check:checked+.btn-outline-primary,
        .btn-outline-primary.active,
        .btn-outline-primary.dropdown-toggle.show,
        .btn-outline-primary:active {
                color: #baf0c3;
                background-color: #ddd;
                box-shadow: none;
                border: 1px solid #ddd
        }

        .btn-group>.btn-group:not(:last-child)>.btn,
        .btn-group>.btn:not(:last-child):not(.dropdown-toggle),
        .btn-group>.btn-group:not(:first-child)>.btn,
        .btn-group>.btn:nth-child(n+3),
        .btn-group>:not(.btn-check)+.btn {
                border-radius: 50px;
                margin-right: 20px
        }

        form {
                font-size: 14px
        }

        form .btn.btn-primary {
                width: 100%;
                height: 45px;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                background-color: #4154f1;
                border: 1px solid #ddd
        }



        @media (max-width:750px) {
                .container {
                        padding: 10px;
                        width: 100%
                }

                .text-green {
                        font-size: 14px
                }

                .card.box1,
                .card.box2 {
                        width: 100%
                }

                .nav.nav-tabs .nav-item .nav-link {
                        font-size: 12px
                }
        }
</style
</main> -->
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
                                <input type="hidden" name="course" value="{{$user->course}}">
                                <input type="hidden" name="password" value="{{$user->password}}">
                                
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
                                        <div class="d-flex flex-column px-md-5 px-4 mb-4"> <span>Amount</span>
                                        <div class="inputWithIcon">
                                        <input class="form-control text-uppercase" type="number" name="amount" required> <span class="far fa-user"></span></div>

                                 
                                        </div>
                                </div>
                                <div class="col-12">
                                        <div class="d-flex flex-column px-md-5 px-4 mb-4"> <span>Name</span>
                                                <div class="inputWithIcon"> <input class="form-control text-uppercase" type="text" value="{{$user->username}}"> <span class="far fa-user"></span> </div>
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
