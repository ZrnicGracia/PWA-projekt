<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Martel:wght@200&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Maven+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>   
    
        <header>
            <img src="images/lemondelogo.png" class="logo">
            <hr>
            <nav>
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="politika.html">POLITIQUE</a></li>
                <li><a href="sport.html">SPORT</a></li>
                <li><a href="administracija.html#">ADMINISTRACIJA</a></li>
                <li><?php 
                    session_start();
                    $imeKorisnika = $_SESSION['username'];
                    $razinaKorisnika =  $_SESSION['razina'];

                    if(isset($_SESSION['username'], $_SESSION['razina']))
                        echo "<a href='odjava.php'> Odjava </a>";
                    else
                        echo "<a href='registracija.html'> Registrirajte se! </a>";
                ?></li>
            </ul>
        </nav>
    </header> 
            
    <?php
        
                
        include 'connect.php';
        define('URLPATH', 'images/');

        $query = "SELECT * FROM Clanak";
        $result = mysqli_query($dbc, $query);
        if((isset($_SESSION['username'])) && $_SESSION['razina'] === 1)
        {
            echo '<div class="container">';
            echo '<h1> Dobrodošli ' . $_SESSION['username'] . "! </h1><br />";
            
            while($row = mysqli_fetch_array($result)) 
            {
                echo '
                <form enctype="multipart/form-data" action="" method="POST" class="forma_unos">
                <label for="naslov">Naslov vjesti:</label>
                <input type="text" name="naslov" class="input" value="'.$row['naslov'].'">
                <label for="sazetak">Kratki sadržaj vijesti (do 50 znakova): </label>
                <textarea name="sazetak" id="" cols="30" rows="10">'.$row['sazetak'].'</textarea>
                <label for="vijest">Sadržaj vijesti:</label>
                <textarea name="sadrzaj" id="" cols="30" rows="10">'.$row['sadrzaj'].'</textarea>
                <label for="foto">Slika:</label>
                <input type="file" class="input-text" id="foto" value="'.$row['foto'].'" name="foto"/> <br><img src="' . URLPATH . $row['foto'] . '" width=100px>
                <label for="kategorija">Kategorija vijesti:</label>
                <select name="kategorija" id="" class="input" value="'.$row['kategorija'].'">
                    <option value="sport">Sport</option>
                    <option value="politika">Politika</option>
                </select>
                <label>Spremiti u arhivu: <br/>';
                if($row['arhiva'] == 0) {
                echo '<input type="checkbox" name="potvrda" id="potvrda"/>
                Arhiviraj? <br/>';
                } 
                else 
                {
                echo '<input type="checkbox" name="potvrda" id="potvrda" checked/> Arhiviraj?';
                }
                echo '</label>
                <input type="hidden" name="id" class="input" value="'.$row['id'].'"><br/>
                <button type="reset" value="Poništi"> Poništi </button>
                <button type="submit" name="update" value="Prihvati"> Izmjeni </button>
                <button type="submit" name="delete" value="Izbriši"> Izbriši </button>
                </form>';
            }
            echo '</div>';
        }
        else
        {
            echo "Dobrodošli ". $imeKorisnika . ", uspješno ste se prijavili, no nažalost nemate administratorska prava."; 
        }
        
?>

    <?php

        if(isset($_POST['delete']))
        {
            $id=$_POST['id'];
            $query = "DELETE FROM Clanak WHERE id='$id' ";
            $result = mysqli_query($dbc, $query);
        }

        if(isset($_POST['update']))
        {
            $foto = $_FILES['foto']['name'];
            $naslov=$_POST['naslov'];
            $sazetak=$_POST['sazetak'];
            $sadrzaj=$_POST['sadrzaj'];
            $kategorija=$_POST['kategorija'];
            if(isset($_POST['potvrda']))
            {
                $potvrda=1;
            }
            else
            {
                $potvrda=0;
            }
            $folder = 'images/'.$foto;
            move_uploaded_file($_FILES["foto"]["tmp_name"], $folder);
            $id=$_POST['id'];
            $query = "UPDATE clanak SET naslov='$naslov', sazetak='$sazetak', sadrzaj='$sadrzaj',
            foto='$foto', kategorija='$kategorija', arhiva='$potvrda' WHERE id='$id' ";
            $result = mysqli_query($dbc, $query);
        }
        
    ?>
</main>
    
</body>
</html>