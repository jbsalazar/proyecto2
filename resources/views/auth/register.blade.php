@extends('layouts.app')

@section('content')
<div class="container-login" style="background-image: url('images/imgAuth.jpg');">
			<div class="container-log">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <span class="login100-form-logo">
					<i class="far fa-user"></i>
					</span>

					<h6 class="login-title ">
						Registrar
					</h6>

                        <div class="form-group row">
                        

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Nombre">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Correo electronico">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Contraseña">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                           

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Nueva contraseña">
                            </div>
                        </div>
                        <div class="container-login100-form-btn">
						<button type="submit" class="btn btn-block btn-primary ">
							Registrar
						</button>
					</div>
                        </div>
                    </form>
                </div>
            </div>
 
@endsection
