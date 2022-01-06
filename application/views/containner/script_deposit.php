<script type="text/javascript" src=<?php echo base_url('mdb5pro/js/mdb.min.js') ?>></script>
<script>
	const datepickerTranslated = document.querySelector('.datepicker-translated');
	new mdb.Datepicker(datepickerTranslated, {
		title: 'เลือกวันที่',
		monthsFull: ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'],
		monthsShort: ['ม.ค.', 'ก.พ.', 'มี.ค.', 'เม.ย.', 'พ.ค.', 'มิ.ย.', 'ก.ค.', 'ส.ค.', 'ก.ย.', 'ต.ค.', 'พ.ย.', 'ธ.ค.'],
		weekdaysFull: ['วันอาทิตย์', 'วันจันทร์', 'วันอังคาร', 'วันพุธ', 'วันพฤหัส', 'วันศุกร์', 'วันเสาร์'],
		weekdaysShort: ['อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัส', 'ศุกร์', 'เสาร์'],
		weekdaysNarrow: ['อา', 'จ', 'อ', 'พ', 'พฤ', 'ศ', 'ส'],
		okBtnText: 'ตกลง',
		clearBtnText: 'เคลีย',
		cancelBtnText: 'ยกเลิก',
	});
</script>
