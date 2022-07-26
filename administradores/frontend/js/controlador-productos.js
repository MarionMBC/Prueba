
document.getElementById('seccion-vista').style.display = 'none';
document.getElementById('seccion-registro').style.display = 'block';


function mostrarOcultar(ver, ocultar1){
  var obj1 = document.getElementById(ver);
  var obj2 = document.getElementById(ocultar1);

  if(obj1.style.display == 'none'){
    obj1.style.display = 'block';
    obj2.style.display = 'none';
  }else{
    obj1.style.display = 'none';
  }
}