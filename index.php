
<DOCTYPE html >
    <html>
        <head>
            <title>Cockpit</title>
            <meta charset="utf-8">
            <link rel="stylesheet" href="Stylesheet.css">
            <link rel="icon" href="logocockpitblack.png">
            <?php

            // Connexion à la base de données
            $cnnx = mysqli_connect("54.37.76.73", "root", "trjn") or die("SQL user bug");
            mysqli_select_db($cnnx,"Namib") or die("db non trouver");


    //SQL recup commentaire*********************************************************************************
    $rqt = "SELECT puser,ptemp,pbpm FROM Physique ORDER BY pnum DESC LIMIT 1";
    $qry = mysqli_query($cnnx,$rqt) or die("execution requette");
    //SQL *********************************************************************************

    ?>
            <script>
                function val(){
                    var x = document.getElementById("name").value
                    console.log(x);
                }
                function urgence() {
                    window.open("http://54.37.76.73/red.php");
                     
                     //SQL recup commentaire*********************************************************************************
    //$rqta = "INSERT INTO Physique (puser,pbip) VALUES ($user,3)";
    //$qrya = mysqli_query($cnnx,$rqta) or die("execution requette");
    //SQL *********************************************************************************

                    
                }
                function toggleDarkLight() {
                         document.getElementById("body").style.backgroundImage="url('macos-mojave-night-lightened-r.jpg')";
                         document.getElementById("h1").style.color = "white" ;
                         document.getElementById("data").style.backgroundColor = "white";
                         
                       
                }
            </script>
        </head>
        <body id="body" class="dark-mode">
            <h1 id="h1">Cockpit</h1>
            <div class="maps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15136000.276075058!2d6.634039370935!3d-22.152171054339988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1c74f8343ddbf5a1%3A0xda0fb83c1339ad83!2sNamib+Desert!5e0!3m2!1sen!2sfr!4v1544143748879" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="data" id="data">
                <div class="temp">
                    <input  class="input" id="name">
                    <button id="log" onclick="val()">log-in</button>
                    <button type="button" name="dark_light" onclick="toggleDarkLight()" title="Toggle dark/light mode">🌛</button>
                    <?php
                        while( $obj = mysqli_fetch_object($qry) )
                        {
	
	
                    echo "<b><u class=\"name\">$obj->puser</u></b> <br> $obj->ptemp °C <br> $obj->pbpm bpm<br>  <br>";


                        }

                    ?>
                </div>
                <div class="tempp">
                    <a class="weatherwidget-io" href="https://forecast7.com/en/n22d5714d73/namib/" data-label_1="NAMIB" data-label_2="WEATHER" data-days="3" data-theme="pure"  >NAMIB WEATHER</a>
                <script>
                    !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
                </script>
                
                </div>
            </div>
            <div class="sos">
                <h2 class="urgence" onclick="urgence()">SOS</h2>
            </div>
            <div class="chat">
                <div class=msg_print>
<?php

// Connexion à la base de données
$cnnx = mysqli_connect("localhost", "trojan", "trjn") or die("echo 'userbug'");
mysqli_select_db($cnnx,"test") or die("db non trouver");


//SQL recup commentaire*********************************************************************************
$rqt = "SELECT * FROM msg where censor=0";
$qry = mysqli_query($cnnx,$rqt) or die("execution requette");
//SQL *********************************************************************************

                    ?>


                    <?php
                    while( $obj = mysqli_fetch_object($qry) )
                    {
	
	
        echo "<b><u>$obj->user</u></b> $obj->date <br><br> <p> $obj->msg</p> <br>";


    }

                    ?>
                </div>
            
            </div>
            
           
            
        </body>
    </html>

</DOCTYPE>