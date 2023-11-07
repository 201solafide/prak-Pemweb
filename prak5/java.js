document.addEventListener("DOMContentLoaded", function() {
    let hasil = document.getElementById("Hasil");
    let tombol = document.querySelectorAll('.num');
    let nilai = ""; 

    tombol.forEach(function(element) {
        element.addEventListener("click", function() {
            let button = element.innerText;
        
            if(button === "C"){
                nilai = "";
                hasil.innerHTML = "0";
            } else if(button === "Del"){
                // nilai = nilai.substring(0, nilai.length - 1);
                // nilai = nilai.slice(0, -1);
                // hasil.innerHTML = nilai
                nilai = nilai.slice(0, -1);
                hasil.innerHTML = nilai;
                if(nilai === ""){
                    hasil.innerHTML = "0";
                }

            } else if(button === "="){
                try{
                    nilai = eval(nilai);
                    hasil.innerHTML = nilai;
                } catch (error){
                    hasil.innerHTML = "Error";
                    nilai = "";
                }
            } else {
                if(button === "x"){
                    button = "*";
                }
                if(button === "%"){
                    button = "%";
                }
                nilai += button;
                hasil.innerHTML = nilai;
            }
        });
    });
});
