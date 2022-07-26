

var modalCarrito = new bootstrap.Modal(document.getElementById('modalCarrito'), {
  keyboard: false
})

// var modalRegistroTarjeta = new bootstrap.Modal(document.getElementById('ventanaModal'), {
//   keyboard: false
// })

var modalChat = new bootstrap.Modal(document.getElementById('modalChat'), {
  keyboard: false
})

function verCarrito(){
  modalCarrito.show();
}

function verChat() {
  modalChat.show();

}

function verMas () {
  TODO;
}

function inicioSesion() {
  window.location.href = "categoria-tiendas.php";
}



/*SideBar Code*/
// sidebar toggle
// const btnToggle = document.querySelector('.toggle-btn');

// btnToggle.addEventListener('click', function () {
//   console.log('clik')
//   document.getElementById('sidebar').classList.toggle('active');
//   console.log(document.getElementById('sidebar'))
// });













