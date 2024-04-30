window.addEventListener('load',function(){

    const pas=document.querySelector('#pas');
    const chk=document.querySelector('#chk');

    chk.addEventListener('change',function(){

        if(chk.checked){
            pas.setAttribute("type","text");
        }else{
            pas.setAttribute("type","password");
        }


    });

});