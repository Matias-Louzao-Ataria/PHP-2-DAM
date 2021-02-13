function comprobar() {
    var nombre = document.getElementById("nombre");//El texto de los input en el formulario se comprueba con value.
    var email = document.getElementById("email");
    var pass = document.getElementById("pass");
    var pass2 = document.getElementById("pass2");
    var cont = 0;

    if(nombre.value.length > 0){
        cont++;
        if(document.getElementById("divnombre") != null){
            document.getElementById("divnombre").innerHTML = "";
        }
    }else{
        var a = document.createElement("div");
        a.id = "divnombre";
        a.innerHTML = "Escribe tu nombre!";
        if(document.getElementById(a.id) == null){
            nombre.after(a);
            nombre.after(document.createElement("br"));
            nombre.after(document.createElement("br"));
        }else{
            document.getElementById(a.id).innerHTML = "Escribe tu nombre!";
        }
    }

    if(email.value.trim().replace(" ","").replace(" ","").length > 0 && email.value.includes("@")){
        cont++;
        if(document.getElementById("divemail") != null){
            document.getElementById("divemail").innerHTML = "";
        }
    }else{
        var a = document.createElement("div");
        a.id = "divemail";
        a.innerHTML = "Escribe tu email!";
        if(document.getElementById(a.id) == null){
            email.after(a);
            email.after(document.createElement("br"));
            email.after(document.createElement("br"));
        }else{
            document.getElementById(a.id).innerHTML = "Escribe tu email!";
        }
    }

    if(pass.value.length >= 8 && pass.value.length <= 10){
        cont++;
        if(document.getElementById("divpass") != null){
            document.getElementById("divpass").innerHTML = "";
        }
    }else{
        var a = document.createElement("div");
        a.id = "divpass";
        a.innerHTML = "Escribe una contraseña correcta de entre 8 y 10 caracteres!";
        if(document.getElementById(a.id) == null){
            pass.after(a);
            pass.after(document.createElement("br"));
            pass.after(document.createElement("br"));
        }else{
            document.getElementById(a.id).innerHTML = "Escribe una contraseña correcta de entre 8 y 10 caracteres!";
        }
    }

    if(pass2.value === pass.value && pass2.value.length > 0){
        cont++;
        if(document.getElementById("divpass2") != null){
            document.getElementById("divpass2").innerHTML = "";
        }
    }else{
        var a = document.createElement("div");
        a.id = "divpass2";
        a.innerHTML = "Las contraseñas no coinciden!";
        if(document.getElementById(a.id) == null){
            pass2.after(a);
            pass2.after(document.createElement("br"));
            pass2.after(document.createElement("br"));
        }else{
            document.getElementById(a.id).innerHTML = "Las contraseñas no coinciden!";
        }
    }

    if(cont == 4){
       return true;
    }
    return false;
}