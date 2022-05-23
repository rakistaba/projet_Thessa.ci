<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tableau prestataire</title>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
		<script src="{{asset('bootstrap/js/jquery.min.js')}}"></script>
		<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/sidenav.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <script src="{{asset('js/manage_customer.js')}}"></script>
    <script src="{{asset('js/validateForm.js')}}"></script>
    <script src="js/restrict.js"></script>
  </head>
  <body style="max-height: 100%;background-color: #deceff;">
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
            </a>
            <ul class="treeview-menu" style="display: none;">
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

    <div class="container-fluid"style="background-color: #deceff;">
      <div class="container">

        <section class="row content-header">
            <div class="header-title col-md-11">
              <h1 class="logo-caption"><i class="fa fa-group p-2"style="color: #002f6d;"></i>
                <span class="tweak" style="color:#002f6d;">Tableau de récrutements</span></h1>
               
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
            <input type="text" class="form-control" id="" placeholder="Rechercher prestataire" onkeyup="searchCustomer(this.value);">
          </div>

          <div class="col col-md-12">
            <hr class="col-md-12" style="padding: 0px; border-top: 2px solid  #deceff;">
          </div>
       @foreach($clients as $client)
          <div class="col col-md-12 table-responsive">
            <div class="table-responsive">
            	<table class="table table-bordered table-striped table-hover">
            		<thead>
            			<tr>
            				<th style="width: 13%;">Nom du client</th>
                    <th style="width: 13%;">Prénom du client</th>
                    <th style="width: 15%;">Numéro du client</th>
            			</tr>

                  <tr>
                   	<th style="width: 13%;">{{ $client->nom }}</th>
                    <th style="width: 13%;">{{ $client->prenom}}</</th>
                    <th style="width: 15%;">{{ $client->contact}}</th> 
                  </tr>
                    
                  <tr>  
            				<th style="width: 13%;">Nom du prestataire</th>
                    <th style="width: 13%;">Prénom du prestataire</th>
                    <th style="width: 15%;">Numéro du prestataire</th>
                    <th style="width: 17%;">Métier du prestataire</th>
                    <th style="width: 15%;">Action</th>
            			</tr>
                 
                  <tr>
                    <th style="width: 17%;"></th>
                    <th style="width: 13%;"></th>
                    <th style="width: 17%;"></th>
                    <th style="width: 17%;"></th> 

                    <th style="width: 17%;"><button href="" class="btn btn-success btn-sm">
                      <i class="fa fa-check"></i>
                      </button> <button class="btn btn-danger btn-sm">
                        <i class="fa fa-close"></i>
                      </button>
                    </th>
            			</tr>
                  
               

            		</thead>
            		<tbody id="customers_div">
            		</tbody>
            	</table>
            </div>
          </div>
        @endforeach 


        </div>
        <!-- form content end -->
        <hr style="border-top: 2px solid #deceff;">
      </div>
    </div>
  </body>
</html>
