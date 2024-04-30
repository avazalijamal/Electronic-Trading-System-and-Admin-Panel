window.addEventListener('load',function(){

    const pas=document.querySelector('#pas');
    const chk=document.querySelector('#chk');
    const img=document.querySelector('#img');
    const file=document.querySelector('#file');
    


    chk.addEventListener('change',function(){

        if(chk.checked){
            pas.setAttribute("type","text");
        }else{
            pas.setAttribute("type","password");
        }

    });

    file.addEventListener('change',function(){

        const FR=new FileReader();

        FR.readAsDataURL(file.files[0]);

        FR.onload=function(){
            img.setAttribute('src',FR.result);
        }

    });


});