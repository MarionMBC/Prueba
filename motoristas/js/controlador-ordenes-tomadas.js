var ordenesPendientesDisponibles;
var urlOrdenT = "../administradores/backend/api/ordenes/ordenes.php";

function obtenerOdenesTomadas () {
    var estado;
    var estilo;
    axios ({
        method: 'get',
        url: urlOrdenT+"?pendientesEntregadas",
        responseType: 'json'
    }).then (function (response) {
        ordenesPendientesDisponibles = response.data;
        console.log(ordenesPendientesDisponibles);
        document.getElementById("ordenes-pendientesEntregadas").innerHTML = "";
        ordenesPendientesDisponibles.forEach(function (orden, indexOrder){
            if (orden.status == 'Pendiente'){
                 estado = "Entregar";
                 estilo = "enable=false";
            } else {
                 estado = "Entregada";
                 estilo = "disabled=true";
            }
            document.getElementById('ordenes-pendientesEntregadas').innerHTML += `
             <div class="container-fluid">
              <div class="row">
                <div class="my-2">
                  <div class="container-fluid">
                    <div class="row ">
                      <div class="col-12 text-center">
                        <img src="${orden.user.img}" class="img-perfil-usuario" alt="">
                      </div>
                      <div class="col-12 text-center">
                        <p class="small m-0 fw-bold">${orden.user.firstName} ${orden.user.lastName}</p>
                        <p class="small m-0">Orden #${orden.idOrder}</p>
                        <p class="small m-0">${orden.user.address}</p>
                      </div>
                      <div class="col-12 text-center">
                        <p class="m-0 small">Tiempo restante: ${orden.timeRemaining}</p>
                      </div>
                      <div class="col-12 text-center">
                        <button id="btnEnviar" class="btn btn-sm btn-dark py-0 px-3 rounded-pill" ${estilo}" onclick="detalleOrden(${orden.idOrder})"><span
                            class="small">${estado}</span></button>
                      </div>
                    </div>
                  </div>
                </div>
                <hr>
              </div>
            </div>
            `
        })
    }).catch (function (error) {
        console.log(error);
    });
}

obtenerOdenesTomadas ();

function detalleOrden (idOrder) {
    var orden = ordenesPendientesDisponibles.find(function (orden) {
        return orden.idOrder == idOrder;
    });
    localStorage.setItem('orden', JSON.stringify(orden));
    window.location.href= "detalle-orden.php";
}