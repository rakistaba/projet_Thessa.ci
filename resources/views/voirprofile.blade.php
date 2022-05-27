<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Voir profile</title>
	<link rel="stylesheet" href="{{asset('css/voirprofile.css')}}">
  
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
          <a class="nav-link" href="{{ route('home') }}" style="color: #002f6d;">Accueil <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" style=" width:133px;color: #002f6d;">Contactez-nous</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" style=" width: 90px;color: #002f6d;">A propos</a>
        </li>
        <li class="nav-item">
               <a class="nav-link" href="{{ route('selection') }}" style=" width: 90px;color: #002f6d;">Selections</a>
        </li>
       <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" style="color: #002f6d; text-transform:capitalize;" href="/" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  {{ Auth::user()->nom }}
                  {{ Auth::user()->prenom }} 
              </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown" >

                    <a class="dropdown-item" href="{{ route('profile') }}">Mon profile</a>

                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            {{ __('Deconnexion') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                         @csrf
                    </form>
                </div>
            </li>
      </ul>
      </div>
    </nav>
  <div >
    @if(Session::get('recruter'))
       <p style="background:#deceff; width:50%; height:30px; margin-left:200px;">{{Session::get('recruter')}}</p>
    @endif
  </div>
  <div class="container">
    <div class="row" >
    <div class="col-12 col-md-12 col-lg-4">
      <div class="wrapper1">
        <div class="left">
            <img src="{{asset('photo'.'/'.$prest->imagePath)}}" 
            alt="user" width="100">
            <h4>{{ $prest->nom_prest }}</h4>
            <h4>{{ $prest->prenom_prest }}</h4>
             <p>{{ $prest->metier_prest }}</p>
        </div>
      </div>
    
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-6" style="background-color: #fff;">
          <div class="wrapper">
    
        <div class="info">
            <h3>Information</h3>
            <div class="info_data">
                <div class="data">
                   <h4>Ville</h4>
                   <p>{{ $prest->ville_prest }}</p>
                </div>
                <div class="data">
                  <h4>Age</h4>
                   <p>{{ $prest->age_prest }}</p>
             </div>
           
            
            </div>
        </div>
      
      <div class="projects">
            <h3>Description</h3>
            <div class="projects_data">
                    <p>{{ $prest->description_prest }}</p>
                 
            </div>
        </div><div class="social_media">
          <form action="{{ route('voirprofile_add',$prest->id) }}" method="POST" >
            @csrf
            <input type="submit" value="Recruter" class="btn">
            
          </form>
          
        </div>
     
  </div>
  </div>
  </div>
           
            </div>
            </div>
          </div><br><br><br><br>
          <footer class="fo">
            <div class="container">
                <center>
                    <p>Copyright <small>&copy;</small> Lifestyle Store | All Rights Reserved</p>
                </center>
            </div>
            
            
        </footer>
            
           
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="../js/app.js"></script>

</body>
</html>