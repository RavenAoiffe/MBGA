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
  
    for(i = 0; i<= acordeon.length; i++){
        acordeon[i].addEventListener('click', function () {
            this.classList.toggle('activo');
            var panel = this.nextElementSibling;
            if (panel.style.display === "flex") {
                panel.style.display = "none";
              } else { 
                panel.style.display = "flex";
              }
        })
    }
}

panel();