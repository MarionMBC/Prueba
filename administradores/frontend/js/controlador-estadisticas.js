let grafico1 = document.getElementById("grafico1").getContext('2d');

var chart1 = new Chart(grafico1, {
  type: 'line',
  data: {
    labels: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
    datasets: [{
      label: '# de ventas',
      data: [128, 197, 35, 52, 24, 36, 203, 37, 127, 55, 29, 38],
      backgroundColor: 'rgba(54, 162, 235, 0.9)',
      borderColor: 'rgba(54, 162, 235, 0.9)',
    }]
  }
});

let grafico2 = document.getElementById("grafico2").getContext('2d');

var chart2 = new Chart(grafico2, {
  type: 'line',
  data: {
    labels: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
    datasets: [{
      label: '# de ventas',
      data: [121, 192, 34, 55, 25, 37, 205, 34, 128, 45, 42, 37],
      backgroundColor: 'rgba(249, 162, 235, 0.9)',
      borderColor: 'rgba(249, 162, 235, 0.9)'
    }]
  }
});

let grafico3 = document.getElementById("grafico3").getContext('2d');

var chart3 = new Chart(grafico3, {
  type: 'line',
  data: {
    labels: ["2019", "2020"],
    datasets: [{
      label: 'L. ganancias',
      data: [157690, 168300],
      backgroundColor: 'rgba(249, 190, 56, 0.9)',
      borderColor: 'rgb(249, 190, 56)'
    }]
  }
});
