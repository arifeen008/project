<script type="text/javascript" src=<?php echo base_url('mdb5pro/js/mdb.min.js') ?>></script>
<script>
  CKEDITOR.replace('detail');
  function CKupdate() {
    for (instance in CKEDITOR.instances)
      CKEDITOR.instances[instance].updateElement();
  }
</script>
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
