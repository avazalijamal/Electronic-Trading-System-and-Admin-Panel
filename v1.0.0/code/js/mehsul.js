function Klick(id){
    document.querySelector(`#${id}`).click();
}

window.addEventListener("load",function(){

    const add=document.querySelector("#add");
    const modal=document.querySelector("#modal");
    const img=document.querySelector('#img');
    const file=document.querySelector('#file');

    add.addEventListener("click",function(){
        modal.classList.toggle("show");
        add.classList.toggle("x");
    });


    file.addEventListener('change',function(){

        const FR=new FileReader();

        FR.readAsDataURL(file.files[0]);

        FR.onload=function(){
            img.setAttribute('src',FR.result);
        }

    });



});