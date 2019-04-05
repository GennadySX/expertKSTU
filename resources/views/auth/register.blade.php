@extends('dashboard.index')
@section('content')
@include('auth.body')
    @yield('header')
<form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
	@csrf
	<span class="login100-form-title">
		Регистрация в платформу <br> "EXPERT KSTU"
	</span>

	<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
		<input class="input100" type="text" name="name" placeholder="Ваш ФИО" value="{{ old('name') }}" required autofocus>
		@if ($errors->has('name'))
		<span class="invalid-feedback" role="alert">
			<strong>{{ $errors->first('name') }}</strong>
		</span>
		@endif
		<span class="focus-input100"></span>
		<span class="symbol-input100">
			<i class="fa fa-user" aria-hidden="true"></i>
		</span>
	</div>
	<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
		<input class="input100" type="text" name="email" placeholder="Ваш email" value="{{ old('email') }}" required>
		@if ($errors->has('email'))
		<span class="invalid-feedback" role="alert">
			<strong>{{ $errors->first('email') }}</strong>
		</span>
		@endif
		<span class="focus-input100"></span>
		<span class="symbol-input100">
			<i class="fa fa-envelope" aria-hidden="true"></i>
		</span>
	</div>

	<div class="wrap-input100 validate-input" data-validate = "Password is required">
		<input class="input100" type="password" name="password" placeholder="Ваш пароль">
		@if ($errors->has('password'))
		<span class="invalid-feedback" role="alert">
			<strong>{{ $errors->first('password') }}</strong>
		</span>
		@endif
		<span class="focus-input100"></span>
		<span class="symbol-input100">
			<i class="fa fa-lock" aria-hidden="true"></i>
		</span>
	</div>

	<div class="wrap-input100 validate-input" data-validate = "Password is required">
		<input class="input100" type="password" name="password_confirmation" placeholder="Повторите предующий пароль" required>
		@if ($errors->has('password'))
			<span class="invalid-feedback" role="alert">
				<strong>{{ $errors->first('password') }}</strong>
			</span>
		@endif
		<span class="focus-input100"></span>
		<span class="symbol-input100">
			<i class="fa fa-repeat" aria-hidden="true"></i>
		</span>
	</div>

	<div class="container-login100-form-btn">
		<button  type="submit" class="login100-form-btn" >
			Зарегистроваться
		</button>
	</div>

	

	<div class="text-center p-t-136">
		<a class="txt2" href="/login">
			Уже есть аккаунт?
			<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
		</a>
	</div>
</form>
  @yield('footer')
@endsection