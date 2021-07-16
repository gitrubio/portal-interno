function clickMenu() {
    if (document.getElementById("contenedor_opciones_menu").style.visibility == "visible"){
      document.getElementById("contenedor_opciones_menu").style.visibility = "hidden";
    }
    else{
      document.getElementById("contenedor_opciones_menu").style.visibility = "visible";
    } 
}
 enlaces = document.getElementsByClassName("enlace-card");
 numero_enlaces = enlaces.length;
 console.log(numero_enlaces);
 console.log(enlaces[0].href); 
 console.log(enlaces[1].href);

 for (let index = 0; index < numero_enlaces; index++) {
  if(enlaces[index].href == "https://192.168.1.22/portal-interno/public/" || enlaces[index].href == "http://192.168.1.22/portal-interno/public/"){
    id = enlaces[index].id;
    document.getElementById(id).style.pointerEvents = "none";
    //enlaces[index].style.pointerEvents = "none";
    document.getElementById(id).style.cursor = "default";
    document.getElementById(id).style.opacity = "0.6";
    //style="pointer-events: none; cursor:default; opacity:0.6;
    //console.log(enlaces[index]);
    console.log(enlaces[index].id);
    console.log("fhfhgf");
   }
   
 }
 