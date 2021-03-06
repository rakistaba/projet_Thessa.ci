<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Inscription</title>
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
          <a class="nav-link" href="{{ route('home') }}" style="color: #002f6d;">Accueil <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" style=" width:133px;color: #002f6d;">Contactez-nous</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" style=" width: 90px;color: #002f6d;">A propos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}" style=" width: 90px;color: #002f6d;">Connexion</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" style="color: #002f6d;" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Inscription
            </a>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background: #deceff;">
            <a class="dropdown-item" href="{{ route('register') }}">Client</a>
           <a class="dropdown-item" href="{{ route('inscriptionpresta') }}" > Prestataire</a>
                 
            </div>
          </li>
        </ul>
      </div>
    </nav>
<div class="container">
<div class="wrapper">
    <div class="title">
      INSCRIPTION CLIENT
    </div>
  <form action="{{ route('inscriptionclient.submit') }}" method="POST" >
  @csrf
    <div class="form">
       <div class="inputfield">
          <label>Nom</label>
          <input type="text" class="input" id="nom" name="nom">
       </div>  
        <div class="inputfield">
          <label>Pr??noms</label>
          <input type="text" class="input" id="prenoms" name="prenom">
       </div>
       <div class="inputfield">
        <label>Contact</label>
        <input type="number" class="input" id="contact" name="contact">
     </div>  
     <div class="inputfield">
      <label for="adresse">Ville :</label>
        
<select name="ville" id="ville" class="input">
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
             <div class="inputfield">
              <label>Email :</label>
              <input type="email" class="input" id="email" name="email">
           </div> 
           <div class="inputfield">
            <label>Mot de passe :</label>
            <input type="password" class="input" id="passe">
         </div>  
        <div class="inputfield">
            <label>Confirmer mot de passe :</label>
            <input type="password" class="input" id="passe" name="password">
         </div> 
      <div class="inputfield">
        <input type="submit" value="S'inscrire" class="btn">
      </div>
    </div>
  </form>
</div>
</div>	
<footer class="fo">
  <div class="container">
      <center>
          <p>Copyright <small>&copy;</small> Thessa.ci | All Rights Reserved</p>
      </center>
  </div>
  
  
</footer>

 
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="../js/app.js"></script>

</body>
</html>