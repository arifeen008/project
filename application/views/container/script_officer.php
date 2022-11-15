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
</script>