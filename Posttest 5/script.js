let btn = document.getElementById("toggleMode")
let ikon = document.getElementById("toggleicon")
let root = document.documentElement

document.getElementById("burger").addEventListener("click",function(){
    document.getElementById("dropdown").classList.toggle("active")
})

btn.addEventListener("click",function(){
    root.classList.toggle("dark")
    if(root.classList.contains("dark")){
        ikon.src = "lightmode.png"
    }
    else{
        ikon.src = "darkmode.png"
    }
})
 function popUp(){
    alert("Maaf menu ini belum tersedia")
 }