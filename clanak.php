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
                define('URLPATH', 'images/');
                $id = $_GET['id'];
                $query = "SELECT * FROM Clanak WHERE id=$id";
                $result = mysqli_query($dbc, $query);
                while($row = mysqli_fetch_array($result))
                {
                    echo '<h3>'. $row["kategorija"]. '</h3>
                    <h1>'.$row["naslov"].'</h1> 
                    <h2>'.$row["sazetak"].'</h2>
                    <img id="slika_clanak" src="' . URLPATH . $row['foto'] . '">
                    <p>'.$row["sadrzaj"].'<p>';
                }
            ?>
              
        </main>
        <footer>
            <hr id="donja">
            SUVEZ LE MONDE
        </footer>

</body>
</html>