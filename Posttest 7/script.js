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
// Popup function to show order details
function popUp(event) {
    event.preventDefault(); // Prevent the form from submitting

    const name = document.getElementById('name').value;
    const date = document.getElementById('date').value;
    const order = document.getElementById('order').value;
    const file = document.getElementById('file').files[0] ? document.getElementById('file').files[0].name : 'No file uploaded';

    // Display the details in an alert
    alert(`Nama: ${name}\nTanggal: ${date}\nPesanan: ${order}\nFile: ${file}`);
}

// Attach the popUp function to the form's submit event
document.getElementById('orderForm').addEventListener('submit', popUp);