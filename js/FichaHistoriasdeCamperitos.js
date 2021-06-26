// JavaScript Document
document.querySelector(".fichaperro").addEventListener('click', function(){
  document.querySelector(".modalhistoria").classList.add('mostrarmodal');
  console.log(document.querySelector(".modalhistoria"));
});

document.getElementsByClassName("closead")[0].addEventListener('click', function(){
  document.querySelector(".modalhistoria").classList.remove('mostrarmodal');
});
