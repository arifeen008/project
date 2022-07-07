<script type="text/javascript" src=<?php echo base_url('mdb5pro/js/mdb.min.js') ?>></script>
<script type="text/javascript" src=<?php echo base_url('ckeditor/ckeditor.js') ?>></script>
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
<script>
	CKEDITOR.replace('detail');
	function CKupdate() {
		for (instance in CKEDITOR.instances)
			CKEDITOR.instances[instance].updateElement();
	}
</script>
<script>
	const instance = new mdb.Datatable(document.getElementById('datatable'))
	document.getElementById('datatable-search-input').addEventListener('input', (e) => {
		instance.search(e.target.value);
	});
</script>
<script type="text/javascript" src="https://counter9.stat.ovh/private/counter.js?c=3wrcpuf5jgrke9993w3x3p7wsppfre13&down=async" async></script>
<noscript><a href="https://www.freecounterstat.com" title="free hit counter"><img src="https://counter9.stat.ovh/private/freecounterstat.php?c=3wrcpuf5jgrke9993w3x3p7wsppfre13"></a></noscript>