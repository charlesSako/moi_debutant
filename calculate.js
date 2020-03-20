//Calculate Tip
function myFunction() {
  var nom = document.getElementById("article").value;
  if (nom == 1) {
  pu1 = 5500;
  document.getElementById("pu").value=pu1;
  qte = document.getElementById("quant").value;
  total = qte*pu1;
  document.getElementById("tot").value = total;
  document.getElementById("calculate").value=total;
  }
  else if (nom == 2) {
  pu2 = 3500;
  document.getElementById("pu").value=pu2;
  qte = document.getElementById("quant").value;
  total = qte*pu2;
  document.getElementById("tot").value = total;
  document.getElementById("calculate").value=total;
  }
  else if (nom == 3) {
  pu3 = 6500;
  document.getElementById("pu").value=pu3;
  qte = document.getElementById("quant").value;
  total = qte*pu3;
  document.getElementById("tot").value = total;
  document.getElementById("calculate").value=total;
  }
  else if (nom == 4) {
  pu4 = 3000;
  document.getElementById("pu").value=pu4;
  qte = document.getElementById("quant").value;
  total = qte*pu4;
  document.getElementById("tot").value = total;
  document.getElementById("calculate").value=total;
  }
  else if (nom == 5) {
  pu5 = 2500;
  document.getElementById("pu").value=pu5;
  qte = document.getElementById("quant").value;
  total = qte*pu5;
  document.getElementById("tot").value = total;
  document.getElementById("calculate").value=total;
  }
  else if (nom == 6) {
  pu6 = 4000;
  document.getElementById("pu").value=pu6;
  qte = document.getElementById("quant").value;
  total = qte*pu6;
  document.getElementById("tot").value = total;
  document.getElementById("calculate").value=total;
  }

}
var span =document.getElementById("close")[0];
span.onclick = function(){
  modal.style.display = "block";
}
