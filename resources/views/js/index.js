const scrolll = document.querySelector(".hk");
const scrchitiet = document.querySelector(".clct")
const ic = document.querySelector(".ic")
window.onscroll= function(){
    console.log(window.scrollY)
    if(window.scrollY >60 ){
        scrolll.classList.add("tivie")
        if(window.scrollY>150){
            ic.classList.add("iconi")
        }
        if(window.scrollY> 490){
            scrchitiet.classList.add("sclctiet")
            
        }if(window.scrollY > 800){
            ic.classList.remove("iconi")
        }
        if(window.scrollY < 490 || window.scrollY > 1000){
            scrchitiet.classList.remove("sclctiet")
        }
        
    }else{
        scrolll.classList.remove("tivie")
        // scrchitiet.classList.remove("sclctiet")
    }
}

// window.onscroll= function(){
//     if(window.scrollY>568){
        
//     } else{
        
//     }
// }