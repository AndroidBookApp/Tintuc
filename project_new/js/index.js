const scrolll = document.querySelector(".hk");
window.onscroll= function(){
    if(window.scrollY >60){
        scrolll.classList.add("tivie")
    }else{
        scrolll.classList.remove("tivie")
    }
}