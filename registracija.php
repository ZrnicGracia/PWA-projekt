<?php

    include 'connect.php';

    if(isset($_POST["ime"],$_POST["prezime"],$_POST["username"],$_POST["lozinka"]))
            {
                $ime = $_POST["ime"];
                $prezime = $_POST["prezime"];
                $username = $_POST["username"];
                $lozinka = password_hash($_POST["lozinka"], CRYPT_BLOWFISH);
                $razina = 0;


                $sql = "SELECT Username From Korisnik WHERE Username=?";
                $check_stmt = mysqli_stmt_init($dbc);
                if (mysqli_stmt_prepare($check_stmt, $sql))
                {
                    mysqli_stmt_bind_param($check_stmt,'s',$username);
                    mysqli_stmt_execute($check_stmt);
                    $user = mysqli_stmt_fetch($check_stmt);

                    if(!$user)
                    {

                        $query="INSERT INTO Korisnik (Ime, Prezime, Username, Lozinka, Razina) values (?, ?, ?, ?, ?)";
                        $stmt=mysqli_stmt_init($dbc);
                        if (mysqli_stmt_prepare($stmt, $query))
                        {
                            mysqli_stmt_bind_param($stmt,'ssssi',$ime,$prezime,$username,$lozinka,$razina);
                            mysqli_stmt_execute($stmt);
                            echo 'Uspješno ste se registrirali.<br>';
                            echo '<a href="administracija.html">Prijavi se! </a>';

                        }

                    }
                    else
                    {
                        echo 'Korisničko ime već postoji';
                        echo '<a href="registracija.html">Pokušajte ponovno!</a>';
                    }
                }
            }
?>