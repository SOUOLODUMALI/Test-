<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<?php
include("./connexion.php")
?>
<body>
    <header class="position-center ">
        <nav class="container-fluid-sm-xl-md-xxl-container">
            <div class="row">
          <div class="col entete">


                    <ul>
                        <li class="un">
                            <a href="./formulaire.php"> BRIEF
                                </a>
                        </li>
                        <li class="un">
                            <a href="./nouveau.php"> RENDU
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

                            <a href=""> PROFIL  </a></li>

                        <li class="deux">

                            <a href=""> NOTIFS </a></li>

                    </ul>
                </div>
                <div> </div>
                <nav>

    </header>
    <main>
        <section class="mb-5"></section>

<?php
$query="SELECT* FROM `premier` ";
$resultat=mysqli_query ($connection,$query);
if ($resultat){echo'

        <table class=" table table-bordered table-hover ">
            <thead>
                <tr>
                    <th scope="col "></th> Nom</th>
                    <th scope="col ">Pass</th>
                    <th scope="col ">Ville</th>
                    <th scope="col ">File</th>
                </tr>
            </thead>';

            while ($data= mysqli_fetch_assoc($resultat)){echo'
            <tbody>
                <tr>
                  <td>'.$data["Nom"].'</td>
                  <td>'.$data["Pass"].'</td>
                  <td>'.$data["Ville"].'</td>
                  <td>'.$data["File"].'</td>
                </tr>';} echo'
                </tbody>
                </table>
';}
    ?>
     </main>
    <footer></footer>
    <script></script>
</body>

</html>