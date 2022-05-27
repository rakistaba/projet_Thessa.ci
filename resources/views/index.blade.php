
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Accueil</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/card.css">
    <link rel="stylesheet" href="css/style1.css">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
      /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
  </style>
  </head>
    <body>

      <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #deceff;">
        <a class="navbar-brand" href="#"> <img src="image/WhatsApp Image 2022-03-25 at 14.54.29.jpeg" alt="mon image">
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
              <a class="nav-link" href="#" style=" width:132px;color: #002f6d;">Contactez-nous</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" style=" width: 85px;color: #002f6d;">A propos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}" style=" width: 90px;color: #002f6d;">Connexion</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" style="color: #002f6d;" href="/" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
<div class="container" >
<div class="wrapper">
  <ul class="dynamic-txts">
 <li><span>Bienvenue A Thessa.ci</span></li>
 <li><span>Welcome To Thessa.ci</span></li>
 <li><span>Bienvenue A Thessa.ci</span></li>
 <li><span>Welcome To Thessa.ci</span></li>

</ul>
</div>
</div>
<div class="container-fluid" >




        <div style="text-align: center;border: 2px solid #deceff; background-color: #fff;margin: 3%; margin-right: 25%;margin-left: 25%; border-radius: 10px 10px 10px 10px;padding-bottom: 2px;padding-top: 2px;padding-right: 2px;padding-left: 2px;">

        <form class="form-inline" action="/recherche/" method="get">
            <fieldset>
              <div class="input-group">
                <input id="saisie" style="border-radius: 5px 5px 5px 5px;" name="saisie" type="text" class="form-control" aria-label="Saisie de mots clés" required="required">
                <div class="input-group-prepend">
                  <select id="categorie" name="categorie" class="form-control">
                    <option selected="selected" value="0">Categorie</option>
                      <option value="">Servante</option>
                      <option value="">Nounou</option>
                      <option value="">Chauffeur</option>
                      <option value="">Technicien de surface</option>
                      <option value="">Serveur</option>
                      <option value="">Serveuse</option>
                    </select>
                  </select>
                </div>
                <div class="input-group-prepend">
                    <select id="ville" name="ville" class="form-control">
                      <option selected="selected" value="0">Ville</option>
                        <option value="Abengourou">Abengourou</option>
                        <option value="Abidjan">Abidjan</option>
                        <option value="Aboisso">Aboisso</option>
                        <option value="Abongoua">Abongoua</option>
                        <option value="Adaou">Adaou</option>
                        <option value="Adiaké">Adiaké</option>
                        <option value="Adjouan">Adjouan</option>
                        <option value="Adzopé">Adzopé</option>
                        <option value="Agboville">Agboville</option>
                        <option value="Agnibilékrou">Agnibilékrou</option>
                        <option value="Akoupé">Akoupé</option>
                        <option value="Alépé">Alépé</option>
                        <option value="Ananda">Ananda</option>
                        <option value="Annépé">Annépé</option>
                        <option value="Anyama">Anyama</option>
                        <option value="Appimadoum">Appimadoum</option>
                        <option value="Attinguié">Attinguié</option>
                        <option value="Bacanda">Bacanda</option>
                        <option value="Badikaha">Badikaha</option>
                        <option value="Bako">Bako</option>
                        <option value="Bangolo">Bangolo</option>
                        <option value="Bécouéfin">Bécouéfin</option>
                        <option value="Bédi-Goazon">Bédi-Goazon</option>
                        <option value="Béoumi">Béoumi</option>
                        <option value="Bettié">Bettié</option>
                        <option value="Biankouma">Biankouma</option>
                        <option value="Biéby">Biéby</option>
                        <option value="Bingerville">Bingerville</option>
                        <option value="Bin-Houyé">Bin-Houyé</option>
                        <option value="Blapleu">Blapleu</option>
                        <option value="Bléniméouin">Bléniméouin</option>
                        <option value="Blességué">Blességué</option>
                        <option value="Bloléquin">Bloléquin</option>
                        <option value="Boahia">Boahia</option>
                        <option value="Bocanda">Bocanda</option>
                        <option value="Bogouiné">Bogouiné</option>
                        <option value="Bondoukou">Bondoukou</option>
                        <option value="Bongouanou">Bongouanou</option>
                        <option value="Bonoua">Bonoua</option>
                        <option value="Bouaflé">Bouaflé</option>
                        <option value="Bouaké">Bouaké</option>
                        <option value="Bouandougou">Bouandougou</option>
                        <option value="Bouna">Bouna</option>
                        <option value="Boundiali">Boundiali</option>
                        <option value="Brofodoumé">Brofodoumé</option>
                        <option value="Dabakala">Dabakala</option>
                        <option value="Dabou">Dabou</option>
                        <option value="Dabouyo">Dabouyo</option>
                        <option value="Daloa ">Daloa</option>
                        <option value="Danané">Danané</option>
                        <option value="Daoukro">Daoukro</option>
                        <option value="Diamarakro">Diamarakro</option>
                        <option value="Dianra">Dianra</option>
                        <option value="Diawalla">Diawalla</option>
                        <option value="Diboké">Diboké</option>
                        <option value="Didiévi">Didiévi</option>
                        <option value="Dignago">Dignago</option>
                        <option value="Dimbokro">Dimbokro</option>
                        <option value="Divo">Divo</option>
                        <option value="Doké">Doké</option>
                        <option value="Doudoukou">Doudoukou</option>
                        <option value="Duékoué">Duékoué</option>
                        <option value="Fadiadougou">Fadiadougou</option>
                        <option value="Famienkro">Famienkro</option>
                        <option value="Ferkessédougou">Ferkessédougou</option>
                        <option value="Gagnoa">Gagnoa</option>
                        <option value="Gbangbégouiné">Gbangbégouiné</option>
                        <option value="Gbangbégouiné-Yati">Gbangbégouiné-Yati</option>
                        <option value="Gohouo-Zagna">Gohouo-Zagna</option>
                        <option value="Gomon">Gomon</option>
                        <option value="Gouiné">Gouiné</option>
                        <option value="Grand-Bassam">Grand-Bassam</option>
                        <option value="Grand-Lahou">Grand-Lahou</option>
                        <option value="Guessabo">Guessabo</option>
                        <option value="Guibéroua">Guibéroua</option>
                        <option value="Guéyo">Guéyo</option>
                        <option value="Guinglo-Tahouaké">Guinglo-Tahouaké</option>
                        <option value="Guitry">Guitry</option>
                        <option value="Hiré">Hiré</option>
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
                        <option value="Loviguié">Loviguié</option>
                        <option value="Mamini">Mamini</option>
                        <option value="Man">Man</option>
                        <option value="Mankono">Mankono</option>
                        <option value="Mantongouiné">Mantongouiné</option>
                        <option value="Marahoué">Marahoué</option>
                        <option value="M'Bahiakro">M'Bahiakro</option>
                        <option value="M'batto">M'batto</option>
                        <option value="Morondo">Morondo</option>
                        <option value="Nafana (Prikro)">Nafana (Prikro)</option>
                        <option value="N'douci">N'douci</option>
                        <option value="N'Gokro">N'Gokro</option>
                        <option value="Niakaramandougou">Niakaramandougou</option>
                        <option value="Niambézaria">Niambézaria</option>
                        <option value="Niellé">Niellé</option>
                        <option value="Nofou">Nofou</option>
                        <option value="Odienné">Odienné</option>
                        <option value="Oumé">Oumé</option>
                        <option value="Ouyably-Gnondrou">Ouyably-Gnondrou</option>
                        <option value="Pacobo">Pacobo</option>
                        <option value="Péhé">Péhé</option>
                        <option value="Sakassou">Sakassou</option>
                        <option value="Samatiguila">Samatiguila</option>
                        <option value="Sandougou-Soba">Sandougou-Soba</option>
                        <option value="San-Pédro">San-Pédro</option>
                        <option value="Sassandra">Sassandra</option>
                        <option value="Séguéla">Séguéla</option>
                        <option value="Sinfra">Sinfra</option>
                        <option value="Soubré">Soubré</option>
                        <option value="Tabou">Tabou</option>
                        <option value="Tafiré">Tafiré</option>
                        <option value="Taï">Taï</option>
                        <option value="Tanda">Tanda</option>
                        <option value="Tiagba">Tiagba</option>
                        <option value="Tiapoum">Tiapoum</option>
                        <option value="Tiassalé">Tiassalé</option>
                        <option value="Tiébissou">Tiébissou</option>
                        <option value="Tiédio">Tiédio</option>
                        <option value="Tiéningboué">Tiéningboué</option>
                        <option value="Tingréla">Tingréla</option>
                        <option value="Tinhou">Tinhou</option>
                        <option value="Tiobli">Tiobli</option>
                        <option value="Togoniéré">Togoniéré</option>
                        <option value="Touba">Touba</option>
                        <option value="Tougbo">Tougbo</option>
                        <option value="Toulepleu">Toulepleu</option>
                        <option value="Toumodi">Toumodi</option>
                        <option value="Toumoukoro">Toumoukoro</option>
                        <option value="Vavoua">Vavoua</option>
                        <option value="Varalé">Varalé</option>
                        <option value="Yakassé-Mé">Yakassé-Mé</option>
                        <option value="Yamoussoukro">Yamoussoukro</option>
                        <option value="Yaou">Yaou</option>
                        <option value="Yorodougou">Yorodougou</option>
                        <option value="Zonneu">Zonneu</option>
                        <option value="Zouan-Hounien">Zouan-Hounien</option>
                    </select>
                  </div>
                   <div class="input-group-append">
                    <button style="clip-path: circle();width: 100%;padding: 6px;margin-left: 5px;"><i class="fa fa-search"></i></button>
              </div>
            </fieldset>
          </form>

        </div>
  
  <div class="row " style="margin-left:80px;">
  @foreach ($prests as $prest)
    <div class="col-md-12 col-sm-6 col-lg-3">
      <img src="{{asset('photo'.'/'.$prest->imagePath)}}" style="width:120px;" name="image"/>
      <div class="caption">
            <h4>{{ $prest->nom_prest }}</h4>
            <h4>{{ $prest->prenom_prest }}</h4>
            <p>{{ $prest->metier_prest }}</p>
            <p>{{ $prest->ville_prest }}</p>  
        <div class="lower-container">
            <a href="{{ route('login') }}" class="btn">Voir profile</a>
            <!--a href="#" class="btn">Recruter</!--a-->
        </div>
      </div>

    </div>
@endforeach
{{-- <div class="col-md-12 col-sm-6 col-lg-3">
<img src="images/logo.jpg"/>
<div class="caption">
<h4>Evariste toma</h4>
<p>technicien de surface</p>
<p>Abidjan</p>
<div class="lower-container">
        <a href="{{ route('voirprofile') }}" class="btn">Voir profile</a>
        <a href="#" class="btn">Recruter</a>
</div>
</div>

</div>
<div class="col-md-12 col-sm-6 col-lg-3">
  <img src="images/logo.jpg"/>
  <div class="caption">
    <h4>Evariste toma</h4>
    <p>technicien de surface</p>
    <p>Abidjan</p>
    <div class="lower-container">
        <a href="{{ route('voirprofile') }}" class="btn">Voir profile</a>
        <a href="#" class="btn">Recruter</a>
</div>
  </div>


</div>
<div class="col-md-12 col-sm-6 col-lg-3">
  <img src="images/logo.jpg"/>
  <div class="caption">
    <h4>Evariste toma</h4>
    <p>technicien de surface</p>
    <p>Abidjan</p>
    <div class="lower-container">
        <a href="{{ route('voirprofile') }}" class="btn">Voir profile</a>
        <a href="#" class="btn">Recruter</a>
</div>
  </div>


</div>
<div class="col-md-12 col-sm-6 col-lg-3">
  <img src="images/logo.jpg"/>
  <div class="caption">
    <h4>Evariste toma</h4>
    <p>technicien de surface</p>
    <p>Abidjan</p>
    <div class="lower-container">
        <a href="{{ route('voirprofile') }}" class="btn">Voir profile</a>
        <a href="#" class="btn">Recruter</a>
</div>
  </div>
</div>
<div class="col-md-12 col-sm-6 col-lg-3">
  <img src="images/logo.jpg"/>
  <div class="caption">
    <h4>Evariste toma</h4>
    <p>technicien de surface</p>
    <p>Abidjan</p>
    <div class="lower-container">
        <a href="{{ route('voirprofile') }}" class="btn">Voir profile</a>
        <a href="#" class="btn">Recruter</a>
</div>
  </div>


</div>
<div class="col-md-12 col-sm-6 col-lg-3">
  <img src="images/logo.jpg"/>
  <div class="caption">
    <h4>Evariste toma</h4>
    <p>technicien de surface</p>
    <p>Abidjan</p>
    <div class="lower-container">
        <a href="{{ route('voirprofile') }}" class="btn">Voir profile</a>
        <a href="#" class="btn">Recruter</a>
</div>
  </div>


</div>
<div class="col-md-12 col-sm-6 col-lg-3">
  <img src="images/logo.jpg"/>
  <div class="caption">
    <h4>Evariste toma</h4>
    <p>technicien de surface</p>
    <p>Abidjan</p>
    <div class="lower-container">
        <a href="{{ route('voirprofile') }}" class="btn">Voir profile</a>
        <a href="#" class="btn">Recruter</a>
</div>
  </div>


</div>
<div class="col-md-12 col-sm-6 col-lg-3">
  <img src="images/logo.jpg"/>
  <div class="caption">
    <h4>Evariste toma</h4>
    <p>technicien de surface</p>
    <p>Abidjan</p>
    <div class="lower-container">
        <a href="{{ route('voirprofile') }}" class="btn">Voir profile</a>
        <a href="#" class="btn">Recruter</a>
</div>
  </div> --}}


</div>

<div >
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

<!-- ClientLTE App -->
<script src="dist/js/clientlte.min.js"></script>

       <script src="js/app.js"></script>


    </body>
</html>

