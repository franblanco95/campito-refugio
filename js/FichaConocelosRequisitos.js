// JavaScript Document
document.getElementById("myBtn").addEventListener('click', function(){
  document.getElementById("myModal").classList.add('mostrarmodal');
  console.log(document.getElementById("myModal"));
});

document.getElementsByClassName("close")[0].addEventListener('click', function(){
  document.getElementById("myModal").classList.remove('mostrarmodal');
});
