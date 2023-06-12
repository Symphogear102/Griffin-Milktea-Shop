<style>
    body {
  background-image: url('milkteahand.jpg');
  background-repeat: no-repeat;
  background-size: 1400px 710px;
}

.buttons {
    text-align: center;
}
.logincontent {
color: white;
margin-top: 7%;
}

input[type=email]{
  width: 30%;
  padding: 8px 20px;
  margin: 8px 0;
  margin-left: 35%;
  box-sizing: border-box;
  border: 1px solid white;
  border-radius: 4px;
  background-color: black;
  opacity: 0.75;
  border-radius: 30px;
  color: white;
  font-family: 'Poppins', sans-serif;
}

input[type=password]{
  width: 30%;
  padding: 8px 20px;
  margin: 8px 0;
  margin-left: 35%;
  float: center;
  box-sizing: border-box;
  border: 1px solid white;
  border-radius: 4px;
  background-color: black;
  opacity: 0.75;
  border-radius: 30px;
  color: white;
  font-family: 'Poppins', sans-serif;
}

.button1 {
  background-color:  #46484F;
  border: none;
  color: white;
  padding: 8px 30px;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 5px;
  cursor: pointer;
  border-radius: 30px;
  width: 30%;
  font-family: 'Poppins', sans-serif;

 
} 

.button1:hover {
  background-color: #cccccc;
  color: black;
  transition: 2s;
}

h2 {
    color: white;
    text-align: center;
    
}
.nav-link {
    color: white;
    font-family: 'Poppins', sans-serif;
    text-decoration: none;
    text-shadow: 2px 1px 15px black;
    font-size: 20px;
    margin-left: 35%;
}

.label {
    margin-left: 36%;
}
</style>
@extends('layouts.yeah')
	<!-- Latest compiled and minified CSS -->

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

@section('content')
<div class="logincontent">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <h2>LOGIN NOW</h2>
        
                            <label for="email" class="label" ><b>{{ __('E-Mail Address') }}</b></label> 
                                <input id="email" type="email" placeholder="Email " class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                               
                               
                                @error('email')
                                
                                    <span class="invalid-feedback" class="label" role="alert">
                                        <strong class="label">{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        
        <br>
                       
                            <label for="password" class="label"><b>{{ __('Password') }}</b></label> 
                            <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" class="label" role="alert">
                                        <strong class="label">{{ $message }}</strong>
                                    </span>
                                @enderror
                       
                   
                    <br>
                        </div>
                        </div>
                        <div class="buttons">
                                <button type="submit" class="button1">
                                    {{ __('Login') }}
                                </button>
                                </form>
                                </div>
                           
                       
                               

                       </div>   
                       <a class="nav-link" href="{{ route('register') }}"><b>{{ __('CREATE ACCCOUNT') }}</b></a> 
    </div>
             
@endsection
