<script type="text/javascript" src=<?php echo base_url('mdb5pro/js/mdb.min.js') ?>></script>
<script type="text/javascript" src="https://counter4.optistats.ovh/private/counter.js?c=1wrapynwcwcsad47zfjfdme3eyy932su&down=async" async></script>
<noscript><a href="https://www.freecounterstat.com"><img src="https://counter4.optistats.ovh/private/freecounterstat.php?c=1wrapynwcwcsad47zfjfdme3eyy932su"></a></noscript>
<script>
  // Data
  const dataMixedChartExample = {
    type: 'bar',
    data: {
      labels: ['กระบี่', 'คลองยาง', 'อ่าวลึก', 'กาญจนดิษฐ์', 'คลองท่อม', 'ห้วยลึก', 'เกาะลันตา'],
      datasets: [
        // First dataset (bar)
        {
          label: 'ชาย',
          data: [2112, 2343, 2545, 3423, 2365, 1985, 987],
          order: 2,
        },
        // Second dataset (line)
        {
          label: 'หญิง',
          data: [211, 2543, 2745, 3123, 2765, 1485, 587],
          type: 'bar',
          order: 1,
          backgroundColor: 'rgba(66, 133, 244, 0.0)',
          borderColor: '#94DFD7',
          borderWidth: 2,
          pointBorderColor: '#94DFD7',
          pointBackgroundColor: '#94DFD7',
          lineTension: 0.0,
        },
        {
          label: 'ฟ',
          data: [211, 2543, 2745, 3123, 2765, 1485, 587],
          type: 'bar',
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

  new mdb.Chart(document.getElementById('chart-options-example'), dataMixedChartExample);
</script>