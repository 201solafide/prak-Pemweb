
function Hitung(){
    let input_nilai = document.getElementById("inputan").value
    let jumlah_input = parseInt(input_nilai);
    let bil_ganjil = 0;
    let bil_genap = 0;
    for (let i = 0; i < jumlah_input; i++){
      if(i % 2 === 0){
        bil_genap++;
      }else if(i % 2 !== 0){
        bil_ganjil++;
      }else{
        console.log("Hanya angka >+ 0");
      }
      
    }
    return {bil_genap, bil_ganjil};
  }
  function fungsiHitung(){
    let hasil = Hitung();
    document.getElementById("nilai_ganjil").innerText = hasil.bil_ganjil
    document.getElementById("nilai_genap").innerText = hasil.bil_genap
    
  }
  