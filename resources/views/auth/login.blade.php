
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Page connexion</title>
	<link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #deceff;">
    <a class="navbar-brand" href="#"> <img src="../image/WhatsApp Image 2022-03-25 at 14.54.29.jpeg" alt="mon image">
  </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        
        <li class="nav-item active">
          <a class="nav-link" href="#" style="color: #002f6d;">Accueil <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" style=" width:133px;color: #002f6d;">Contactez-nous</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" style=" width: 90px;color: #002f6d;">A propos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="connexion.html" style=" width: 90px;color: #002f6d;">Connexion</a>
          </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" style="color: #002f6d;" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Inscription
            </a>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background: #deceff;">
            <a class="dropdown-item" href="inscriptionclient.html">Client</a>
           <a class="dropdown-item" href="index.html" > Prestataire</a>
                 
            </div>
          </li>
        </ul>
      </div>
    </nav>
<div class="container">
<div class="wrapper">
    <div class="title">
      Connexion
    </div>
    <div class="form">
     <form   method="POST" action="{{ route('login') }}">
        @csrf
             <div class="inputfield">
              <label>Email ou Contact :</label>
              <input type="email" class="input  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
           </div> 
           <div class="inputfield">
                <label>Mot de passe :</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" id="passe">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
         </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

            <label class="form-check-label" for="remember">
                {{ __('Remember Me') }}
             </label>
        </div>
         <div class="inputfield">
        <input type="submit" value="Se connexion" class="btn">
    </form>
      </div>
      @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Mot de passe oublier?') }}
            </a>
        @endif
    </div>
    <a href="{{ url('/register')}}">
        s'incrire
    </a>
    
</div>
</div>	
<footer style="background: #deceff; width: 100%; text-align: center;height:20px; color: #002f6d;font-size: 13px; margin-top: 15px;">
  <p>Copyright <small>&copy;</small> Thessa.ci | All Rights Reserved</p>
</footer>

 
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="../js/app.js"></script>

</body>
</html>
