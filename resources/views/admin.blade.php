<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<script src="bootstrap/js/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/sidenav.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/style.css">
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
          }
          if(pid == id)
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
      
        function showOptions() {
          var flag = document.getElementById('options');
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
              <a href="home.php"><i class="fa fa-dashboard"  style="color: #002f6d;"></i><span  style="color: #002f6d;">Accueil</span></a>
            </div>
            <!-- dashboard end -->
      
            <!-- customer end -->
            <div id="second" class="main-menu-item" onclick="showhide(this.id);">
                <a href="#">
                    <i class="fa fa-handshake" style="color: #002f6d;"></i><span  style="color: #002f6d;">Prestataire</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li class="treeview"><a href="ajouterprestataire.html" style="color: #002f6d;">Ajouter un prestataire</a></li>
                    <li class="treeview"><a href="prestataire.html" style="color: #002f6d;">Gérer prestataire</a></li>
                </ul>
            </div>
            <!-- customer end -->
      
            <!-- client strat -->
            <div id="third" class="main-menu-item" onclick="showhide(this.id);">
                <a href="#">
                    <i class="fa fa-shopping-bag" style="color: #002f6d;"></i><span  style="color: #002f6d;">Les clients</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                     <li class="treeview"><a href="pageclient.html" style="color: #002f6d;">Gérer les clients</a></li>
                  </ul>
            </div>
            <!-- client end -->
      
            <!-- manufacturer start -->
            
      
          </div> <!-- card-body class -->
        </div> <!-- card  -->
      </div>
      
    <div class="container-fluid"style="background-color: #deceff;">
      <div class="container">
        <!-- header section -->
        
    <section class="row content-header">
      <div class="header-title col-md-11">
        <h1 class="logo-caption"><span class="tweak" style="color:#002f6d;">Page de bord</span></h1>
         
        &emsp;&emsp;&emsp;<small class="font-weight-bold h6"></small>
      </div>
      <div class="col-md-1 user_options">
        <button class="col col-md-1 m-3" onclick="showOptions();">
          <i class="fa fa-gear"></i>
        </button>
        <div id="mark"><i class="fa fa-play fa-rotate-270"></i></div>
        <ul id="options" class="options list-unstyled" style="display: none;">
          <li>
            <a href="{{ route('profile') }}"><i class="fa fa-user"></i><span>Modifier Profile</span></a>
          </li>
          <li>
            <a href="{{ route('changepass') }}"><i class="fa fa-edit"></i><span>Change mot de passe</span></a>
          </li>
          <li>
            <a href="{{ route('connexion') }}"><i class="fa fa-key"></i><span>Deconnecter</span></a>
          </li>
        </ul>
      </div>
    </section>
    <hr style="border-top: 2px solid #deceff;">
    

        
        <!-- header section end -->

        <!-- form content -->
        <div class="row">
         
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4" style="padding: 10px;">
                    <button class="dashboard-stats" style="width: 100%;"href="{{ route('client') }}">
                      <a class="text-dark text-decoration-none" href="{{ route('client') }}">
                        <span class="h4">12</span>
                        <span class="h6"><i class="fa fa-play fa-rotate-270 text-warning"></i></span>
                        <div class="small font-weight-bold"style="color: #002f6d;text-align: center;">Total client</div>
                      </a>
                    </button>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-5 col-lg-4" style="padding: 10px;">
                    <button class="dashboard-stats" style="width: 100%;"href="{{ route('postulant') }}">
                      <a class="text-dark text-decoration-none" href="{{ route('postulant') }}">
                        <span class="h4">12</span>
                        <span class="h6"><i class="fa fa-play fa-rotate-270 text-warning"></i></span>
                        <div class="small font-weight-bold"style="color: #002f6d;text-align: center;">Total postulant</div>
                      </a>
                    </button>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-5 col-lg-4" style="padding: 10px;">
                    <button class="dashboard-stats" style="width: 100%;"href="{{ route('prestataire') }}">
                      <a class="text-dark text-decoration-none" href="{{ route('prestataire') }}">
                        <span class="h4">12</span>
                        <span class="h6"><i class="fa fa-play fa-rotate-270 text-warning"></i></span>
                        <div class="small font-weight-bold"style="color: #002f6d;text-align: center;">Postulants</div>
                      </a>
                    </button>
                  </div>

          </div>

          <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding: 7px 0; margin-left: 15px;">
        <hr style="border-top: 2px solid #deceff;">

        <div class="row">

         
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-5" style="padding: 10px;">
              		<div class="dashboard-stats" style="padding: 30px 15px;"onclick="location.href='{{ route('inscriptionpresta') }}'">
              			<div class="text-center">
                      <span class="h1"><i class="fa fa-handshake p-2"style="color: #002f6d;"></i></span>
              				<div class="h5"style="color: #002f6d;">Ajouter des prestataires</div>
              			</div>
              		</div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-5 col-lg-5" style="padding: 10px;"onclick="location.href='{{ route('tableau') }}'">
                    <div class="dashboard-stats" style="padding: 30px 15px;">
                        <div class="text-center">
                    <span class="h1"><i class="fa fa-group p-2"style="color: #002f6d;"></i></span>
                            <div class="h5"style="color: #002f6d;">Tableau des récrutements</div>
                        </div>
                    </div>
              </div>
              

        </div>
        <!-- form content end -->

        <hr style="border-top: 2px solid #deceff;">

      </div>
    </div>
  </body>
</html>
