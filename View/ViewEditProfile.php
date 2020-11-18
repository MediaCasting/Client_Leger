<!doctype html>
<html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Font-awesome-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" />
      
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
      <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/album/">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  
      <!-- Css Personnel-->
      <link rel="stylesheet" href="../Style/Css/Profil.css">
      <link rel="stylesheet" href="../Style/Css/Style.css">

      <!-- Material icon-->
      <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
    
      <!--Vile CP-->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Oswald:700|Titillium+Web|Fira+Mono">


      <link rel="icon" href="../Style/Picture/Logo.png" />
      <title>M&eacutegaCasting</title>

     

    </head>
    <body>
        <?php 
            include('ViewMenu.php');
        ?>
        
        <div class="wrapper ">
            <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
                
                <div class="logo">
                  <a href="http://www.creative-tim.com" class="simple-text logo-normal">
                      <font style="vertical-align: inherit;">
                          <font style="vertical-align: inherit;">
                              Tim créatif
                          </font>
                      </font>
                  </a>
                </div>

                <div class="sidebar-wrapper ps-container ps-theme-default" data-ps-id="f325a482-f1a7-7f36-4a92-ab35ee970848">
                    <ul class="nav">

                        <li class="nav-item  ">
                            <a class="nav-link" href="./dashboard.html">
                                <i class="material-icons">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            tableau de bord
                                        </font>
                                    </font>
                                </i>

                                <p>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            Tableau de bord
                                        </font>
                                    </font>
                                </p>
                            </a>
                        </li>

                        <li class="nav-item active ">
                            <a class="nav-link" href="#">
                                <i class="material-icons">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            la personne
                                        </font>
                                    </font>
                                </i>

                                <p>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            Profil de l'utilisateur
                                        </font>
                                    </font>
                                </p>
                            </a>
                        </li>
                    </ul>

                    <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                        <div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;">
                        </div>
                    </div>

                    <div class="ps-scrollbar-y-rail" style="top: 0px; right: 0px;">
                        <div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;">
                        </div>
                    </div>
                </div>

                <div class="sidebar-background" style="background-image: url(../Style/Picture/sidebar.png) ">
                </div>
            </div>
            <div class="main-panel ps-container ps-theme-default" data-ps-id="e07c1bc5-bbc3-d1d5-8c50-e58ac49d7168">
        <!-- Navbar -->
      
      
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">
                                                Editer le profil
                                            </font>
                                        </font>
                                    </h4>
                                    <p class="card-category">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">
                                                compl&egrave;te ton profil
                                            </font>
                                        </font>
                                    </p>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group bmd-form-group">
                                                    <input placeholder="Entreprise" type="text" class="form-control" disabled="">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group bmd-form-group">
                                                    <input placeholder="Nom d'utilisateur" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group bmd-form-group">
                                                    <input placeholder="Adresse e-mail" type="email" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group bmd-form-group">
                                                    <input placeholder="Pr&eacute;nom" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group bmd-form-group">
                                                    <input placeholder="Nom de famille" type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group bmd-form-group">
                                                    <input placeholder="Une robe" type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group bmd-form-group half">
                                                    <input id="code" placeholder="Code postal" autocomplete="off" type="text" class="form-control" autofocus>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group bmd-form-group half">
                                                    <input id="city" placeholder="Ville" autocomplete="off" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group bmd-form-group">
                                                    <input placeholder="Pays" type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                  
                                        <div id="output"></div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="form-group bmd-form-group">
                                                        <textarea placeholder="A propos de moi" class="form-control" rows="5"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary pull-right">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    Mettre à jour le profil
                                                </font>
                                            </font>
                                        </button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-profile">
                                <div class="card-avatar">
                                    <a href="javascript:;">
                                        <img class="img" src="../assets/img/faces/marc.jpg">
                                    </a>
                                    </div>
                                    <div class="card-body">
                                        <h6 class="card-category text-gray"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">PDG / co-fondateur</font></font></h6>
                                        <h4 class="card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Alec Thompson</font></font></h4>
                                        <p class="card-description">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    description
                                                </font>
                                            </font>
                                        </p>
                                        <a href="javascript:;" class="btn btn-primary btn-round">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    Suivre
                                                </font>
                                            </font>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- ...............-->
            <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                <div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;">
                </div>
            </div>
            <div class="ps-scrollbar-y-rail" style="top: 0px; right: 0px;">
                <div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;">
                </div>
            </div>
        </div>

   
        <!-- script Ville CP-->
        <script type="text/javascript" src="../Style/Js/CityCP/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="../Style/Js/CityCP/index.js"></script>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>

    
</html>
