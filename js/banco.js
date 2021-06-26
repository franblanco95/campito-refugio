// JavaScript Document
document.querySelector(".banco").addEventListener('click', function(){
  document.querySelector(".modalbanco").classList.add('mostrarmodal');
  console.log(document.querySelector(".modalbanco"));
});

document.getElementsByClassName("closead")[0].addEventListener('click', function(){
  document.querySelector(".modalbanco").classList.remove('mostrarmodal');
});

