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
<img src="slike/lemondelogo.png" class="logo">
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

    if(isset($_POST["title"],$_POST["about"],$_POST["content"],$_POST["category"], $_FILES['slika']))
    {
        $foto = $_FILES["slika"]["name"];
        $temp_foto = $_FILES["slika"]["tmp_name"];
        $naslov = $_POST["title"];
        $ksadrzaj = $_POST["about"];
        $sadrzaj = $_POST["content"];
        $kategorija = $_POST["category"];
        if(isset($_POST['archive']))
        {
            $prikazati = $_POST['archive'];
        }
        else
        {
            $prikazati = 0;
        }
    }

    $folder = "images/". $foto;


    $query="INSERT INTO Clanak (Naslov, Sazetak, Sadrzaj, Kategorija, Foto, Arhiva) values (?, ?, ?, ?, ?, ?)";
    $stmt=mysqli_stmt_init($dbc);
    if (mysqli_stmt_prepare($stmt, $query))
    {
        mysqli_stmt_bind_param($stmt,'sssssi',$naslov,$ksadrzaj,$sadrzaj,$kategorija,$foto,$prikazati);
        mysqli_stmt_execute($stmt);
    }

    move_uploaded_file($temp_foto, $folder);

    ?>



    <div class="unos_container">
            <div class="unos_column">
                <article>
                    <p>
                        <?php
                            echo $kategorija;
                        ?>
                    </p>
                    <h1>
                        <?php
                            echo $naslov;
                        ?>
                    </h1>
                    <p>AUTOR:</p>
                    <p>OBJAVLJENO:</p>
                    <?php
                        echo "<img src='images/$foto'>";
                    ?> 
                    <p>
                    <?php
                    echo $ksadrzaj;
                    ?>
                    </p>
                    <p>
                    <?php
                    echo $sadrzaj;
                    ?>
                    </p>    
                </article>
            </div>
    </div>
</main>             
<br><br><br>
<div class="clear"></div>
<footer>
<hr id="donja">
SUVEZ LE MONDE
</footer>
</body>
</html>







