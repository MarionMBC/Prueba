var productos = [];
var urlProductos = "../administradores/backend/api/productos/products.php";

var modalDetalleProducto = new bootstrap.Modal(document.getElementById('detalleProducto'), {
  keyboard: false
})

function cargarProductos() {
  axios({
    method: "GET",
    url: urlProductos,
    responseType: "json",
    params: {
      idSubCategory: localStorage.getItem("categoria"),
      genderCategory: localStorage.getItem("genero")
    }
  }).then(function (response) {
    productos = response.data;
    mostrarProductos();
  }).catch(function (error) {
    console.log(error);
  });

}

cargarProductos();

function mostrarProductos() { 
  var cadena = "";
  productos.forEach(function (producto) {
    cadena += `

    <div class="col-xl-3 col-md-4 col-xs-6 col-12 btn" >
      <div class="card mb-4 shadow-sm mx-2 ">
        <img src="${producto.img}" alt="${producto.name}" class="w-100 p-2" height="300" onclick="detalleProducto(${producto.idProduct})">
        <div class="card-body">
          <p class="card-text">${producto.name}</p>
          <div class="d-flex justify-content-between align-items-center">
              
            <div class="d-flex flex-row justify-content-between flex-fill">
              <div class="d-flex fs-1">
                <small class="text-muted px-3 fs-4">L.${producto.price}</small>
              </div>
              <div class="d-flex fs-1">
                <i class="far fa-heart text-warning"></i>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    `;
  });


  let vistaProductos = document.getElementById("vista-productos");
  vistaProductos.innerHTML = " ";
  vistaProductos.innerHTML = cadena;
}

function detalleProducto(idProducto) {
  console.log(idProducto);
  let cadena = "";
  for (let i = 0; i < productos.length; i++) {
    if (productos[i].idProduct == idProducto) {
      let producto = productos[i];
      cadena += `
        <div class="d-flex flex-column align-items-center p-3">
          <div>
            <img src="${producto.img}" class="my-2 img-fluid " alt="" width="150" height="auto">
          </div>
          <div class="">
            <p class="m-0">${producto.description}</p>
            <div class="d-flex flex-row justify-content-between p-3">
              <div class="d-flex fs-1">
                <p class="m-0 fw-light">L.${producto.price}</p>
              </div>
              <div class="d-flex fs-1">
                <i class="far fa-heart text-warning"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex mt-0 mb-3">
          <form class="d-flex flex-row justify-content-center w-100">
            <select id="inputState" class="rounded-pill form-select border-custom w-50">
              <option selected>Cantidad</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
            </select>
          </form>
        </div>

        <div class="d-flex flex-row justify-content-around mx-1 my-2">
          <a class="btn-dark btn rounded-circle mx-2 "><i class="fas fa-shopping-bag fs-1"></i></a>
          <a class="btn-dark btn rounded-circle mx-2 "><i class="fas fa-money-bill-wave fs-1"></i></a>
        </div>
      `;
    }
  }
  console.log(cadena);

  let vistaDetalleProducto = document.getElementById("vista-detalle-producto");
  vistaDetalleProducto.innerHTML = " ";
  vistaDetalleProducto.innerHTML = cadena;
  modalDetalleProducto.show();
}