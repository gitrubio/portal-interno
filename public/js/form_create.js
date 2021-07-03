function seleccionaTipo(value) { 
    if(value == "anuncio"){
        
        document.getElementById("form").style.display = "block";
        document.getElementById("form_cumpleanios").style.display = "none";
        document.getElementById("form_documento").style.display = "none";
        
        /*console.log("If Cumpleaños "+document.getElementById("form_cumpleanios").style.visibility);
        console.log("If Anuncios "+document.getElementById("form").style.visibility);*/
        console.log(document.getElementById("tipo").value);
    }

      if(value == "documento"){
        document.getElementById("form_documento").style.display = "block";
        document.getElementById("form_cumpleanios").style.display = "none";
      document.getElementById("form").style.display = "none";
      
      
      /*console.log("Else Cumpleaños "+document.getElementById("form_cumpleanios").style.visibility);
        console.log("Else Anuncios "+document.getElementById("form").style.visibility);*/
    }

    if (value == "cumpleaños"){
        document.getElementById("form_cumpleanios").style.display = "block";
        document.getElementById("form").style.display = "none";
        document.getElementById("form_documento").style.display = "none";
        /*console.log("Else Cumpleaños "+document.getElementById("form_cumpleanios").style.visibility);
          console.log("Else Anuncios "+document.getElementById("form").style.visibility);*/
    }

    
}