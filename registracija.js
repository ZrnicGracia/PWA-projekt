document.getElementById('submit').onclick = function(event)
{

    var check = true

    var imePolje = document.getElementById('ime')
    var ime = document.getElementById('ime').value

    var prezimePolje = document.getElementById('prezime')
    var prezime = document.getElementById('prezime').value

    var kimePolje = document.getElementById('username')
    var kime = document.getElementById('username').value

    var lozinkaPolje = document.getElementById('lozinka')
    var lozinka = document.getElementById('lozinka').value

    var ponovi_lozinkuPolje = document.getElementById('ponovi_lozinku')
    var ponovi_lozinku = document.getElementById('ponovi_lozinku').value

    if(ime === "")
    {
        imePolje.style.border = "2px solid red";
        check = false
        document.getElementById('ime_error').innerHTML = "Ime ne smije biti prazno!"
    }
    else 
    {
        imePolje.style.border="2px solid green";
        document.getElementById("ime_error").innerHTML="";
    }

    if(prezime === "")
    {
        prezimePolje.style.border = "2px solid red";
        check = false
        document.getElementById('prezime_error').innerHTML = "Prezime ne smije biti prazno!"
    }
    else 
    {
        prezimePolje.style.border="2px solid green";
        document.getElementById("prezime_error").innerHTML="";
    }

    if(kime.length < 5 || kime.length > 15)
    {
        kimePolje.style.border = "2px solid red";
        check = false
        document.getElementById('username_error').innerHTML = "Korisničko ime mora imati između 5 i 15 znakova!"
    }
    else 
    {
        kimePolje.style.border="2px solid green";
        document.getElementById("username_error").innerHTML="";
    }

    if(lozinka.length <= 7)
    {
        lozinkaPolje.style.border = "2px solid red";
        check = false
        document.getElementById('lozinka_error').innerHTML = "Lozinka mora imati minimalno 8 znakova!"
    }
    else 
    {
        lozinkaPolje.style.border="2px solid green";
        document.getElementById("lozinka_error").innerHTML="";
    }

    if(ponovi_lozinku !== lozinka)
    {
        ponovi_lozinkuPolje.style.border = "2px solid red";
        check = false
        document.getElementById('ponovi_lozinku_error').innerHTML = "Lozinke se moraju podudarati!"
    }
    else 
    {
        ponovi_lozinkuPolje.style.border="2px solid green";
        document.getElementById("ponovi_lozinku_error").innerHTML="";
    }
    
    if (check != true) 
    {
        event.preventDefault();
    }
       
}