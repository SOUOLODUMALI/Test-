<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <?php 
    include("./connexion.php")

    ?>

    <!-- <header class="position-center ">
        <nav class="container-fluid-sm-xl-md-xxl-container">
            <div class="row justify-content-center">
                <div class="col entete">


                    <ul>
                        <li class="un">
                            <a href="./nouveau.php"> BRIEF
                                </a>
                        </li>
                        <li class="un">
                            <a href=""> RENDU
                                                </a>
                        </li>
                    </ul>
                    <ul>
                        <li class="un"> <a href="">AUTOEVALUATION</a>
                        </li>
                    </ul>
                    <ul>

                        <li class="trois">

                            <a href=""> SIMPLON.AUF @OUAGA - P3  </a></li>

                        <li class="deux">

                            <a href="./table.php"> PROFIL  </a></li>

                        <li class="deux">

                            <a href=""> NOTIFS </a></li>

                    </ul>
                </div>
                <div> </div>
                <nav>

    </header> -->
    <main>
        <div align="center">
            <h1>INSCRIPTION</h1>
        </div>

        <form action="./ajust.php" method="Post">
            <div align="center"> <label class="nom" for="Nom" >Nom</label><input type="text" name="Nom"></div>
            <div align="center"> <label for="Pass">Pass</label> <input type="password" name="Pass"></div>
            <div align="center"> <label for="Ville"> Ville</label> <input type="text" name="Ville"></div>
            <div align="center "> <label for="File ">File</label> <input type="text" name="File"></div>
            <div align="center "><button type="button " class="btn btn-danger " name="submit">submit</button></div>
            <button type="button" class="btn btn-primary p-3"><a class="color" href="./nouveau.php">Accueil</a></button>
        </form>

    </main>
    <section></section>

    <footer></footer>
    <script>
 
var floor;
floor=parseInt(prompt("inserer votre etage"));
if(floor>-2 &floor < 30){
    (alert("vous etes au premier etage Monsieur"));
}
else{
    alert("allez ailleur svp");
}
    </script>
</body>

</html>