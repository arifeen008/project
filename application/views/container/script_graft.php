<script type="text/javascript" src=<?php echo base_url('mdb5pro/js/mdb.min.js') ?>></script>
<script type="text/javascript" src="https://counter4.optistats.ovh/private/counter.js?c=1wrapynwcwcsad47zfjfdme3eyy932su&down=async" async></script>
<noscript><a href="https://www.freecounterstat.com"><img src="https://counter4.optistats.ovh/private/freecounterstat.php?c=1wrapynwcwcsad47zfjfdme3eyy932su"></a></noscript>
<script>
  const sidenav = document.getElementById("sidenav");
  const sidenavInstance = mdb.Sidenav.getInstance(sidenav);
  let innerWidth = null;
  const setMode = (e) => {
    if (window.innerWidth === innerWidth) {
      return;
    }
    innerWidth = window.innerWidth;
    if (window.innerWidth < 1300) {
      sidenavInstance.changeMode("over");
      sidenavInstance.hide();
    } else {
      sidenavInstance.changeMode("side");
      sidenavInstance.show();
    }
  };
  setMode();
  window.addEventListener("resize", setMode);

  // Bar chart with custom tooltip
const dataBarCustomTooltip = {
  type: 'bar',
  data: {
    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
    datasets: [
      {
        label: 'Traffic',
        data: [30, 15, 62, 65, 61, 65, 40],
      },
      {
        label: 'Traffic 2',
        data: [20, 10, 60, 40, 21, 35, 30],
      },
    ],
  },
};

const optionsBarCustomTooltip = {
  options: {
    plugins: {
      tooltip: {
        callbacks: {
           label: function (context) {
            let label = context.dataset.label || '';
            label = `${label}: ${context.formattedValue} users`;
            return label;
          },
        },
       },
     },
  },
};

new mdb.Chart(
  document.getElementById('bar-chart-custom-tooltip'),
  dataBarCustomTooltip,
  optionsBarCustomTooltip);
</script>