<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes selections</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #deceff; margin-bottom: 50px;">
        <a class="navbar-brand" href="#"> <img src="{{asset('image/WhatsApp Image 2022-03-25 at 14.54.29.jpeg')}}" alt="mon image">
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
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="profile-user-img img-fluid img-circle client_picture" style=" width: 20px;clip-path: circle();" src="" alt="">
                  {{ Auth::user()->nom }} {{ Auth::user()->prenom }}
              </a>
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
                     
                </div>
              </li>
            </ul>
          </div>
        </nav>

      <div class="col col-md-12 table-responsive">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                      <th style="width: 13%;">Nom du prestataire</th>
                      <th style="width: 13%;">Prénom du prestataire</th>
                      <th style="width: 17%;"> Métier</th>
                      <th style="width: 15%;">Ville</th>
                      <th style="width: 17%;">Action</th>
                    </tr>

                  @foreach($client->prestataires as $prestataire)
                    <tr>
                      <th style="width: 17%;">{{ $prestataire->nom_prest }}</</th>
                      <th style="width: 13%;">{{ $prestataire->prenom_prest }}</th>
                      <th style="width: 17%;">{{ $prestataire->metier_prest }}</th>
                      <th style="width: 17%;">{{ $prestataire->ville_prest }}</th>
                
                      <th style="width: 17%;">
                        <button href="" class="btn btn-success btn-sm">
                          <i class="fa fa-check"></i>
                        </button> 
                        <button class="btn btn-danger btn-sm">
                          <i class="fa fa-close"></i>
                        </button>
                      </th>
                    </tr>
                  @endforeach
                </thead>
                <tbody id="customers_div">
                </tbody>
            </table>
            <div class="form-group m-auto" >
              <button  class="btn " style="background-color:#deceff;color:#002f6d; font-weight: bold; margin-left:300px; width:50%;"><a style="color: black;" href="{{ route('home') }}" >Récruter autres</a></button>
            </div>
        </div>
      </div>

    </div>
    <footer class="fo" style="margin-top:100px;">
        <div class="container">
            <center>
                <p>Copyright <small>&copy;</small> Thessa.ci | All Rights Reserved</p>
            </center>
        </div>
        
        
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>