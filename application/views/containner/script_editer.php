<script type="text/javascript" src=<?php echo base_url('mdb5pro/js/mdb.min.js') ?>></script>
<script type="text/javascript" src=<?php echo base_url('ckeditor/ckeditor.js') ?>></script>
<script>
	CKEDITOR.replace('detail');

	function CKupdate() {
		for (instance in CKEDITOR.instances)
			CKEDITOR.instances[instance].updateElement();
	}
</script>