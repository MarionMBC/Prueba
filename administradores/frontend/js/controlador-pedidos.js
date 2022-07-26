
document.getElementById('seccion-vista').style.display = 'none';
document.getElementById('seccion-pagos').style.display = 'none';
document.getElementById('seccion-registro').style.display = 'block';


function mostrarOcultar(ver, ocultar1, ocultar2){
  var obj1 = document.getElementById(ver);
  var obj2 = document.getElementById(ocultar1);
  var obj3 = document.getElementById(ocultar2);

  if(obj1.style.display == 'none'){
    obj1.style.display = 'block';
    obj2.style.display = 'none';
    obj3.style.display = 'none';
  }else{
    obj1.style.display = 'none';
  }
}