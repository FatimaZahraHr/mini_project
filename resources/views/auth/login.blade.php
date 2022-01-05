<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour au MAROC</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
<div class="global-container">
	<div class="card login-form">
		<div class="card-body">
			<h3 class="card-title text-center">
			<a href="/index"><img style="width:240px;height:80px" src="storage/1.png"> </a> 
			</h3>
			<hr>
			<div class="card-text">
			<form method="POST" action="{{ route('login') }}">
                        @csrf
						<div class="form-group loginform">
                            <label for="email">Email</label>
                            <input type="text"  class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
							@error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <center>
                        <button type="submit" class="btn btn-block insc">Se connecter</button>
                        </center>
                        <div class="sign-up">
                        Vous n'avez pas de compte ? 
						<a href="/register">Créez-le</a>
						@if (Route::has('password.request'))
							<a class="btn btn-link" href="{{ route('password.request') }}">
								Mot de passe oublié ?
							</a>
                        @endif
                        </div>

						
                    </form>
			
			</div>
		</div>
	</div>
</div>
</body>
</html>


