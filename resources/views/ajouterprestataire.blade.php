<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ajouter Prestataire</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<script src="bootstrap/js/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/sidenav.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/validateForm.js"></script>
    <script src="js/restrict.js"></script>
  </head>
  <body style="background-color:#deceff;">
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
            <li class="treeview"><a href="{{ route('postulant') }}" style="color: #002f6d;">G??rer prestataire</a></li>
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
             <li class="treeview"><a href="{{ route('client') }}" style="color: #002f6d;">G??rer les clients</a></li>
          </ul>
    </div>
  </div> <!-- card-body class -->
</div> <!-- card  -->
</div>
    <div class="container-fluid"style="background-color: #deceff;">
      <div class="container">
            <section class="row content-header">
                <div class="header-title col-md-11">
                  <h1 class="logo-caption"><i class="fa fa-handshake p-2"style="color: #002f6d;"></i> <span class="tweak" style="color:#002f6d;"> Ajouter Prestataire</span></h1>
                   
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
          <hr style="border-top: 2px solid #deceff;">
        <!-- header section -->
          <div class="row">
          <div class="row col col-md-6">
            <!-- customer details content -->
<!-- customer name control -->
@if( Session::get('succes'))
    <div class="alert alert-succes">{{Session::get('succes')}}  </div>
@endif
<form action="{{ route('ajoupresta_submit') }}" method="POST" enctype="multipart/form-data">
    @csrf
<div class="row col col-md-12">
    <div class="col col-md-12 form-group">
      <label class="font-weight-bold" for="name">Nom du prestataire :</label>
      <input type="text" class="form-control" placeholder="Nom" id="name" name="nom">
       </div>
  </div>
  <div class="row col col-md-12">
    <div class="col col-md-12 form-group">
      <label class="font-weight-bold" for="prenom">Pr??noms du prestataire :</label>
      <input type="text" class="form-control" placeholder="Pr??noms" id="prenom" name="prenom">
       </div>
  </div>
  
  <!-- customer Contact du prestataire control -->
  <div class="row col col-md-12">
    <div class="col col-md-12 form-group">
      <label class="font-weight-bold" for="number">Contact du prestataire :</label>
      <input type="number" class="form-control" placeholder="Contact" id="number" name="contact">
       </div>
  </div>
  <div class="row col col-md-12">
    <label for=""class="font-weight-bold"style="margin-left: 15px;">Domaine de pr??f??rence :</label>
      
     <div class="col col-md-12 form-group">
        <label  for="maison">Maison</label>
          <input type="checkbox" value="maison"  name="domaine[]" id="categories" >
          <label  for="hotel">Hotel</label>
          <input type="checkbox" value="hotel" name="domaine[]" id="categories">
          <label  for="restaurant">Les Restaurants</label>
          <input type="checkbox" value="restaurants" name="domaine[]" id="categories">
         
          <label  for="bar_maquis">Bar-maquis</label>
          <input type="checkbox" value="bar-maquis" name="domaine[]" id="categories">
           <label  for="grandes_surfaces">Grandes surfaces</label>
          <input type="checkbox" value="grandes surfaces" name="domaine[]" id="categories">
          <label  for="evenements_fetes">Ev??nements-f??tes</label>
          <input type="checkbox" value="??v??nements-f??tes" name="domaine[]" id="categories">
          </div>
  </div>
  <div class="row col col-md-12">
    <div class="col col-md-12 form-group">
      <label class="font-weight-bold" for="metier">Metier :</label>
      <select name="metier" class="form-control" id="metiers">
        <option value="#"></option>
        <option value="Servante">Servante</option>
        <option value="Nounou">Nounou</option>
        <option value="Chauffeur">Chauffeur</option>
        <option value="Technicien de surface">Technicien de surface</option>
        <option value="Serveur">Serveur</option>
        <option value="Serveuse">Serveuse</option>
      </select>
    </div>
  </div>
  <div class="row col col-md-12">
    <div class="col col-md-12 form-group">
      <label class="font-weight-bold" for="langues">Langues ou ethnies :</label>
      <input type="text" class="form-control" placeholder="Langues ou ethnies" id="langues" name="langue">
       </div>
  </div>
  
  <!-- customer address control -->
  <div class="row col col-md-12">
    <div class="col col-md-12 form-group">
      <label class="font-weight-bold" for="ville">Ville :</label>
        
<select name="ville" id="ville"class="form-control">
<option selected disabled>Ville</option>
<option value="Abengourou">Abengourou</option>
<option value="Abidjan">Abidjan</option>
<option value="Aboisso">Aboisso</option>
<option value="Abongoua">Abongoua</option>
<option value="Adaou">Adaou</option>
<option value="Adiak??">Adiak??</option>
<option value="Adjouan">Adjouan</option>
<option value="Adzop??">Adzop??</option>
<option value="Agboville">Agboville</option>
<option value="Agnibil??krou">Agnibil??krou</option>
<option value="Akoup??">Akoup??</option>
<option value="Al??p??">Al??p??</option>
<option value="Ananda">Ananda</option>
<option value="Ann??p??">Ann??p??</option>
<option value="Anyama">Anyama</option>
<option value="Appimadoum">Appimadoum</option>
<option value="Attingui??">Attingui??</option>
<option value="Bacanda">Bacanda</option>
<option value="Badikaha">Badikaha</option>
<option value="Bako">Bako</option>
<option value="Bangolo">Bangolo</option>
<option value="B??cou??fin">B??cou??fin</option>
<option value="B??di-Goazon">B??di-Goazon</option>
<option value="B??oumi">B??oumi</option>
<option value="Betti??">Betti??</option>
<option value="Biankouma">Biankouma</option>
<option value="Bi??by">Bi??by</option>
<option value="Bingerville">Bingerville</option>
<option value="Bin-Houy??">Bin-Houy??</option>
<option value="Blapleu">Blapleu</option>
<option value="Bl??nim??ouin">Bl??nim??ouin</option>
<option value="Bless??gu??">Bless??gu??</option>
<option value="Blol??quin">Blol??quin</option>
<option value="Boahia">Boahia</option>
<option value="Bocanda">Bocanda</option>
<option value="Bogouin??">Bogouin??</option>
<option value="Bondoukou">Bondoukou</option>
<option value="Bongouanou">Bongouanou</option>
<option value="Bonoua">Bonoua</option>
<option value="Bouafl??">Bouafl??</option>
<option value="Bouak??">Bouak??</option>
<option value="Bouandougou">Bouandougou</option>
<option value="Bouna">Bouna</option>
<option value="Boundiali">Boundiali</option>
<option value="Brofodoum??">Brofodoum??</option>
<option value="Dabakala">Dabakala</option>
<option value="Dabou">Dabou</option>
<option value="Dabouyo">Dabouyo</option>
<option value="Daloa ">Daloa</option>
<option value="Danan??">Danan??</option>
<option value="Daoukro">Daoukro</option>
<option value="Diamarakro">Diamarakro</option>
<option value="Dianra">Dianra</option>
<option value="Diawalla">Diawalla</option>
<option value="Dibok??">Dibok??</option>
<option value="Didi??vi">Didi??vi</option>
<option value="Dignago">Dignago</option>
<option value="Dimbokro">Dimbokro</option>
<option value="Divo">Divo</option>
<option value="Dok??">Dok??</option>
<option value="Doudoukou">Doudoukou</option>
<option value="Du??kou??">Du??kou??</option>
<option value="Fadiadougou">Fadiadougou</option>
<option value="Famienkro">Famienkro</option>
<option value="Ferkess??dougou">Ferkess??dougou</option>
<option value="Gagnoa">Gagnoa</option>
<option value="Gbangb??gouin??">Gbangb??gouin??</option>
<option value="Gbangb??gouin??-Yati">Gbangb??gouin??-Yati</option>
<option value="Gohouo-Zagna">Gohouo-Zagna</option>
<option value="Gomon">Gomon</option>
<option value="Gouin??">Gouin??</option>
<option value="Grand-Bassam">Grand-Bassam</option>
<option value="Grand-Lahou">Grand-Lahou</option>
<option value="Guessabo">Guessabo</option>
<option value="Guib??roua">Guib??roua</option>
<option value="Gu??yo">Gu??yo</option>
<option value="Guinglo-Tahouak??">Guinglo-Tahouak??</option>
<option value="Guitry">Guitry</option>
<option value="Hir??">Hir??</option>
<option value="Issia">Issia</option>
<option value="Jacqueville">Jacqueville</option>
<option value="Kahin-Zarabaon">Kahin-Zarabaon</option>
<option value="Kani">Kani</option>
<option value="Kanzra">Kanzra</option>
<option value="Katiola">Katiola</option>
<option value="Korhogo">Korhogo</option>
<option value="Koro">Koro</option>
<option value="Kouakro">Kouakro</option>
<option value="Kounahiri">Kounahiri</option>
<option value="Koun-Fao">Koun-Fao</option>
<option value="Kouto">Kouto</option>
<option value="Koutouba">Koutouba</option>
<option value="Kpata">Kpata</option>
<option value="Lakota">Lakota</option>
<option value="Lolobo">Lolobo</option>
<option value="Lovigui??">Lovigui??</option>
<option value="Mamini">Mamini</option>
<option value="Man">Man</option>
<option value="Mankono">Mankono</option>
<option value="Mantongouin??">Mantongouin??</option>
<option value="Marahou??">Marahou??</option>
<option value="M'Bahiakro">M'Bahiakro</option>
<option value="M'batto">M'batto</option>
<option value="Morondo">Morondo</option>
<option value="Nafana (Prikro)">Nafana (Prikro)</option>
<option value="N'douci">N'douci</option>
<option value="N'Gokro">N'Gokro</option>
<option value="Niakaramandougou">Niakaramandougou</option>
<option value="Niamb??zaria">Niamb??zaria</option>
<option value="Niell??">Niell??</option>
<option value="Nofou">Nofou</option>
<option value="Odienn??">Odienn??</option>
<option value="Oum??">Oum??</option>
<option value="Ouyably-Gnondrou">Ouyably-Gnondrou</option>
<option value="Pacobo">Pacobo</option>
<option value="P??h??">P??h??</option>
<option value="Sakassou">Sakassou</option>
<option value="Samatiguila">Samatiguila</option>
<option value="Sandougou-Soba">Sandougou-Soba</option>
<option value="San-P??dro">San-P??dro</option>
<option value="Sassandra">Sassandra</option>
<option value="S??gu??la">S??gu??la</option>
<option value="Sinfra">Sinfra</option>
<option value="Soubr??">Soubr??</option>
<option value="Tabou">Tabou</option>
<option value="Tafir??">Tafir??</option>
<option value="Ta??">Ta??</option>
<option value="Tanda">Tanda</option>
<option value="Tiagba">Tiagba</option>
<option value="Tiapoum">Tiapoum</option>
<option value="Tiassal??">Tiassal??</option>
<option value="Ti??bissou">Ti??bissou</option>
<option value="Ti??dio">Ti??dio</option>
<option value="Ti??ningbou??">Ti??ningbou??</option>
<option value="Tingr??la">Tingr??la</option>
<option value="Tinhou">Tinhou</option>
<option value="Tiobli">Tiobli</option>
<option value="Togoni??r??">Togoni??r??</option>
<option value="Touba">Touba</option>
<option value="Tougbo">Tougbo</option>
<option value="Toulepleu">Toulepleu</option>
<option value="Toumodi">Toumodi</option>
<option value="Toumoukoro">Toumoukoro</option>
<option value="Vavoua">Vavoua</option>
<option value="Varal??">Varal??</option>
<option value="Yakass??-M??">Yakass??-M??</option>
<option value="Yamoussoukro">Yamoussoukro</option>
<option value="Yaou">Yaou</option>
<option value="Yorodougou">Yorodougou</option>
<option value="Zonneu">Zonneu</option>
<option value="Zouan-Hounien">Zouan-Hounien</option>
</select>
</div>
      
  </div>
  
  
  <div class="row col col-md-12">
    <div class="col col-md-12 form-group">
      <label class="font-weight-bold" for="sexe">Sexe :</label>
      <select name="sexe"class="form-control" id="sexe">
        <option value="#"></option>
        <option value="Homme">Homme</option>
        <option value="Femme">Femme</option>
      </select>
       </div>
  </div>
  <div class="row col col-md-12">
    <div class="col col-md-12 form-group">
      <label class="font-weight-bold" for="image">Image :</label>
      <input type="file" class="form-control" name="image" id="image" name="image">
        </div>
  </div>
  
  <div class="row col-md-12">
  <div class="col-md-12 form-group ">
    <label class="font-weight-bold" for="date">Age :&emsp;</label>
    <input type="number" class="form-control" id="age" name="age">
   </div>
  </div>
  <div class="row col col-md-12">
    <div class="col col-md-12 form-group">
      <label class="font-weight-bold" for="email">Email :</label>
      <input type="email" class="form-control" name="email" id="email" name="email">
        </div>
  </div>
  <div class="row col col-md-12">
  <div class="col col-md-12 form-group">
    <label class="font-weight-bold" for="passe">Mot de passe :</label>
    <input type="password" class="form-control"  id="passe" name="password">
      </div>
</div>

<div class="row col col-md-12">
  <div class="col col-md-12 form-group">
    <label class="font-weight-bold" for="image">Confirmer mot de passe :</label>
    <input type="password" class="form-control" name="password" id="passe">
      </div>
</div>
   <div class="col-md-12 form-group form-inline">
    <label class="font-weight-bold" for="description">Description :&emsp;</label>
    <textarea name="description"class="form-control" style="width: 93%;" id="description" cols="30" rows="4"></textarea>
   </div>
   <div class="row col col-md-12">
    &emsp;
    <div class="form-group m-auto">
      <button class="btn " style="background-color:#deceff;color:#002f6d; font-weight: bold;">Ajouter</button>
    </div>
  </div>
  </form>
</div>
<div class="col col-md-12">
    <hr class="col-md-12 float-left" style="padding: 0px; width: 95%; border-top: 2px solid  #deceff;">
  </div>
  
  <!-- form submit button -->
  
  
</div>
  
  </div>
  
  <!-- horizontal line -->
  
  <!-- result message -->
  <div id="customer_acknowledgement" class="col-md-12 h5 text-success font-weight-bold text-center" style="font-family: sans-serif;"></div>
  
          </div>
        </div>
        <hr style="border-top: 2px solid #deceff;">
      </div>
    </div>
  </body>
</html>
