<DOCTYPE html>
    <head>
        <title>Urgence</title>
    </head>
    <body>
        <style>
            body {
                background-color: red;
            }
        </style>
        <?php 
         // Connexion à la base de données
            $cnnx = mysqli_connect("54.37.76.73", "root", "trjn") or die("SQL user bug");
            mysqli_select_db($cnnx,"Namib") or die("db non trouver");


            //SQL recup commentaire*********************************************************************************
            $rqt = "INSERT INTO Physique (puser,pbip) VALUES (\"user\",3)";
            $qry = mysqli_query($cnnx,$rqt) or die("execution requette");
            //SQL *********************************************************************************

        ?>
        
    </body>
</DOCTYPE>