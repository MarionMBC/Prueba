var estilo1 = document.getElementById('seccion-administradores');
var estilo2 = document.getElementById('seccion-base-datos');
var estilo3 = document.getElementById('seccion-respaldos');
var estilo4 = document.getElementById('seccion-contratos');
var estilo5 = document.getElementById('seccion-transacciones');
var estilo6 = document.getElementById('seccion-contactos');

estilo1.style.display = 'block';
estilo2.style.display = 'none';
estilo3.style.display = 'none';
estilo4.style.display = 'none';
estilo5.style.display = 'none';
estilo6.style.display = 'none';


function mostrarOcultarCom(ver) {
    switch (ver) {
        case "seccion-administradores":
            estilo1.style.display = 'block';
            estilo2.style.display = 'none';
            estilo3.style.display = 'none';
            estilo4.style.display = 'none';
            estilo5.style.display = 'none';
            estilo6.style.display = 'none';
            break;
        case "seccion-base-datos":
            estilo1.style.display = 'none';
            estilo2.style.display = 'block';
            estilo3.style.display = 'none';
            estilo4.style.display = 'none';
            estilo5.style.display = 'none';
            estilo6.style.display = 'none';
            break;
        case "seccion-respaldos":
            estilo1.style.display = 'none';
            estilo2.style.display = 'none';
            estilo3.style.display = 'block';
            estilo4.style.display = 'none';
            estilo5.style.display = 'none';
            estilo6.style.display = 'none';
            break;
        case "seccion-contratos":
            estilo1.style.display = 'none';
            estilo2.style.display = 'none';
            estilo3.style.display = 'none';
            estilo4.style.display = 'block';
            estilo5.style.display = 'none';
            estilo6.style.display = 'none';
            break;
        case "seccion-transacciones":
            estilo1.style.display = 'none';
            estilo2.style.display = 'none';
            estilo3.style.display = 'none';
            estilo4.style.display = 'none';
            estilo5.style.display = 'block';
            estilo6.style.display = 'none';
            break;
        case "seccion-contactos":
            estilo1.style.display = 'none';
            estilo2.style.display = 'none';
            estilo3.style.display = 'none';
            estilo4.style.display = 'none';
            estilo5.style.display = 'none';
            estilo6.style.display = 'block';
            break;

    }

}