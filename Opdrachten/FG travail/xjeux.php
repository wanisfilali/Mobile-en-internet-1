<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="FGT.css" />
    <title>Final Games</title>



</head>

<body>
    <nav>
        <div class="topnav" id="myTopnav">
            <a href="index.html"> Final Games </a>
            <a href="Actualites.html">Actualités</a>
            <a href="Playstation.html">Playstation </a>
            <a href="Nintendo.html">Nintendo </a>
            <a href="XBOX.html">XBOX </a>
            <a href="Contact.html">Contact </a>
            <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
        </div>

    </nav>

    <header id="banner">
        <img src="IMG/LogoFG.jpg" alt="Final Games logo" />
    </header>

    <h1>
        Final Games
    </h1>
    <section class="caseReeks">
        <div style="overflow-x:auto;">
            <div class="table-users">
                <div class="table">
                    <ul>
                        <?php try {

        // connect to mysql

        $pdoConnect = new PDO("mysql:host=localhost;dbname=id4072518_fg","id4072518_wanis","odisee");
    } catch (PDOException $exc) {
        echo $exc->getMessage();
        exit();
    }

   
    
    // mysql query to insert data

    $pdoQuery = "SELECT * FROM xjeux";
    $pdoResult = $pdoConnect -> prepare($pdoQuery);
		$pdoResult -> execute();
		$res = $pdoResult -> fetchAll(PDO::FETCH_ASSOC);
  foreach($res as $row){
    
?>
                        <li>
                            <?php
         echo'<img src="'.$row['image'].'" width="80px" height="80px" />'; ?>
                                <h3>
                                    <?php echo $row['titre'] ;?>
                                </h3>
                                <div align="right">
                                    Prix:
                                    <?php echo $row['prix'] ;?>
                                </div>
                                <p>
                                    <?php echo $row['genre'] ;?>
                                </p>
                                <p> description:
                                    <?php echo $row['description'] ;?>
                                </p>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>

        </div>


    </section><br><br><br>

    <footer class="specialfooter">
        <p> Final Games </p>
        <p>
            <a href="https://fr-fr.facebook.com/finalgamesbxl/" class="fa fa-facebook"></a>
            <a href="https://twitter.com/?lang=fr" class="fa fa-twitter"></a>
            <a href="https://myaccount.google.com/intro" class="fa fa-google"></a></p>
    </footer>

    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }

    </script>

</body>

</html>
