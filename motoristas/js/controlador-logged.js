var credenciales = {};
var auth = null;

var urlUsuarios = "../administradores/backend/api/motoristas/login-motoristas.php";

function cargarImagenPerfil() {
  let cookies = document.cookie;
  let cookiesArray = cookies.split(";");

  let vistaPerfil = document.getElementById("vista-img-perfil");


  console.log(cookiesArray);

  if (cookiesArray.length > 1) {

    for (let i = 0; i < cookiesArray.length; i++) {
      let cookie = cookiesArray[i].split("=");

      console.log(cookie);

      if (cookie[0] == " img") {
        vistaPerfil.innerHTML = "";
        let ruta = cookie[1].replace(/%2F/gi, "/");

        console.log("la ruta es: " + ruta);
        vistaPerfil.innerHTML = `
        <img src="${ruta}" alt="" class="rounded-circle" height="40" width="40">
        `;
        break;
      } else {
        vistaPerfil.innerHTML = "";
        vistaPerfil.innerHTML = `
        <a href="perfil-usuario.php"><i class="fas fa-user-circle text-light fs-1"></i></a>
        `;
      }
    }

  }

}

cargarImagenPerfil();



