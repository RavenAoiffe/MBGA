function navegacionFijaInterna(){
    const barra = document.querySelector('.navegador-interno');
    const body = document.body;
    const sticky = barra.offsetTop;

    body.onscroll = function(){
        if (window.pageYOffset > sticky) {
            barra.classList.add("fijo");
        } else {
            barra.classList.remove("fijo");
        }
    }


}

navegacionFijaInterna();

const panel = () =>{
    var acordeon = document.getElementsByClassName('acordeon');
    var i=0;

    //console.log(acordeon)
  
    /* for(i = 0; i<= acordeon.length; i++){
        acordeon[i].addEventListener('click', function () {
            this.classList.toggle('activo');
            var panel = this.nextElementSibling;
           if (panel.style.display === "flex") {
                panel.style.display = "none";
              } else {  
                panel.style.display = "flex";
              }
        })
    }*/
}

//panel();

var tablinks = document.getElementsByClassName("tablinks");

for (i = 0; i < tablinks.length; i++) {
    tablinks[i].addEventListener('click', function(){
        this.classList.toggle("active");
        var panel = this.nextElementSibling;

        if(this.classList.contains('active')){
            //this.classList.remove('active');
           
          //  if (panel.style.display === "flex") {
                panel.style.display = "flex";
            //  } else {  
              //  panel.style.display = "flex";
              //}
        }
        else{
            panel.style.display = "none";  
        }
        /*
            if (panel.style.display === "flex") {
                panel.style.display = "none";
              } else {  
                panel.style.display = "flex";
              }*/
    })
  }
/*
function abrirInformacion(evt, tipoDeExpocision) {
    var i, tabcontent;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }

    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(tipoDeExpocision).style.display = "block";
    evt.currentTarget.className += " active";
  }*/