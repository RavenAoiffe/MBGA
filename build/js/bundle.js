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