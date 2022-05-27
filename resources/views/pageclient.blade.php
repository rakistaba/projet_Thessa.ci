<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>page client</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<script src="bootstrap/js/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/sidenav.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/manage_customer.js"></script>
    <script src="js/validateForm.js"></script>
    <script src="js/restrict.js"></script>
  </head>
  <body style="background-color: #deceff;">
    <script type="text/javascript">
        var pid = "none";
        function showhide(id) {
          var elements = document.getElementById(id).childNodes;
          var menu = elements[3];
          var arrow = ((elements[1].childNodes)[4].childNodes)[1];
          if(menu.style.display == 'block') {
            menu.style.display = "none";
            arrow.style.transform = "rotate(0deg)";
            elements[1].style.color = "#eeeeee";
          }
          else {
            menu.style.display = "block";
            arrow.style.transform = "rotate(270deg)";
            elements[1].style.color = "#ff5252";
          }if(pid == id)
            pid = "none";
          if(pid != "none") {
            elements = document.getElementById(pid).childNodes;
            menu = (document.getElementById(pid).childNodes)[3];
            arrow = ((elements[1].childNodes)[4].childNodes)[1];
            if(menu.style.display == 'block') {
              menu.style.display = "none";
              arrow.style.transform = "rotate(0deg)";
              elements[1].style.color = "#eeeeee";
            }
          }
          pid = id;
        }
      
        function showOptions() { var flag = document.getElementById('options');
          if(flag.style.display == 'block') {
            flag.style.display = "none";
            document.getElementById('mark').style.display = "none";
          }
          else {
            flag.style.display = "block";
            document.getElementById('mark').style.display = "block";
          }
        }
      </script>
    <!-- including side navigations -->
    <div class="sidenav">
        <div class="card">
            <header><img src="image/WhatsApp Image 2022-03-25 at 14.54.29.jpeg" alt="" style="width: 100%;">
            </header>
          <div class="card-body" style="background-color: #deceff;">
            <div class="logo">
              <img src="images/prof.jpg" class="profile"/>
              <h1 class="logo-caption"  ><span class="tweak" style="color: #002f6d;">A</span>dmin</h1>
            </div> <!-- logo class -->
      
          <!-- dashboard start -->
          <div class="main-menu-item">
            <a href="/"><i class="fa fa-dashboard"  style="color: #002f6d;"></i><span  style="color: #002f6d;">Accueil</span></a>
          </div>
          <!-- dashboard end -->
          <div id="second" class="main-menu-item" onclick="showhide(this.id);">
            <a href="#">
                <i class="fa fa-handshake" style="color: #002f6d;"></i><span  style="color: #002f6d;">Prestataire</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu" style="display: none;">
                <li class="treeview"><a href="{{ route('ajoupresta') }}" style="color: #002f6d;">Ajouter un prestataire</a></li>
                <li class="treeview"><a href="{{ route('postulant') }}" style="color: #002f6d;">Gérer prestataire</a></li>
            </ul>
        </div>
        <div id="third" class="main-menu-item" onclick="showhide(this.id);">
            <a href="#">
                <i class="fa fa-shopping-bag" style="color: #002f6d;"></i><span  style="color: #002f6d;">Les clients</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu" style="display: none;">
                 <li class="treeview"><a href="{{ route('client') }}" style="color: #002f6d;">Gérer les clients</a></li>
              </ul>
        </div>
        <!-- client end -->
  
        <!-- manufacturer start -->
        
  
      </div> <!-- card-body class -->
    </div> <!-- card  -->
</div>

    <div class="container-fluid"style="background-color: #deceff;">
      <div class="container">

        <section class="row content-header">
            <div class="header-title col-md-11">
              <h1 class="logo-caption"><i class="fa fa-shopping-bag" style="color: #002f6d;"></i> <span class="tweak" style="color:#002f6d;">Les clients</span></h1>
               
              &emsp;&emsp;&emsp;<small class="font-weight-bold h6"></small>
            </div>
            <div class="col-md-1 user_options">
              <!--button class="col col-md-1 m-3" onclick="showOptions();">
                <i class="fa fa-gear"></i>
              </button-->
              <div id="mark"><i class="fa fa-play fa-rotate-270"></i></div>
              <ul id="options" class="options list-unstyled" style="display: none;">
                <li>
                  <a href="profile.html"><i class="fa fa-user"></i><span>Mon Profile</span></a>
                </li>
                <li>
                  <a href="changepasse.html"><i class="fa fa-edit"></i><span>Change mot de passe</span></a>
                </li>
                <li>
                  <a href="logout.php"><i class="fa fa-key"></i><span>Deconnecter</span></a>
                </li>
              </ul>
            </div>
          </section>

        <!-- form content -->
        <div class="row">

          <div class="col-md-12 form-group form-inline">
            <label class="font-weight-bold" for="">Recherche :&emsp;</label>
            <input type="text" class="form-control" id="" placeholder="Rechercher client" onkeyup="searchCustomer(this.value);">
          </div>

          <div class="col col-md-12">
            <hr class="col-md-12" style="padding: 0px; border-top: 2px solid  #deceff;">
          </div>

          <div class="col col-md-12 table-responsive">
            <div class="table-responsive">
            	<table class="table table-bordered table-striped table-hover">
            		<thead>
            			<tr>
                    <th style="width: 10%;">Id client</th>
                   	<th style="width: 13%;">Nom </th>
                    <th style="width: 13%;">Prénom</th>
                    <th style="width: 17%;">Ville</th>
                    <th style="width: 13%;">Numéro</th>
                    <th style="width: 17%;">Email</th>
                    <th style="width: 5%;">Action</th>
            			</tr>
                @foreach($clients as $client)
                  <tr>
                    <th style="width: 10%;">{{ $client->id }}</th>
                   	<th style="width: 13%;">{{ $client->nom }}</th>
                    <th style="width: 13%;">{{ $client->prenom}}</th>
                    <th style="width: 17%;">{{ $client->ville}}</th>
                    <th style="width: 13%;">{{ $client->contact}}</th>
                    <th style="width: 17%;">{{ $client->email }}</th>
                    <th style="width: 5%;">
                      @if($client->deleted_at === null)
                          <form action="{{route('client_destroy',$client->id)}}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Suprimé
                               <!--i class="fa fa-close"></!--i-->
                            </button>
                          </form>
                      @else
                          <form action="{{route('client_restore',$client->id)}}" method="POST">
                              @csrf
                              <button type="submit" class="btn btn-secondary">Restauré
                                   <!--i class="fa fa-close"></!--i-->
                              </button>
                          </form>
                           <form action="{{route('client_force_destroy',$client->id)}}" method="POST">
                              @csrf
                              <button type="submit" class="btn btn-secondary">Suprimé 
                                   <!--i class="fa fa-close"></!--i-->
                              </button>
                          </form>
                          
                      @endif 
                    </th>
            			</tr>
                @endforeach
            		</thead>
            		<tbody id="customers_div">
            		</tbody>
            	</table>
            </div>
          </div>

        </div>
        <!-- form content end -->
        <hr style="border-top: 2px solid #deceff;">
      </div>
    </div>
  </body>
</html>
