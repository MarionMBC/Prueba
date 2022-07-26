var credenciales = {};
var auth = null;

var urlUsuarios = "../administradores/backend/api/clientes/login-clientes.php";


function obtenerCredenciales() {
  axios({
    method: "get",
    url: urlUsuarios,
    responseType: "json"
  }).then(function (response) {

    credenciales = response.data;

    console.log("datos obtenidos");

    cargarFirebase();

  }).catch(function (error) {
    console.log(error);
  });
}

obtenerCredenciales();

function cargarFirebase() {
  let apiKey = credenciales.apiKey;
  let authDomain = credenciales.authDomain;
  let databaseURL = credenciales.databaseURL;
  let projectId = credenciales.projectId;
  let storageBucket = credenciales.storageBucket;
  let messagingSenderId = credenciales.messagingSenderId;
  let appId = credenciales.appId;

  var firebaseConfig = {
    apiKey: apiKey,
    authDomain: authDomain,
    databaseURL: databaseURL,
    projectId: projectId,
    storageBucket: storageBucket,
    messagingSenderId: messagingSenderId,
    appId: appId

  };

  firebase.initializeApp(firebaseConfig);

  auth = firebase.auth();
}


function cargarImagenPerfil() {
  let cookies = document.cookie;
  let cookiesArray = cookies.split(";");

  let logout = document.getElementById("logout");
  logout.innerHTML = "";

  let vistaPerfil = document.getElementById("vista-img-perfil");


  console.log(cookiesArray);

  if (cookiesArray.length > 1) {
    logout.innerHTML = `<a class="nav-link active text" aria-current="page" href="logout.php">Cerrar
      Sesión</a>`;

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
        document.getElementById("link-inicio-sesion").innerHTML = "";
        document.getElementById("link-registro").innerHTML = ""

        break;
      } else {
        vistaPerfil.innerHTML = "";
        vistaPerfil.innerHTML = `
        <a href="perfil-usuario.php"><i class="fas fa-user-circle text-light fs-1"></i></a>
        `;

        document.getElementById("link-inicio-sesion").innerHTML = `
          <a class="nav-link active text" aria-current="page" href="" data-bs-toggle="modal"
          data-bs-target="#inicioSesion">Iniciar Sesión</a>
        `;

        document.getElementById("link-registro").innerHTML = `
          <a class="nav-link active text" aria-current="page" href="" data-bs-toggle="modal"
          data-bs-target="#registrarse">Registrarse</a>
        `;
      }
    }

  } else {
    logout.innerHTML = "";

  }

}

cargarImagenPerfil();

function login() {
  let user = document.getElementById("user").value;
  let password = document.getElementById("password").value;
  let logout = document.getElementById("logout");
  logout.innerHTML = "";

  axios({
      method: "post",
      url: urlUsuarios,
      responseType: "json",
      data: {
        user: user,
        password: password,
      },
    })
    .then(function (response) {
      if (response.data.codigo == 1) {
        window.location.href = "./categoria-tiendas.php";
      } else {
        console.log(response.data.mensaje);
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          html: '<p class="text-white">Usuario y/o contraseña incorrecta!</p>',
        })
      }

      console.log(response.data);

    })
    .catch(function (error) {
      console.log(error);
    });
}

document.getElementById('btn-login-gmail').addEventListener('click', function () {

  console.log('Login con Gmail');

  var provider = new firebase.auth.GoogleAuthProvider();
  auth.signInWithPopup(provider).then(function (result) {
    var user = result.user.providerData[0];
    console.log(user.displayName);
    console.log(user.email);
    console.log(user.photoURL);

    axios({
        method: "post",
        url: urlUsuarios,
        responseType: "json",
        data: {
          user: user.email

        },
      })
      .then(function (response) {
        if (response.data.codigo == 1) {
          window.location.href = "./categoria-tiendas.php";
        } else {
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            html: '<p class="text-white">Usuario y/o contraseña incorrecta!</p>',
          })
          console.log(response.data.mensaje);
        }

        console.log(response.data);

      })
      .catch(function (error) {
        console.log(error);
      });

  }).catch(function (error) {
    console.log(error);
  });

});


document.getElementById('btn-login-gmail-register').addEventListener('click', function () {

  console.log('Login con Gmail');

  var provider = new firebase.auth.GoogleAuthProvider();
  auth.signInWithPopup(provider).then(function (result) {
    var user = result.user.providerData[0];
    console.log(user.displayName);
    console.log(user.email);
    console.log(user.photoURL);

    axios({
        method: "post",
        url: urlUsuarios,
        responseType: "json",
        data: {
          user: user.email

        },
      })
      .then(function (response) {
        if (response.data.codigo == 1) {
          window.location.href = "./categoria-genero.php";
        } else {
          console.log(response.data.mensaje);
        }

        console.log(response.data);

      })
      .catch(function (error) {
        console.log(error);
      });

  }).catch(function (error) {
    console.log(error);
  });

});

function verificarInicioSesion() {
  let cookies = document.cookie;
  let cookiesArray = cookies.split(";");

  if (cookiesArray.length > 1) {

    for (let i = 0; i < cookiesArray.length; i++) {
      let cookie = cookiesArray[i].split("=");

      console.log('Llego aqui');

      if (cookie[0] == " firstName") {
        let nombre = cookie[1];

        Swal.fire({
          title: `<strong>Hola ${nombre}</strong>`,
          icon: 'success',
          html: `<a href="categoria-tiendas.php" class=" text nav-link active fs-3" >Ir de Compras <i class="fas fa-arrow-alt-circle-left"></i></a>`,
        })

      }

    }

  } else {

    Swal.fire({
      title: 'Primero debes Iniciar Sesión',
      icon: 'warning',
    }).then((result) => {

    })

  }
}