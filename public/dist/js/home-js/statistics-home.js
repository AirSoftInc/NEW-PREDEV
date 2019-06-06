$(document).ready(function () {
  document.getElementById("seventh-dropdown").style.paddingTop = "12px";
  document.getElementById("statistics-home").className = "active";
  
  var chart = jQuery('#chart')
  if (chart.length > 0) {
    var optionDonut = {
      chart: {
        type: 'pie',
        height: '280'
      },
      dataLabels: {
        enabled: false,
      },
      plotOptions: {
        pie: {
          donut: {
            size: '200%',
          },
          offsetY: 0,
        },
        stroke: {
          colors: undefined
        }
      },
      colors: ['#8E54E9', '#2bcbba', '#f7b731', '#45aaf2', '#e3324c', '#FF5733', '#65DC08', '#09ECAE', '#A709EC', '#EC0996'],
      series: [21, 23, 19, 14, 6, 4, 12, 8, 5, 26],
      labels: ['Huasteca Alta', 'Huasteca Baja', 'Totonaca', 'Nautla', 'Capital', 'Las Montañas', 'Sotavento', 'Papaloapan', 'Los Tuxtlas', 'Olmeca'],
    }
    var donut = new ApexCharts(
      document.querySelector("#chart"),
      optionDonut
    )
    donut.render();
  }
});