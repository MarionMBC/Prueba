
var auth = null;

var urlUsuarios = "../backend/api/administradores/login-administradores.php";

function login() {
  let user = document.getElementById("user").value;
  let password = document.getElementById("password").value;

  console.log(user);
  console.log(password);

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
        window.location.href = "./inicio.php";
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
