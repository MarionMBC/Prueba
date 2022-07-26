
var tiendas = [];
var urlTiendas = "../administradores/backend/api/tiendas/stores.php";


function cargarNombre() {
  let cookies = document.cookie;
  let cookiesArray = cookies.split(";");


  let bienvenida = document.getElementById("bienvenida");
  

  console.log(cookiesArray);

  if (cookiesArray.length > 1) {

    for (let i = 0; i < cookiesArray.length; i++) {
      let cookie = cookiesArray[i].split("=");

      console.log(cookie);

      if (cookie[0] == " firstName") {
        let nombre = cookie[1];
        bienvenida.innerHTML = "";

        bienvenida.innerHTML = `
        <h5>Hola ${nombre}, Bienvenid@!</h5>
        `;
      } 
    }

  }

}

cargarNombre();


function cargarTiendas() { 
  axios({
    method: "get",
    url: urlTiendas,
    responseType: "json"
  })
  .then(function (res) {
    console.log(res);
    tiendas = res.data;
    //localStorage.setItem("tiendas", JSON.stringify(tiendas));
    mostrarTiendas();
  })
  .catch(function (error) {
    console.log(error);
  });
}
cargarTiendas();

function mostrarTiendas() {
  let vistaEmpresas = document.getElementById("vista-empresas");
  vistaEmpresas.innerHTML = "";

  for (let i = 0; i < tiendas.length; i++) {
    let tienda = tiendas[i];
    
    let tamano = tienda.products.length;

    vistaEmpresas.innerHTML += `
    <div class="col-12 col-xs-6 col-md-6 col-lg-4 my-1 d-flex justify-content-center align-items-center">
      <a href="categoria-genero.php" onclick="irCategoriaGeneros('${tienda.idStore}', '${tamano}')" class="btn">
        <div class="card fondo-cards small d-flex mx-3 justify-content-center align-items-center"
          style="width: 18rem;">
          <img src="${tienda.img}" class="img-categoria-tienda rounded-circle mt-2" alt="">
          <div class="card-body">
            <h5 class="card-title fw-bold small text-dark">${tienda.address}</h5>
            <p class="card-text text-dark">${tienda.workingHours}</p>
          </div>
        </div>
      </a>
    </div>  
    `;
  }
}

function irCategoriaGeneros(idTienda, tamano) {
  localStorage.setItem("tienda", idTienda);
  localStorage.setItem("cantidadProductos", tamano);
  
}
