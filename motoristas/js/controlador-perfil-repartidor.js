var cookie = document.cookie;
var cookieArray = cookie.split(';');
var cookie2;
var img;
var name;
var lastName;
var idDealer;
var urlRepartidor = "../administradores/backend/api/motoristas/motoristas.php";

for (let i = 0; i < cookieArray.length; i++) {
    cookie2 = cookieArray[i].split('=');

    if (cookie2[0] == " firstName") {
        name = cookie2[1];
    } else if (cookie2[0] == " lastName") {
        lastName = cookie2[1];
    } else if (cookie2[0] == " img") {
        img = cookie2[1].replace(/%2F/gi, "/");
    } else if (cookie2[0] == " idDealer") {
        idDealer = cookie2[1];
    }
}


function reenderizarRepartidor() {
    document.getElementById('perfil-repartidor').innerHTML = '';
    document.getElementById('perfil-repartidor').innerHTML = `
    <h5 class="card-title">Información personal</h5>

            <!-- Inicio -->
            <div class="d-flex flex-column align-items-center p-3">
              <img src="${img}" class="img-perfil-usuario mb-1" alt="">
              <p class="m-1">${name} ${lastName}</p>
              <div><label for="formFile" class="btn-group btn btn-dark px-5 fw-bold rounded-pill">Editar
                  foto</label>
                <input class="form-control" type="file" id="formFile" style="display: none;">
              </div>
            </div>
            <div class="form-group">
              <label for="nombrePerfil">Nombre:</label>
              <input type="text" class="form-control mb-1" name="" value="${name}" id="nombrePerfil"
                placeholder="Ingrese Nombre">
              <label for="apellidoPerfil">Apellido:</label>
              <input type="text" class="form-control mb-1" name="" value="${lastName}" id="apellidoPerfil"
                placeholder="Ingrese Apellido">
              <p class="mt-3 d-flex justify-content-center">
                <a class="btn btn-dark px-5 fw-bold rounded-pill" data-bs-toggle="collapse"
                  href="#collapseConfiguracion" role="button" aria-expanded="false"
                  aria-controls="collapseConfiguracion">
                  Configuracion
                </a>
              </p>
              <div class="collapse" id="collapseConfiguracion">
                <div class="card fondo-cards card-body">
                  <a class="btn btn-dark px-5 fw-bold rounded-pill" data-bs-toggle="collapse"
                  href="#collapseInputs" role="button" aria-expanded="false"
                  aria-controls="collapseInputs">
                  Cambiar contraseña
                </a>
              </div>
            </div>
            <div class="collapse mt-2" id="collapseInputs">
                <label for="inputPasswordNew" class="form-label">Password</label>
            <input type="password" id="inputPasswordNew" class="form-control" aria-describedby="passwordHelpBlock">
            <div id="passwordHelpBlock" class="form-text">
            Tu contraseña debe tener al menos 3 caracteres
            </div>
            <a class="btn btn-warning fw-bold rounded-pill" onclick="cambiarContrasena()">
                  Confirmar
                </a>
            </div>
    `
}

reenderizarRepartidor();

function cambiarContrasena() {
    axios({
        method: 'put',
        url: urlRepartidor + `?idDealer=${idDealer}`,
        data: {
            password: document.getElementById('inputPasswordNew').value
        }
    }).then(function (response) {
        Swal.fire({
            title: `<strong>Hola ${name}</strong>`,
            icon: 'success',
            html: `<a href="#" class="text nav-link active fs-3" >Contraseña cambiada exitosamente<i class="fas fa-key"></i>
          </a>`,
        });
    }).catch(function (error) {
        console.log(error);
    });
}

function historialPedidos() {
    axios({
        method: 'get',
        url: urlRepartidor +`?pedidos&idDealer=${idDealer}`,
        responseType: 'json'
    }).then(function (response) {
        console.log(response.data);
        var pedidos = response.data;
        document.getElementById('lista-pedidos').innerHTML = '';
        pedidos.forEach(function (pedido) {
            document.getElementById('lista-pedidos').innerHTML += `
        <div
                class="card fondo-cards card-body small mb-3 d-flex flex-column justify-content-center align-items-center align-content-center">
                <img src="${pedido.img}" class="img-perfil-negocio mb-1" alt="">
                <p class="m-1">${pedido.name}</p>
                <p class="m-1">(${pedido.address})</p>
                <p class="m-1">${pedido.phone}</p>
                <a type="button" class="btn btn-warning px-2 rounded-pill">
                  <p class="m-1"><i class="fas fa-eye"></i></p>
                </a>
              </div>`
        })
    }).catch(function (error) {
        console.log(error);
    });
}

function historialEntregas () {
    axios({
        method: 'get',
        url: urlRepartidor +`?entregas&idDealer=${idDealer}`,
        responseType: 'json'
    }).then(function (response) {
        console.log(response);
        var entregas = response.data;
        document.getElementById('lista-entregas').innerHTML = '';
        entregas.forEach(function (entrega) {
            document.getElementById('lista-entregas').innerHTML += `
        <div
                class="card fondo-cards card-body small mb-3 d-flex flex-column justify-content-center align-items-center align-content-center">
                <img src="${entrega.img}" class="img-perfil-negocio mb-1" alt="">
                <p class="m-1">${entrega.name}</p>
                <p class="m-1">(${entrega.address})</p>
                <p class="m-1">${entrega.phone}</p>
                <a type="button" class="btn btn-warning px-2 rounded-pill">
                  <p class="m-1"><i class="fas fa-eye"></i></p>
                </a>
              </div>`
        })
    }).catch(function (error) {
        console.log(error);
    });
}
