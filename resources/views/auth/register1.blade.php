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
  background-size: 1400px 710px;
}
.logincontent {
    margin-top: 1%;
    margin-left: 4%;
}

.right {
    float: left;
    color: white;
    margin-left: 2%;
}
</style>
@extends('layouts.yeah')
	<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@section('content')
<div class="logincontent">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div style="color: white; float: left;">{{ __('Register Now') }}</div>
<br><br>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="zCode" class="right">{{ __('Code') }}</label>

                            <div class="col-md-6">
                                <input id="zCode" type="text"    class="form-control @error('zCode') is-invalid @enderror" name="zCode" value="<?php echo generateKey();?>" required autocomplete="zCode" autofocus>

                                @error('zCode')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row">

                            <div class="col-md-6">
                                <input id="zStat" type="hidden" class="form-control @error('zStat') is-invalid @enderror" name="zStat" value="3" required autocomplete="zStat" autofocus>

                                @error('zStat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="zFirst" class="right">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="zFirst" type="text" class="form-control @error('zFirst') is-invalid @enderror" name="zFirst" value="{{ old('zFirst') }}" required autocomplete="zFirst" autofocus>

                                @error('zFirst')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="zLast" class="right">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="zLast" type="text" class="form-control @error('zLast') is-invalid @enderror" name="zLast" value="{{ old('zLast') }}" required autocomplete="zLast" autofocus>

                                @error('zLast')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="zContact" class="right">{{ __('Contact') }}</label>

                            <div class="col-md-6">
                                <input id="zContact" type="number" class="form-control @error('zContact') is-invalid @enderror" name="zContact" value="{{ old('zContact') }}" required autocomplete="zContact" autofocus>

                                @error('zContact')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="zAddress" class="right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="zAddress" type="text" class="form-control @error('zAddress') is-invalid @enderror" name="zAddress" value="{{ old('zAddress') }}" required autocomplete="zAddress" autofocus>

                                @error('zAddress')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="right" >{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
