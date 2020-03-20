

function plus(){
  const x = Number(document.getElementById("val1").value);
  const y = Number(document.getElementById("val2").value);
      addit = x + y;
  document.getElementById("tot").value = addit;
}
function soustr(){
  const x = Number(document.getElementById("val1").value);
  const y = Number(document.getElementById("val2").value);
      soust = x - y;
  document.getElementById("tot").value = soust;
}
function mult(){
  const x = Number(document.getElementById("val1").value);
  const y = Number(document.getElementById("val2").value);
      mul = x * y;
  document.getElementById("tot").value = mul;
}
function quot(){
  const x = Number(document.getElementById("val1").value);
  const y = Number(document.getElementById("val2").value);
      divi = x / y;
  document.getElementById("tot").value = divi;
}
