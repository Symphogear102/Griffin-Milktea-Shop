<?php 
 function generateKey() {
        $keylength = 7;
        $str = "1234567";
        $randstr = str_shuffle($str);
        return $randstr;
        }
?>
<style>
    body {
  background-image: url('milkteahand.jpg');
  background-repeat: no-repeat;
  background-size: 1600px auto;
}
.logincontent {
color: white;
margin-top: 1%;

}

.logincontent1 {
    text-align: center;
color: white;
margin-top: 1%;

}

input[type=email]{
  width: 30%;
  padding: 7px 20px;
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
  padding: 7px 20px;
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

 select{
  width: 30%;
  padding: 7px 20px;
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

input[type=text]{
  width: 30%;
  padding: 7px 20px;
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

input[type=number]{
  width: 30%;
  padding: 7px 20px;
  margin: 8px 0;
  margin-left: 35%;
  float: center;
  box-sizing: border-box;
  border: 1px solid white;
  border-radius: 4px;
  background-color: white;
  opacity: 0.75;
  border-radius: 30px;
  color: black;
  font-family: 'Poppins', sans-serif;
}
.button1 {
  background-color:  #46484F;
  border: none;
  color: white;
  padding: 13px 30px;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 5px;
  cursor: pointer;
  border-radius: 30px;
  width: 30%;
  font-family: 'Poppins', sans-serif;
  
 
} 

contact {

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

.labels {
    margin-left: 36%;
}

.labels1 {
    margin-right: 23%;
}

.select {
    text-align: center;
}
</style>
@extends('layouts.yeah')
@section('content')
<br><br>
<div class="logincontent">
<div class="logincontent1">
<div style="color: white; font-size: 30px;">{{ __('Register Now') }}</div><br>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div style="color: white;  font-size: 18px;">{{ __('Note: Your Code is defined who you are onces you login') }}</div>
                                <input id="vCode" type="number" class="form-control @error('vCode') is-invalid @enderror" name="vCode" value="<?php echo generateKey();?>" required autocomplete="vCode" autofocus readonly>

                                @error('vCode')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                       
</div>

                      
                                <input id="uStat" type="hidden" class="form-control @error('uStat') is-invalid @enderror" name="uStat" value="3" required autocomplete="uStat" autofocus>

                    
                   
                   
                            <label for="uFirst" class="labels"><b>{{ __('First Name') }}</b></label>

                       
                                <input id="uFirst" type="text" placeholder="Your First Name" class="form-control @error('uFirst') is-invalid @enderror" name="uFirst" value="{{ old('uFirst') }}" required autocomplete="zFirst" autofocus>

                                @error('uFirst')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                       

                            <label for="uLast" class="labels"><b>{{ __('Last Name') }}</b></label>

                                <input id="uLast" type="text" placeholder="Your Last Name" class="form-control @error('uLast') is-invalid @enderror" name="uLast" value="{{ old('zLast') }}" required autocomplete="uLast" autofocus>

                                @error('uLast')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        
                            <label for="uContact" class="labels"><b>{{ __('Contact') }}</b></label>

                                <div class="contact">
                                <input id="uContact" placeholder="Your Contact Number" type="number" class="form-control @error('uContact') is-invalid @enderror" name="uContact" value="{{ old('uContact') }}" required autocomplete="uContact" autofocus>
                                </div>
                                @error('uContact')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
           

                        
             <div class="select">
             <label for="uAddress" class="labels1"><b>Address</b></label>
 <br>
<select name="uAddress" id="uAddress" recquired>
<option disabled="disabled" selected="selected" required>- Address -</option>
    <option name="a2" value="Catanghalan">Catanghalan</option>
    <option name="a3" value="Hulo">Hulo</option>
    <option name="a4" value="Lawa">Lawa</option>
    <option name="a5" value="Paco">Paco</option>
    <option name="a6" value="Pag-asa">Pag-asa</option>
    <option name="a7" value="Paliwas">Paliwas</option>
    <option name="a8" value="Panghulo">Panghulo</option>
    <option name="a9" value="San Pascual">San Pascual</option>
    <option name="a10" value="Tawiran">Tawiran</option>
</select>
</div>
<br>

<label for="uStreet" class="labels"><b>{{ __('Street') }}</b></label>

                        
<input id="uStreet" placeholder="Street" type="text" class="form-control @error('uStreet') is-invalid @enderror" name="uStreet" value="{{ old('uStreet') }}" required autocomplete="uStreet">

@error('uStreet')
    <span class="invalid-feedback" class="labels" role="alert">
        <strong class="labels">{{ $message }}</strong>
    </span>
@enderror

                            <label for="email" class="labels"><b>{{ __('E-Mail Address') }}</b></label>

                        
                                <input id="email" placeholder="Email Address" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" class="labels" role="alert">
                                        <strong class="labels">{{ $message }}</strong>
                                    </span>
                                @enderror
                        

                     
                            <label for="password" class="labels"><b>{{ __('Password') }}</b></label>

                                <input id="password" placeholder="More than 9 Characters" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" class="labels" role="alert">
                                        <strong class="labels">{{ $message }}</strong>
                                    </span>
                                @enderror
                     

                      
                            <label for="password-confirm"  class="labels"><b>{{ __('Confirm Password') }}</b></label>

                      
                                <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                     

                                <div class="logincontent1">
                                <button type="submit" class="button1">
                                    {{ __('Register') }}
                                </button>
                                </div>
                                <br><br>
                            </div>
                        </div>
                    </form>

</div>
@endsection
