<script type="text/javascript" src=<?php echo base_url('mdb5pro/js/mdb.min.js') ?>></script>
<script>
	const dataMixedChartExample = {
		type: 'bar',
		data: {
			labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday '],
			datasets: [
				{
					label: 'Impressions',
					data: [2112, 2343, 2545, 3423, 2365, 1985, 987],
					order: 2,
				},
				{
					label: 'Impressions (absolute top) %',
					data: [211, 2543, 2745, 3123, 2765, 1485, 587],
					type: 'line',
					order: 1,
					backgroundColor: 'rgba(66, 133, 244, 0.0)',
					borderColor: '#94DFD7',
					borderWidth: 2,
					pointBorderColor: '#94DFD7',
					pointBackgroundColor: '#94DFD7',
					lineTension: 0.0,
				},
			],
		},
	};
	new mdb.Chart(document.getElementById('chart-mixed-example'), dataMixedChartExample);
</script>
