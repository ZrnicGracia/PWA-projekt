<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Martel:wght@200&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Maven+Pro&display=swap" rel="stylesheet">

</head>
<body>   
    
        <header>
            <img src="images/lemondelogo.png" class="logo">
            <hr>
            <nav>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="kategorija.php?kategorija='politika'">POLITIQUE</a></li>
                    <li><a href="kategorija.php?kategorija='sport'">SPORT</a></li>
                    <li><a href="#">ADMINISTRACIJA</a></li>
                    <li><a href="unos.html">UNOS</a></li>
                </ul>
            </nav>
        </header>  
        
    <main>
    <?php
                        include 'connect.php';
                        define('URLPATH', 'images/');

                        $query = "SELECT * FROM clanak WHERE Arhiva = 0 LIMIT 3, 3";
                        $result = mysqli_query($dbc, $query);
                        if($result){ 
                        while($row = mysqli_fetch_array($result)) {
                            echo'<div class="slike1">';
                            echo '<img src="' . URLPATH . $row['foto'] . '"';
                            echo '<img src="' . URLPATH . $row['foto'] . '"';
                            echo '<p><a href="clanak.php?id='.$row['id'].'">'. $row['naslov'] . '</a></p>';
                            echo '</article>';
                            echo '</div>';
                        }
                        }
                    ?>
           
        <h1>Sport</h1>
        <hr id="crta">
        <?php

                        $query = "SELECT * FROM clanak WHERE Arhiva = 0 LIMIT 3";
                        $result = mysqli_query($dbc, $query);
                        if($result){
                            while($row = mysqli_fetch_array($result)) {
                                echo'<div class="slike2">';
                                echo '<img src="' . URLPATH . $row['foto'] . '"';
                                echo '<img src="' . URLPATH . $row['foto'] . '"';
                                echo '<p><a href="clanak.php?id='.$row['id'].'">'. $row['naslov'] . '</a></p>';
                                echo '</article>';
                                echo '</div>';
                            }
                        }
                      
                    ?>
        
    </main>
    <br><br><br>
    <div class="clear"></div>
    <footer>
        <hr id="donja">
        SUVEZ LE MONDE
    </footer>

</body>
</html> 

