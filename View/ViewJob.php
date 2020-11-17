<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" />
    <!-- Css Personnel-->
    <link rel="stylesheet" href="../Style/Css/Style.css">
     <!--Vile CP-->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Oswald:700|Titillium+Web|Fira+Mono">
    <link rel="stylesheet" type="text/css" href="https://vicopo.selfbuild.fr/index.css">

    
    <link rel="icon" href="../Style/Picture/Logo.png" />
    <title>M&eacutegaCasting</title>

  </head>
  <body>
         <?php 
        include('ViewMenu.php');
        ?>
        

            <div class="half">
                <input id="code" placeholder="Code postal" autocomplete="off" autofocus>
            </div>
            <div class="half">
                <input id="city" placeholder="Ville" autocomplete="off">
            </div>
        <div id="output"></div>


        
    <!-- script Ville CP-->
    <script type="text/javascript" src="../Style/Js/CityCP/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../Style/Js/CityCP/index.js"></script>

    <!-- script Bootstrap-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>
