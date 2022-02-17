<script type="text/javascript" src=<?php echo base_url('mdb5pro/js/mdb.min.js') ?>></script>
<script>
	const instance = new mdb.Datatable(document.getElementById('datatable'))
	document.getElementById('datatable-search-input').addEventListener('input', (e) => {
		instance.search(e.target.value);
	});
</script>
