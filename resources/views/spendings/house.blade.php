@extends('layout.main')
@section('dashboard')

<style>
      .ul {
    list-style-type: none;
    padding: 0;
  }
  button {
    border:none;


  }
  .li {
    display: inline-block;
    margin: 5px;
    padding: 10px 20px; 
    border-radius: 25px;
    background-color: lightgrey;
    font-size: large;
  }
  .houselist {
    margin-top: 100px;
  }
  input 
  {
    border: 0;
    font-size: 14px;
    color: #012970;
    border: 1px solid rgba(1, 41, 112, 0.2);
    padding: 7px 38px 7px 8px;
    border-radius: 3px;
    transition: 0.3s;
    width: 70%;
  }
  .pay 
  {
    background-color: #999;
    color:#fff;
    padding: 7px 16px 7px 8px;
    width: 200px;
    text-align: center;
    border: none;
  }
</style>
<center>
   
<div class="houselist">
<h1>House expenses</h1>

<ul class="ul">
    
    <button  style="background-color: transparent;" onclick="document.getElementById('myModal').style.display='block'"><li class="li">Light</li></button>

    <button  style="background-color: transparent;" onclick="document.getElementById('myModal2').style.display='block'"><li class="li">Gas</li></button>
</ul class="ul">

</div>
<form action="{{route('first')}}" method="POST">
@csrf
<div id="myModal" style="display: flex; flex-direction: column; justify-content: center; align-items: center; position: fixed; z-index: 1; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgba(0,0,0,0.4);">
<div style="display: flex; flex-direction: column; align-items: center; background-color: #fefefe; padding: 20px; border: 1px solid #888; width: 80%; max-width: 400px; height: 400px; " >
    <span onclick="document.getElementById('myModal').style.display='none'" style="align-self: flex-end; color: #aaa; font-size: 28px; font-weight: bold;">×</span>
    <p>Fee for Light</p>
    <input type="text" name="cost" placeholder="Cost" required>
    <input type="hidden" name="type" value="light" >
    <input type="hidden" name="expenture" value="house" >
    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
    <br>
  
    <button  class="pay" type="submit">Pay</button>
  </div>
</div>
</form>
<form action="{{route('second')}}" method="POST">
@csrf
<div id="myModal2" style="display: flex; flex-direction: column; justify-content: center; align-items: center; position: fixed; z-index: 1; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgba(0,0,0,0.4);">
<div style="display: flex; flex-direction: column; align-items: center; background-color: #fefefe; padding: 20px; border: 1px solid #888; width: 80%; max-width: 400px; height: 400px; " >
    <span onclick="document.getElementById('myModal2').style.display='none'" style="align-self: flex-end; color: #aaa; font-size: 28px; font-weight: bold;">×</span>
    <p>Fee for Gas</p>
    <input type="text" name="cost" placeholder="Cost" required>
    <input type="hidden" name="type" value="gas" placeholder="Type">
    <input type="hidden" name="expenture" value="house" >
    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
    <br>
  
    <button  class="pay" type="submit">Pay</button>
  </div>
</div>
</form>
</center>







<!-- Scripts -->
<script>
var modal1 = document.getElementById('myModal');
var modal2 = document.getElementById('myModal2');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal1) {
    modal1.style.display = "none";
  }
  if (event.target == modal2) {
    modal2.style.display = "none";
  }
}

window.onload = function() {
    modal1.style.display='none';
    modal2.style.display='none';
}


</script>

@endsection