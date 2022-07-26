/*Toast*/
function toast (){
  var toastTrigger = document.getElementById('liveToastBtn')
  var toastLiveExample = document.getElementById('liveToast')
  if (toastTrigger) {
    toastTrigger.addEventListener('click', function () {
      var toast = new bootstrap.Toast(toastLiveExample)
      toast.show()
    })
  }
}
/*SideBar Code*/
// sidebar toggle
// const btnToggle = document.querySelector('.toggle-btn');

// btnToggle.addEventListener('click', function () {
//   console.log('clik')
//   document.getElementById('sidebar').classList.toggle('active');
//   console.log(document.getElementById('sidebar'))
// });













