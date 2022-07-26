var orden = localStorage.getItem('orden');
var orden = JSON.parse(orden);
var urlOrdenE = "../administradores/backend/api/ordenes/ordenes.php";
var urlMotorista = "../administradores/backend/api/motoristas/motoristas.php";

function detalleOrden() {
    document.getElementById('detalle-orden').inerHTML = '';
    document.getElementById('detalle-orden').innerHTML = `
<div>
                <img src="${orden.user.img}" class="img-perfil-usuario" alt="">
              </div>
              <div class="d-flex flex-column align-items-center">
                <p class="my-1 fw-bold">${orden.user.firstName} ${orden.user.lastName}</p>
                <div class="small d-flex flex-column align-items-center">
                  <p class="m-0">orden #${orden.idOrder}</p>
                  <p class="m-0">${orden.user.address}</p>
                  <p class="m-0">Tiempo restante: ${orden.timeRemaining}</p>
                </div>
              </div>
              <div class="text-center">
                <button class="btn btn-sm btn-dark py-0 px-3 rounded-pill" data-bs-toggle="modal"
                  data-bs-target="#modalEntregado" onclick="entregar()"><span class="small">Confirmar entrega</span>
              </div>
              <hr class="m-0">`
}

detalleOrden();

function entregar() {
    axios({
        method: 'put',
        url: urlOrdenE + `?entregada&idOrder=${orden.idOrder}&idDealer=${orden.idDealer}`,
        responseType: 'json',
    }).then(function (
        response) {
        console.log(response);
        ordenEntregada();
        window.location.href = 'ordenes-tomadas.php';
    }).catch(function (error) {
        console.log(error);
    });
}

function ordenEntregada () {
    axios ({
        method: 'Delete',
        url: urlMotorista + `?idOrder=${orden.idOrder}&idDealer=${orden.idDealer}`,
        responseType: 'json',
    }).then (function (response) {
        console.log("orden entregada");
    }).catch (function (error) {
        console.log(error);
    });
}

