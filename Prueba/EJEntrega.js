function comprobar() {
    var nombre = document.getElementById("nombre");//El texto de los input en el formulario se comprueba con value.
    var email = document.getElementById("email");
    var pass = document.getElementById("pass");
    var pass2 = document.getElementById("pass2");
    var cont = 0;

    if(nombre.value.length > 0){
        cont++;
    }else{
        var a = document.createElement("div");
        a.innerHTML = "Escribe tu nombre!";
        nombre.after(a);
        nombre.after(document.createElement("br"));
        nombre.after(document.createElement("br"));
    }

    if(email.value.trim().replace(" ","").replace(" ","").length > 0 && email.value.includes("@")){
        cont++;
    }else{
        var a = document.createElement("div");
        a.innerHTML = "Escribe tu email!";
        email.after(a);
        email.after(document.createElement("br"));
        email.after(document.createElement("br"));
    }

    if(pass.value.length >= 8 && pass.value.length <= 10){
        cont++;
    }else{
        var a = document.createElement("div");
        a.innerHTML = "Escribe una contraseña correcta de entre 8 y 10 caracteres!";
        pass.after(a);
        pass.after(document.createElement("br"));
        pass.after(document.createElement("br"));
    }

    if(pass2.value === pass.value && pass2.value.length > 0){
        cont++;
    }else{
        var a = document.createElement("div");
        a.innerHTML = "Las contraseñas no coinciden!";
        pass2.after(a);
        pass2.after(document.createElement("br"));
        pass2.after(document.createElement("br"));
    }

    if(cont == 4){
       return true;
    }
    return false;
}