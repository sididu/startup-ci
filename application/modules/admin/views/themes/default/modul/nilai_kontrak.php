

		<style type="text/css">
#container {
	height: 300px;
	min-width: 310px;
	max-width: 800px;
}
		</style>

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://code.highcharts.com/highcharts.src.js"></script>

<div id="container"></div>

<!-- <button id="large">Large</button>
<button id="small">Small</button> -->


		<script type="text/javascript">

var chart = Highcharts.chart('container', {

    chart: {
        type: 'column'
    },

    title: {
        text: 'Kerugian Negara vs Pemulihan Aset'
    },

    subtitle: {
        text: 'Resize the frame or click buttons to change appearance'
    },

    legend: {
        align: 'right',
        verticalAlign: 'middle',
        layout: 'vertical'
    },

    xAxis: {
        categories: ['Apples', 'Oranges', 'Bananas'],
        labels: {
            x: -10
        }
    },

    yAxis: {
        allowDecimals: false,
        title: {
            text: 'Amount'
        }
    },

    series: [{
        name: 'Nilai Kontrak',
        data: [1, 4, 3]
    }, {
        name: 'Kerugian Negara',
        data: [6, 4, 2]
    }, {
        name: 'Pemulihan Aset',
        data: [8, 4, 3]
    }],

    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                legend: {
                    align: 'center',
                    verticalAlign: 'bottom',
                    layout: 'horizontal'
                },
                yAxis: {
                    labels: {
                        align: 'left',
                        x: 0,
                        y: -5
                    },
                    title: {
                        text: null
                    }
                },
                subtitle: {
                    text: null
                },
                credits: {
                    enabled: false
                }
            }
        }]
    }
});

// $('#small').click(function () {
//     chart.setSize(400, 300);
// });

// $('#large').click(function () {
//     chart.setSize(600, 300);
// });

		</script>

