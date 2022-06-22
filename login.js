document.getElementById('submit').onclick = function(event) 
{
    var check = true

    var kimePolje = document.getElementById('kime')
    var kime = document.getElementById('kime').value

    var lozinkaPolje = document.getElementById('lozinka')
    var lozinka = document.getElementById('lozinka').value
    
    if(kime === "")
    {
        kimePolje.style.border = "1px dashed red";
        check = false
        document.getElementById('kime_error').innerHTML = "Korisničko ime ne smije biti prazno!"
        document.getElementById('kime_error').style.display = "block"
        document.getElementById('kime_error').style.marginBottom = "15px"
    }
    else 
    {
        kimePolje.style.border="1px solid green";
        document.getElementById("kime_error").innerHTML="";
    }

    if(lozinka === "")
    {
        lozinkaPolje.style.border = "1px dashed red";
        check = false
        document.getElementById('lozinka_error').innerHTML = "Lozinka ne smije biti prazna!"
        document.getElementById('lozinka_error').style.display = "block"
        document.getElementById('lozinka_error').style.marginBottom = "15px"
    }
    else 
    {
        lozinkaPolje.style.border="1px solid green";
        document.getElementById("lozinka_error").innerHTML="";
    }

    if (check != true) 
    {
        event.preventDefault();
    }

}