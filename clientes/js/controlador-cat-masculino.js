localStorage.setItem("genero", "masculino");

var subCategorias = [];
var urlCategorias = "../administradores/backend/api/productos/products.php";


function cargarCategorias() {
  axios({
    method: 'get',
    url: urlCategorias,
    responseType: 'json',
    params: {
      idCategory: localStorage.getItem("tienda"),
      genderCategory: localStorage.getItem("genero")
    }
  }).then(function (response) {
    console.log(response.data);
    subCategorias = response.data;
    mostrarCategorias();
  }).catch(function (error) {
    console.log(error);
  })
}

cargarCategorias();

function mostrarCategorias() { 
  let contenido = "";
  for (let i = 0; i < subCategorias.length; i++) {
    let categoria = subCategorias[i];

    contenido += `
    <a href="vista-productos.php" onclick="pasarCategoria('${categoria.subCategory}')" class="text-dark btn">
      <div class="d-flex flex-column align-items-center m-2">
        <div class="card fondo-cards d-flex justify-content-center align-items-center" style="width: 15rem;">
          <img src="${categoria.img}" class="shadow-sm img-carrito mt-3">
          <div class="card-body text-center">
            <h5 class="card-title text-dark">${categoria.subCategory}</h5>
          </div>
        </div>
      </div>
    </a>

    `;

  }

  let vistaSubCategorias = document.getElementById("vista-subCategorias");
  vistaSubCategorias.innerHTML = "";
  vistaSubCategorias.innerHTML = contenido;


}

function pasarCategoria(categoria) {
  localStorage.setItem("categoria", categoria);
}