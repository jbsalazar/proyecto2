@extends('layouts.app')

@section('content')
		<div class="container-login" style="background-image: url('images/imgAuth.jpg');">
			<div class="container-log">
            <form method="POST" action="{{ route('login') }}">
            @csrf
					<span class="login100-form-logo">
					<i class="far fa-user"></i>
										</span>

					<h6 class="login-title ">
						Inicio sesion
					</h6>

					<div class="inputAuth" data-validate = "Enter username">
                        <input class="form-control @error('email') is-invalid @enderror" id="email" type="email" value="{{ old('email') }}" name="email" placeholder="Correo electronico">
                        
                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
					</div>

					<div class="inputAuth" data-validate="Enter password">
						<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Contraseña">
						@error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
					</div>
					<div class="container-login100-form-btn">
						<button type="submit" class="btn btn-block btn-primary ">
							Entrar
						</button>
					</div>
					<div class="form-group">
    <div class="text-white" name="rd">  
        <input class="text-white" type="checkbox"> Recordar datos
    </div>

					<div class="text-center p-t-90">
						
                        @if (Route::has('password.request'))
                                    <a class="txt1 text-white" href="{{ route('password.request') }}">
                                        {{ __('Olvidaste tu contraseña?') }}
                                    </a>
                                @endif
						</a>
					</div>
				</form>
			</div>
		</div>
@endsection
	