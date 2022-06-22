<?php
        session_start();
        include 'connect.php';
        if (isset($_POST['submit'])) 
        {
                $username = $_POST['kime'];
                $sql = "SELECT Username, Lozinka, Razina FROM korisnik WHERE Username = ? LIMIT 1";
                $stmt = mysqli_stmt_init($dbc);
                if (mysqli_stmt_prepare($stmt, $sql)) 
                {
                    mysqli_stmt_bind_param($stmt, 's', $username);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_store_result($stmt);
                    mysqli_stmt_bind_result($stmt, $imeKorisnika, $lozinkaKorisnika, $razinaKorisnika);
                    mysqli_stmt_fetch($stmt);
                }

                if (password_verify($_POST['lozinka'], $lozinkaKorisnika) && mysqli_stmt_num_rows($stmt) > 0) 
                {
    
                    $_SESSION['username'] = $imeKorisnika;
                    $_SESSION['razina'] = $razinaKorisnika;
                    header('location: administracija.php');
                } 
                else 
                {
                    echo "Neispravni podaci za prijavu</br>";
                    echo "<a href='administracija.html'> Pokušajte ponovno</a>";
                }
        }
?>