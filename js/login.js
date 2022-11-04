function validar() {
    var user = document.getElementById("usuario").value
    var paswd = document.getElementById("contraseña").value

    if(user == "" || paswd == ""){
       var alert = document.getElementById("alert");
       alert.textContent = "Datos incompletos"
       alert.style.display = "block"
        
       alert = document.getElementById("alert").innerHTML
       
    }
}