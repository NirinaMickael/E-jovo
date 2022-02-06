let  nav = document.querySelector('#nav_container'),mynavbar = document.querySelector('#mynavbar'),btn_nav = document.querySelector('.navbar-toggler');
btn_nav.addEventListener('click',(e) =>{
    //document.querySelector('.login').classList.toggle('down');
    document.querySelector('.form_').childNodes.forEach((e,index)  => {
        if(e.nodeType == 1){
            e.classList[1] == 'my-3' ? e.classList.replace('my-3','my-2'): index == 1 ? e.classList.replace('my-2','my-3') : 'ok';
            e.classList[1] == 'my-4' ? e.classList.replace('my-4','mt-3'): index == 3 ? e.classList.replace('mt-3','my-4') : 'ok';
            e.classList[1] == 'mt-3' ? e.classList.replace('mt-3','mt-2'): index == 7 ? e.classList.replace('mt-2','mt-3') : 'ok';
        }
    document.querySelector('.login').classList.toggle('down')
    } )
});