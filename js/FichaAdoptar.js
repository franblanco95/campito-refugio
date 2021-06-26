// JavaScript Document
document.querySelector(".fichaperro").addEventListener('click', function(){
  document.querySelector(".modalperro").classList.add('mostrarmodal');
  console.log(document.querySelector(".modalperro"));
});

document.getElementsByClassName("closead")[0].addEventListener('click', function(){
  document.querySelector(".modalperro").classList.remove('mostrarmodal');
});

