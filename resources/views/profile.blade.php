<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Profile</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<script src="bootstrap/js/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/sidenav.css">
    <link rel="stylesheet" href="css/home.css">
    <script src="js/my_profile.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/validateForm.js"></script>
    <script src="js/restrict.js"></script>
  </head>
  <body>
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
            <a href="home.php"><i class="fa fa-dashboard"  style="color: #002f6d;"></i><span  style="color: #002f6d;">Accueil</span></a>
          </div>
          <!-- dashboard end -->
          <div id="second" class="main-menu-item" onclick="showhide(this.id);">
            <a href="#">
                <i class="fa fa-handshake" style="color: #002f6d;"></i><span  style="color: #002f6d;">Prestataire</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a><ul class="treeview-menu" style="display: none;">
                <li class="treeview"><a href="add_customer.php" style="color: #002f6d;">Ajouter un prestataire</a></li>
                <li class="treeview"><a href="manage_customer.php" style="color: #002f6d;">Gérer prestataire</a></li>
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
                 <li class="treeview"><a href="pageclient.html" style="color: #002f6d;">Gérer les clients</a></li>
              </ul>
        </div>
        <!-- client end -->
  
        <!-- manufacturer start -->
        
  
      </div> <!-- card-body class -->
    </div> <!-- card  -->
</div>     
    <!-- including side navigations -->
    
    <div class="container-fluid" style="background-color: #deceff;">
      <div class="container">
        <section class="row content-header">
            <div class="header-title col-md-11">
              <h1 class="logo-caption"><i class="fa fa-user" style="color: #002f6d;"></i>  <span class="tweak" style="color:#002f6d;">Modifier Profile</span></h1>
               
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
                  <a href="{{ route('changepass') }}"><i class="fa fa-edit"></i><span>Change mot de passe</span></a>
                </li>
                <li>
                    <a href="{{ route('connexion') }}"><i class="fa fa-key"></i><span>Deconnecter</span></a>
                </li>
              </ul>
            </div>
          </section>
        <!-- header section -->
        
        <div class="row">
          <div class="row col col-md-6">

            <div class="row col col-md-12">
              <div class="col col-md-12 form-group">
                <label class="font-weight-bold" for="pharmacy_name">Nom admin :</label>
                <input id="pharmacy_name" type="text" class="form-control" value="" placeholder="Nom admin" onkeyup="validateName(this.value, 'pharmacy_name_error');" disabled>
                </div>
            </div>
            <div class="row col col-md-12">
                <div class="col col-md-12 form-group">
                  <label class="font-weight-bold" for="contact">Prénoms admin :</label>
                  <input id="username" type="text" class="form-control" value="" placeholder="Prénoms" onkeyup="notNull(this.value, 'username_error');" disabled>
                   </div>
              </div>

            <div class="row col col-md-12">
              <div class="col col-md-12 form-group">
                <label class="font-weight-bold" for="address">Adresse :</label>
                <input type="text" id="address" class="form-control" placeholder="adresse" onkeyup="validateAddress(this.value, 'address_error');" style="max-height: 100px;" disabled></textarea>
                   </div>
            </div>

            <div class="row col col-md-12">
              <div class="col col-md-12 form-group">
                <label class="font-weight-bold" for="email">Email :</label>
                <input id="email" type="email" class="form-control" value="" placeholder="email"  disabled>
                  </div>
            </div>

            <div class="row col col-md-12">
              <div class="col col-md-12 form-group">
                <label class="font-weight-bold" for="contact_number">Contact :</label>
                <input id="contact_number" type="number" class="form-control" value="" placeholder="contact number" onkeyup="validateContactNumber(this.value, 'contact_number_error');" disabled>
                </div>
            </div>

            <!-- horizontal line -->
            <div class="col col-md-12">
              <hr class="col-md-12 float-left" style="padding: 0px; width: 95%; border-top: 2px solid  #deceff;">
            </div>

            <!-- form submit button -->
            <div class="row col col-md-12 m-auto" id="edit">
              <div class="col col-md-2 form-group float-right"></div>
              <div id="edit_button" class="col col-md-4 form-group float-right">
                <button class="btn  form-control font-weight-bold" onclick="edit();" style="background-color: #deceff;color: #002f6d;">Modifier</button>
              </div>
              <!--div id="password_button" class="col col-md-6 form-group float-right">
                <a href="{{ route('changepass') }}" class="btn form-control font-weight-bold" style="background-color: #deceff;color: #002f6d;width: max-content;">Change mot de passe</a>
              </div-->
            </div>

            <div class="row col col-md-12 m-auto" id="update_cancel" style="display: none;">
              <div class="col col-md-2 form-group float-right"></div>
              <div id="cancel_button" class="col col-md-4 form-group float-right">
                <button class="btn  form-control font-weight-bold" onclick="edit(true);" style="background-color: #deceff;color: #002f6d;">Retour</button>
              </div>
              <div id="update_button" class="col col-md-4 form-group float-right">
                <button class="btn  form-control font-weight-bold" onclick="updateAdminDetails();" style="background-color: #deceff;color: #002f6d;width: max-content;border: none;">Sauvegarder</button>
              </div>
            </div>
            <!-- result message -->
            <div id="admin_acknowledgement" class="col-md-12 h5 text-success font-weight-bold text-center" style="font-family: sans-serif;"></div>
          </div>
        </div>
        <hr style="border-top: 2px solid #deceff;">
      </div>
    </div>
  </body>
</html>