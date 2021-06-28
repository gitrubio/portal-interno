function seleccionaTipo(value) {
    if (value == "documento" || value == "anuncio"){
        document.getElementById("form").style.display = "block";
        document.getElementById("form_cumpleanios").style.display = "none";
        console.log("If Cumpleaños "+document.getElementById("form_cumpleanios").style.visibility);
        console.log("If Anuncios "+document.getElementById("form").style.visibility);

    }
    else{
      document.getElementById("form_cumpleanios").style.display = "block";
      document.getElementById("form").style.display = "none";
      console.log("Else Cumpleaños "+document.getElementById("form_cumpleanios").style.visibility);
        console.log("Else Anuncios "+document.getElementById("form").style.visibility);
    }
}