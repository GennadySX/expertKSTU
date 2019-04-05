@extends('dashboard.index')
@section('content')
@include('auth.body')
    @yield('header')
				<form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
					     @csrf
					<span class="login100-form-title">
						Вход в платформу <br> "EXPERT KSTU"
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Ваш Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Ваш пароль">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button  type="submit" class="login100-form-btn">
							Войти
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Забыли
						</span>
						<a class="txt2" href="#">
							Логин / Пароль?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="/register">
							Регистрация
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
				  @yield('footer')
@endsection