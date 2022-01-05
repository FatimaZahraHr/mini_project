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
	<div class="card login-form insc">
		<div class="card-body">
			<h3 class="card-title text-center">
			<a href="/index"><img style="width:240px;height:80px" src="storage/1.png"> </a> 
			</h3>
			<hr>
			<div class="card-text loginform">
            <form method="POST" action="{{ route('register') }}">
                @csrf
            	<div class="row">
					<div class="col">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Nom" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
					</div>
					<div class="col">
                    <input id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" placeholder="Prénom" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom" autofocus>
                    @error('prenom')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
					</div>
				</div><br>
				<div class="row">
					<div class="col">
                    <input id="email" type="text" class="form-control @error('email') is-invalid @enderror"  placeholder="Email"  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
					</div>
					<div class="col">
					<select class="form-control @error('type') is-invalid @enderror" placeholder="Type" name="type" value="{{ old('type') }}" required autocomplete="type" autofocus>
						<option value="">Choisir un type</option>
						<option value="3">Touriste</option>
						<option value="4">Collaborateur</option>
					</select>
                    @error('type')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
					</div>
				</div><br>
				<div class="row">
					<div class="col">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"  placeholder="Mot de passe"  name="password" required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
					</div>
					<div class="col">
                    <input id="password-confirm" type="password" class="form-control"  placeholder="Confirmation" name="password_confirmation" required autocomplete="new-password">
					</div>
				</div><br>
                    <center>
                        <button type="submit" class="btn btn-block">Inscrire</button>
                    </center>
                    <div class="sign-up">
					Vous avez un compte ? 
                    <a href="/login">Se connecter</a>
				    </div>
            </form>
            </div>
        </div>
	</div>
</div>    
</body>
</html>