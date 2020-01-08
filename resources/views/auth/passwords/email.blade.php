@extends('layouts.app')

@section('content')
<div class="container-login" style="background-image: url('/images/imgAuth.jpg');">
	<div class="container-email">

    <span class="login100-form-logo">
        
					<i class="far fa-user"></i>
										</span>
                    
                                        <h6 class="login-title ">
						Cambiar contraseña
					</h6>
                   
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

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
                        <br>

                        <div class="container-login100-form-btn">
						<button type="submit" class="btn btn-block btn-primary ">
							Enviar
						</button>
					</div>
                    </form>
                </div>
          
    </div>
</div>
@endsection
