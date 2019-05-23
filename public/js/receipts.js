
$(document).ready(function(){
	//$('.fixed-action-btn').floatingActionButton();
	var elems = document.querySelectorAll('.fixed-action-btn');
	var instances = M.FloatingActionButton.init(elems, {
			direction: 'left',
			hoverEnabled: false
	});
  new Chart(document.getElementById("myChart"), {
    type: 'line',
    data: {
        labels: ['Ponedeljek', 'Torek', 'Sreda', 'Četrtek', 'Petek', 'Sobota', 'Nedelja' ],
        datasets: [{
            label: 'Pregled izdatkov enega tedna €',
            data: [120, 19, 30, 5, 2, 3, 160,],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
  });
  new Chart(document.getElementById("myChart1"), {
    type: "pie",

    data: {
      labels: ["Food", "Clothes", "Necessities", "Work supplies", "Other"],
      datasets: [{
        backgroundColor: [
          'rgba(255, 99, 132, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)'
      ],
        data: [478,267,34,84,33]
      }]
    },
    options: {
      legend: {
          display: false
      },
      title: {
        display: true,
        text: 'Spending by type of items'
      },
      animation: {
          animateScale: true,
          animateRotate: true
      }

  }
  });


})

$('#my-button').click(function(){
  $('#my-file').click();
});

